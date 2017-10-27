$(function () {
    var actionValueCheck;

    document.getElementById('Story').innerHTML = dialoginfo[0]['story'];
    var actionresult =[];
    $.each( dialogactions, function (i, l) {
        actionresult.push(l['action'])
    })

function checkaction(actionresult) {
    switch (actionresult) {
        case "CLOSE DIALOG":
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
            console.log(checkAnswerArray, dialogactions)
            if(checkDialogArray) {
                buttoninfo = [];
                $.each( checkAnswerArray, function (i, l) {
                    buttoninfo.push({text: l['button_title'], click: function () {
                          l.actions.forEach(function (e) {
                              actionValueCheck = e.action_value
                              checkaction(e.action)
                          })
                    } })
                })
                document.getElementById('Story').innerHTML = checkDialogArray[0]['story'];
                $("#dialog-2").dialog({
                    autoOpen: false,
                    width: 600,
                    buttons: buttoninfo
                    }
                )}
                else {
            }
            break;
    }
}

    $("#dialog-2").dialog({
        autoOpen: false,
        width: 600,
        buttons: [{
            text: dialoganswers[0]['button_title'],
            "id": "Answer1",
            click: function () {
                actionValueCheck = dialogactions[0]['action_value']
                checkaction(actionresult[0])
            }
        }, {
            text: dialoganswers[1]['button_title'],
            "id": "Answer2",
            click: function () {
                actionValueCheck = dialogactions[1]['action_value']
                checkaction(actionresult[1])
            }
        }, {
            text: dialoganswers[2]['button_title'],
            "id": "Answer3",
            click: function () {
                actionValueCheck = dialogactions[2]['action_value']
                checkaction(actionresult[2])
            }
        }],
    });

    $("#opener-2").click(function () {
        $("#dialog-2").dialog("open");
    })
});