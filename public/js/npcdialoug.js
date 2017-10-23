$(function() {
    console.log(dialouginfo);
    document.getElementById('Story').innerHTML = dialouginfo[0]['story'];

    $("#dialog-2").dialog({
        autoOpen: false,
        width: 600,
        buttons: [{
            text: dialouginfo[0]['action'],
            click: function () {
                $(this).dialog('close');
            }
        }, {
            text: dialouginfo[1]['action'],
            "id": "Answer2",
            click: function () {
                $(this).dialog('close');
            }
        }, {
            text: dialouginfo[2]['action'],
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