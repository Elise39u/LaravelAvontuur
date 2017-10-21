$(function() {
    document.getElementById('Story').innerHTML = dialouginfo[0]['story'];
    var answerButtons = {};
    var answerNumber = 1;
    for (var i = 1; i < 4; i++) {
        answerButtons[i] = {
            text: dialouginfo[0]['Answer_' + i],
            click: function() {
               alert('I`m Answer_ ' + answerNumber);
               answerNumber++;
            }
        };
    }
    
    $("#dialog-2").dialog({
        autoOpen: false,
        width: 600,
        buttons: answerButtons,
    });

    $("#opener-2").click(function () {
        $("#dialog-2").dialog("open");
    })
});