$(function() {
    document.getElementById('Story').innerHTML = dialouginfo[0]['story'];

    $("#dialog-2").dialog({
        autoOpen: false,
        width: 600,
        buttons: [{
            text: dialouginfo[0]['Answer_1'],
            "id": "Answer1",
            click: function () {
                document.getElementById('Story').innerHTML = dialouginfo[1]['story'];
                $("#dialog-2").dialog({
                    autoOpen: false,
                    width: 600,
                    buttons: [{
                        text: dialouginfo[1]['Answer_1'],
                        "id": "Answer1_1",
                        click: function () {
                            $(this).dialog('close');
                        }}, {
                        text: dialouginfo[1]['Answer_2'],
                        "id": "Answer1_2",
                        click: function () {
                            $(this).dialog('close');
                        }}, {
                        text: dialouginfo[1]['Answer_3'],
                        "id": "Answer1_3",
                        click: function () {
                            $(this).dialog('close');
                        }},
                    ],
                });
            }
        }, {
            text: dialouginfo[0]['Answer_2'],
            "id": "Answer2",
            click: function () {
                $(this).dialog('close');
            }
        }, {
            text: dialouginfo[0]['Answer_3'],
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