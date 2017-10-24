$(function () {

    document.getElementById('Story').innerHTML = dialoginfo[0]['story'];
    var actionresult =[];
    $.each( dialogactions, function (i, l) {
        actionresult.push(l['action'])
    })

function checkaction(actionresult) {
    switch (actionresult) {
        case "CLOSE DIALOG":
            alert('i close')
            break;
        case "OPEN DIALOG":
            alert('Ik werk')
            break;
    }
}
    console.log(actionresult, dialogactions);

    $("#dialog-2").dialog({
        autoOpen: false,
        width: 600,
        buttons: [{
            text: dialoganswers[0]['button_title'],
            "id": "Answer1",
            click: function () {
                checkaction(actionresult[0])
            }
        }, {
            text: dialoganswers[1]['button_title'],
            "id": "Answer2",
            click: function () {
                checkaction(actionresult[1])
            }
        }, {
            text: dialoganswers[2]['button_title'],
            "id": "Answer3",
            click: function () {
                checkaction(actionresult[2])
            }
        }],
    });

    $("#opener-2").click(function () {
        $("#dialog-2").dialog("open");
    })
});