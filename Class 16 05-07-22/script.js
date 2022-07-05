function bmiCalculator(){
    var _weight = parseFloat(document.getElementById('weight').value);
    var _height_feet = parseFloat(document.getElementById('heightFeet').value);
    var _height_inchi = parseFloat(document.getElementById('heightInchi').value);
    var _bmi = parseFloat(document.getElementById('bmi').value);

    var _height_total, _height_meter;

    _height_total = (_height_feet * 12) + _height_inchi;
    _height_meter = _height_total *0.0254;

    _bmi = _weight / ( _height_meter * _height_meter);

    document.getElementById('bmi').value = _bmi;

}

function addStyleBmi(){
    var x = document.getElementById("bmi");
    x.classList.add("bmi-input");
}
function addStyleSugg(){
    var x = document.getElementById("sugg");
    x.classList.add("bmi-input");
}