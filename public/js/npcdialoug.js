$(function() {
    document.getElementById('Story').innerHTML = dialouginfo[0]['story'];
    var Answer1 = dialouginfo[0]['Answer_1']
    var Answer2 = dialouginfo[0]['Answer_2']
    var Answer3 = dialouginfo[0]['Answer_3']

    $("#dialog-2").dialog({
        autoOpen: false,
        width: 600,
        buttons: [{
            text: Answer1,
            "id": "Answer1",
            click: function () {
                $(this).dialog('close');
            }
        }, {
            text: Answer2,
            "id": "Answer2",
            click: function () {
                $(this).dialog('close');
            }
        }, {
            text: Answer3,
            "id": "Answer3",
            click: function () {
                $(this).dialog('close');
            },
        }],
    });

    $("#opener-2").click(function () {
        $("#dialog-2").dialog("open");
    })
});