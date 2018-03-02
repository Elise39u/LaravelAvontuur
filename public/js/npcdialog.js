$(function () {
    var actionValueCheck;

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function getObjects(obj, key, val) {
        var objects = [];
        for (var i in obj) {
            if (!obj.hasOwnProperty(i)) continue;
            if (typeof obj[i] == 'object') {
                objects = objects.concat(getObjects(obj[i], key, val));
            } else if (i == key && obj[key] == val) {
                objects.push(obj);
            }
        }
        return objects;
    }

    document.getElementById('Story').innerHTML = dialoginfo[0]['story'];
    var actionresult = [];
    $.each(dialogactions, function (i, l) {
        actionresult.push(l['action'])
    })

    function checkaction(actionresult) {
        switch (actionresult) {
            case "CLOSE DIALOG":
                $("#dialog-2").dialog('close');
                break;
            case "CLOSE DIALOG, START QUEST":
                var Activated = 'Start Quest'
                $.ajax({
                    url: "/checkQuest",
                    dataType: 'json',
                    data: {npc_id: currentDialog[0]['id'], Token: Activated},
                    success: function (result) {
                        alert(result.trick)
                    },
                })
                $("#dialog-2").dialog('close');
                break;
            case "OPEN DIALOG":
                var id = actionValueCheck
                var answerid = actionValueCheck
                var checkDialogArray = $.grep(dialoginfo, function (e) {
                    return e.id == id;
                });
                var checkAnswerArray = $.grep(dialoganswers, function (e) {
                    return e.dialog_id == answerid;
                });
                if (checkDialogArray) {
                    buttoninfo = [];
                    $.each(checkAnswerArray, function (i, l) {
                        buttoninfo.push({
                            text: l['button_title'], click: function () {
                                l.actions.forEach(function (e) {
                                    actionValueCheck = e.action_value
                                    checkaction(e.action)
                                })
                            }
                        })
                    })
                    document.getElementById('Story').innerHTML = checkDialogArray[0]['story'];
                    $("#dialog-2").dialog({
                            autoOpen: false,
                            width: 600,
                            buttons: buttoninfo
                        }
                    )
                }
                else {
                }
                break;
        }
    }

    var currentDialog = getObjects(dialoganswers, 'dialog_id', dialoginfo[0]['id'])
    var NewDialogActions = [];
    for (i = 0; i < currentDialog.length; i++) {
        NewDialogActions.push(getObjects(dialogactions, 'dialog_answer_id', currentDialog[i]['id']));
    }
    var actions = []
    for (i = 0; i < NewDialogActions.length; i++) {
        actions.push(getObjects(dialogactions, 'id', currentDialog[i]['id']))
    }

    var NotAllowed;
    var Allowed;
    $.ajax({
        url: "/checkQuest",
        dataType: 'json',
        data: {npc_id: dialoginfo[0]['npc_id']},
        success: function (result) {
            if (result.Status == 'Unknown' || result.Status == 'Completed') {
                NotAllowed = false;
                Allowed = true;
            } else {
                $("#opener-2").hide();
                NotAllowed = true;
                Allowed = false;
            }
        }
    })

    if (NotAllowed === true) {
        alert('Complete the quest first')
    } else {
        $("#opener-2").click(function () {
            $("#dialog-2").dialog("open");
        })
    }

    $("#dialog-2").dialog({
        autoOpen: false,
        width: 600,
        buttons: [{
            text: currentDialog[0]['button_title'],
            "id": "Answer1",
            click: function () {
                actionValueCheck = NewDialogActions[0][0]['action_value']
                checkaction(actions[0][0]['action'])
            }
        }, {
            text: currentDialog[1]['button_title'],
            "id": "Answer2",
            click: function () {
                actionValueCheck = NewDialogActions[1][0]['action_value']
                checkaction(actions[1][0]['action'])
            }
        }, {
            text: currentDialog[2]['button_title'],
            "id": "Answer3",
            click: function () {
                actionValueCheck = NewDialogActions[2][0]['action_value']
                checkaction(actions[2][0]['action'])
            }
        }],
    });

    });