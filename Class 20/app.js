jQuery(document).ready(function(){

    setInterval(stopWatch, 1000);

    function stopWatch(){
        var _second = parseInt(jQuery("#seconds").text());
        _second = _second - 1;

        if(_second < 0 ){
            _second = 59;

            var _minutes = parseInt(jQuery("#minutes").text());
            _minutes = _minutes - 1;

            if(_minutes < 0 ){
                _minutes = 59;

                var _hours = parseInt(jQuery("#hourss").text());
                _hours = _hours - 1;

                if(_hours == 0){
                    _minutes = 0;
                    _second = 0;
                }
            }
        }

        
    }

    
    });