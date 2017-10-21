$(function() {
    document.getElementById('Story').innerHTML = dialouginfo[0]['story'];
    var checktime = function () {
        alert('i worked');
    }
    var answerButtons = {};
    for (var i = 1; i < 4; i++) {
        answerButtons[dialouginfo[0]['Answer_' + i]] = checktime;
    }

    $("#dialog-2").dialog({
        autoOpen: false,
        width: 600,
        buttons: answerButtons
    });

    $("#opener-2").click(function () {
        $("#dialog-2").dialog("open");
    })
});