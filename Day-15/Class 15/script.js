var _today = new Date();

var _todayDate = _today.getDate();
var _todayMonth = _today.getMonth() + 1;
var _todayYear = _today.getFullYear();

// alert(_todayDate);
// alert(_todayMonth);
// alert(_todayYear);

function ck() {
    var abc = document.getElementById("check").getFullYear;
    alert(abc);
}


function calculateAge() {
    var _birthYear = document.getElementById("birthYear").value;
    var _birthMonth = document.getElementById("birthMonth").value;
    var _birthDate = document.getElementById("birthDate").value;

    // alert(_birthYear);
    // alert(_birthMonth);
    // alert(_birthDate);
    var _ageDate, _ageMonth, _ageYear;

    if (_birthDate > _todayDate) {
        _todayDate = (_todayDate + 30);
        _ageDate = _todayDate - _birthDate;
        document.getElementById("ageDate").value = _ageDate;
        _todayMonth = _todayMonth - 1;

        if (_birthMonth > _todayMonth) {
            _todayMonth = _todayMonth + 12;
            _ageMonth = _todayMonth - _birthMonth;
            document.getElementById("ageMonth").value = _ageMonth;

            _todayYear = _todayYear - 1;
            _ageYear = _todayYear - _birthYear;
            document.getElementById("ageYear").value = _ageYear;
        }
        else {
            _ageMonth = _todayMonth - _birthMonth;
            document.getElementById("ageMonth").value = _ageMonth;

            _ageYear = _todayYear - _birthYear;
            document.getElementById("ageYear").value = _ageYear;
        }
    }
    else if (_birthMonth > _todayMonth) {
        _ageDate = _todayDate - _birthDate;
        document.getElementById("ageMonth").value = _ageDate;

        _todayMonth = _todayMonth + 12;
        _ageMonth = _todayMonth - _birthMonth;
        document.getElementById("ageMonth").value = _ageMonth;

        _todayYear = _todayYear - 1;
        _ageYear = _todayYear - _birthYear;
        document.getElementById("ageYear").value = _ageYear;
    }
    else {
        _ageDate = _todayDate - _birthDate;
        document.getElementById("ageDate").value = _ageDate;

        _ageMonth = _todayMonth - _birthMonth;
        document.getElementById("ageMonth").value = _ageMonth;

        _ageYear = _todayYear - _birthYear;
        document.getElementById("ageYear").value = _ageYear;
    }

}

function validation() {

}