/**
 * Created by justi on 5-3-2018.
 */
var allowedKeys = {
    65: 'a',
    70: 'f',
    73: 'i',
    85: 'u',
    76: 'l',
    69: 'e',
    82: 'r',
}

var SerectCode = ['f', 'a', 'i', 'l', 'u', 'r', 'e'];

var SerectCodePostion = 0;

document.addEventListener('keydown', function (e) {
    var key = allowedKeys[e.keyCode]
    var requiredKey = SerectCode[SerectCodePostion];
    if (key == requiredKey) {
        SerectCodePostion++;
        if(SerectCodePostion == SerectCode.length) {
            activateIE();
        }
    } else {
        SerectCodePostion = 0;
    }
});

function activateIE() {
    $('.panel-heading').prepend($('<img>',{id:'theImg',src:'../img/FailureMeme.png'}))
}