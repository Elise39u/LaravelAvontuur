$(function() {
    document.getElementById('Story').innerHTML = 'Dit is een test verhaal <br>' +
            'En ik kan meerdere regels heben doormiddel van de plus <br>' +
            'br zorgen voor de spaties in de dialoug'
    $("#dialog-2").dialog({
        autoOpen: false,
        width: 600,
        buttons: {
            Test_Knop1: function () {$(this).dialog('close');},
            Test_Knop2: function () {$(this).dialog('close');},
            Test_Knop3: function () {$(this).dialog('close');}
        }
    });

    $("#opener-2").click(function () {
        $("#dialog-2").dialog("open");
    })
});