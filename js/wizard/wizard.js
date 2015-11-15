$(document).ready(function(){
    // Smart Wizard         
    $('#wizard').smartWizard({
        onLeaveStep:leaveAStepCallback,
        onFinish:onFinishCallback
    });

    function leaveAStepCallback(obj, context){
        return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
    }

    function onFinishCallback(objs, context){
        if(validateAllSteps()){
            $('form').submit();
        }
    }


    // Your Step validation logic
    function validateSteps(stepnumber){
        var isStepValid = true;
        // validate step 1
        if(stepnumber == 1){
            $('.btn-success').addClass('disabled');
            $('.btn-primary').addClass('disabled');

            setTimeout(function(){
                $('.btn-success').removeClass('disabled');
                $('.btn-primary').removeClass('disabled');
            }, 300);

            return isStepValid;
        }

        if(stepnumber == 2){
            $('.btn-success').addClass('disabled');
            $('.btn-primary').addClass('disabled');

            setTimeout(function(){
                $('.btn-success').removeClass('disabled');
                $('.btn-primary').removeClass('disabled');
            }, 300);

            return isStepValid;
        }    

        if(stepnumber == 3){

            $('.btn-success').addClass('disabled');
            $('.btn-primary').addClass('disabled');

            setTimeout(function(){
                $('.btn-success').removeClass('disabled');
                $('.btn-primary').removeClass('disabled');
            }, 300);


            return isStepValid;
        }

        if(stepnumber == 4){
            $('.btn-success').addClass('disabled');
            $('.btn-primary').addClass('disabled');

            setTimeout(function(){
                $('.btn-success').removeClass('disabled');
                $('.btn-primary').removeClass('disabled');
            }, 300);


            return isStepValid;
        }

        if(stepnumber == 5){
            $('.btn-success').addClass('disabled');
            $('.btn-primary').addClass('disabled');

            setTimeout(function(){
                $('.btn-success').removeClass('disabled');
                $('.btn-primary').removeClass('disabled');
            }, 300);


            
            return isStepValid;
        }

        if(stepnumber == 6){
            $('.btn-success').addClass('disabled');
            $('.btn-primary').addClass('disabled');

            setTimeout(function(){
                $('.btn-success').removeClass('disabled');
                $('.btn-primary').removeClass('disabled');
            }, 300);


            
            return isStepValid;
        }

    }
    function validateAllSteps(){
        var isStepValid = true;
        // all step validation logic     
        return isStepValid;
    }          
});