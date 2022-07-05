//------------------------
 // For Bangla Frist Pepar
 //-----------------------
var grade="";
var point=0;
function checkResult(totalMark){

		if (totalMark >= 80 && totalMark <=100) {
			grade="A+";
			point=5.00;
		}
		else if (totalMark >= 70 && totalMark <=79) {
			grade="A";
			point=4;			
		}
		else if (totalMark >= 60 && totalMark <=69) {
			grade="A-";
			point=3.5;			
		}
		else if (totalMark >= 50 && totalMark <=59) {
			grade="B";
			point=3;			
		}
		else if (totalMark >= 40 && totalMark <=49) {
			grade="C";
			point=2;			
		}
		else if (totalMark >= 33 && totalMark <=39) {
			grade="D";
			point=1;			
		}
		else if (totalMark >= 0 && totalMark <=32) {
			grade="F";
			point=0;			
		}
		else{
			alert("Invalid Input");
			grade="0";
			point=0;			
		}
}
function result1(){
	var _tm=parseInt(document.getElementById('tm').value);
	var _pm=parseInt(document.getElementById('pm').value);
	var _totalMark=_tm+_pm;
	document.getElementById('ttm').value=_totalMark;
	checkResult(_totalMark);
	document.getElementById("grad").value=grade;
	document.getElementById("point").value=point;
}
//------------------------
 // For Bangla Frist Pepar
 //-----------------------
function result2(){
	var _tm=parseInt(document.getElementById('tm1').value);
	var _pm=parseInt(document.getElementById('pm1').value);
	
	var _totalMark=_tm + _pm;
	document.getElementById('ttm1').value=_totalMark;
	checkResult(_totalMark);
	document.getElementById("grad1").value=grade;
	document.getElementById("point1").value=point;	
}
 //------------------------
 // For English 1st Pepar
 //------------------------
function result3(){
	var _tm=parseInt(document.getElementById('tm2').value);
	var _pm=parseInt(document.getElementById('pm2').value);
	
	var _totalMark=_tm+_pm;
	document.getElementById('ttm2').value=_totalMark;
	checkResult(_totalMark);
	document.getElementById("grad2").value=grade;
	document.getElementById("point2").value=point;
}
// final result
function finalResult(){
	
	if(document.getElementById("grad").value=="F" || document.getElementById("grad1").value=="F" || document.getElementById("grad2").value=="F")
	{
		document.getElementById("totalgrade").value="F";
		document.getElementById("totalPoint").value="0.00";
		document.getElementById("totalMark").value="0.00";
	}
	else{
		var _tm=document.getElementById('ttm').value;
		var _tm1=document.getElementById('ttm1').value;
		var _tm2=document.getElementById('ttm2').value;
		var _totalMark = parseInt(_tm)+parseInt(_tm1)+parseInt(_tm2);
		document.getElementById('totalMark').value=_totalMark;

		var _point =document.getElementById('point').value;
		var _point1 =document.getElementById('point1').value;
		var _point2 =document.getElementById('point2').value;
		var _totalPoint=((parseFloat(_point) + parseFloat(_point1))/2);
		if(document.getElementById('grad2').value == "A+" ){
			
			_totalPoint=_totalPoint + 0.3;
			
			if(_totalPoint >= 5){
				_totalPoint=5;
			}
			document.getElementById("totalPoint").value=_totalPoint;
			
		}
		else if(document.getElementById('grad2').value == "A" ){
			
			_totalPoint=_totalPoint + 0.2;
			
			if(_totalPoint >= 5){
				_totalPoint=5;
			}
			document.getElementById("totalPoint").value=_totalPoint;
			
		}
		else if(document.getElementById('grad2').value == "A-" ){
			
			_totalPoint=_totalPoint + 0.1;
			
			if(_totalPoint >= 5){
				_totalPoint=5;
			}
			document.getElementById("totalPoint").value=_totalPoint;
			
		}
		if (_totalPoint==5.00) {
			document.getElementById("totalgrade").value="A+";
		}
		else if(_totalPoint >= 4.00 && _totalPoint<=4.99){
			document.getElementById("totalgrade").value="A";
		}
		else if(_totalPoint >= 3.00 && _totalPoint<=3.99){
			document.getElementById("totalgrade").value="A-";
		}
		else if(_totalPoint >= 2.00 && _totalPoint<=2.99){
			document.getElementById("totalgrade").value="A-";
		}
		else if(_totalPoint >= 1.00 && _totalPoint<=1.99){
			document.getElementById("totalgrade").value="A-";
		}
	}
}






