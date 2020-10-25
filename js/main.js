



// Super Wheel Script
jQuery(document).ready(function($){




    $('.wheel-standard').superWheel({
        slices: [
        {
            text: "20% OFF",
            value: 1,
            message: "You win 20% off",
            discount: "95Qm9tof",
            background: "#546E7A",
            
        },
        {
            text: "No luck",
            value: 0,
            message: "You have No luck today",
            discount: "no",
            background: "#455A64",
            
        },
        {
            text: "30% OFF",
            value: 1,
            message: "You win 30% off",
            discount: "8C46fBeH",
            background: "#546E7A",
            
        },
        {
            text: "Lose",
            value: 0,
            message: "You Lose :(",
            discount: "no",
            background: "#455A64",
            
        },
        {
            text: "40% OFF",
            value: 1,
            message: "You win 40% off",
            discount: "aHiH4bfd",
            background: "#546E7A",
            
        },
        {
            text: "Nothing",
            value: 0,
            message: "You get Nothing :(",
            discount: "no",
            background: "#455A64",
            
        }
        ],
        text : {
            color: '#CFD8DC',
        },
        line: {
            width: 10,
            color: "#78909C"
        },
        outer: {
            width: 14,
            color: "#78909C"
        },
        inner: {
            width: 15,
            color: "#78909C"
        },
        marker: {
            background: "#00BCD4",
            animate: 1
        },

        selector: "value",



    });
    
    
    
    var tick = new Audio('dist/tick.mp3');
    
    $(document).on('click','.wheel-standard-spin-button',function(e){

        $('.wheel-standard').superWheel('start','value',Math.floor(Math.random() * 2));
        $(this).prop('disabled',true);
    });
    
    
    $('.wheel-standard').superWheel('onStart',function(results){


        $('.wheel-standard-spin-button').attr('disabled', 'disabled');
        
    });
    $('.wheel-standard').superWheel('onStep',function(results){

        if (typeof tick.currentTime !== 'undefined')
            tick.currentTime = 0;
        
        tick.play();
        
    });
    
    
    $('.wheel-standard').superWheel('onComplete',function(results){
        //console.log(results.value);
        if(results.value === 1){

            swal({
                type: 'success',
                title: "Congratulations!", 
                html: results.message+' <br><br><b>Discount : [ '+ results.discount+ ' ]</b>'
            });

            window.location.replace("/");
        }else{
            swal("Oops!", results.message, "error");
           window.location.replace("/");
        }


        $('.wheel-standard-spin-button:disabled').prop('disabled',false).text('Spin');

    });
    
    
    
    
    
});