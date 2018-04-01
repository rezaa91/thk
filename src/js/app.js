let $ = require('jquery');
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';



$(function(){
    
    
    //fade in header and nav bar on load
    $('#main_header').hide().fadeIn(2000);
    $('#dl').hide().delay(1000).fadeIn(2000);
    $('#sub_header').hide().delay(1000).fadeIn(2000);
    $('.navbar li:not("#dl_link")').hide().delay(1500);
    
    $('.navbar li:not("#dl_link")').each(function(i){
        $(this).delay(i*500).fadeIn(500);
    })
    

    
    //FORM VALIDATION - IIFE
    (function(){
        //cache DOM values
        let form = document.forms[0]; //form
        let elements = form.elements; //elements
        let submit = document.getElementById('submit'); //submit btn
        
        let formSubmitted = false; //flag var
        
        //check inputs - add error validation class to inputs with no value when blurred
        for(let i = 0; i<elements.length-1; i++){
            elements[i].addEventListener('blur', function() {
                if(!this.value){
                    this.classList.add('validation');
                    if(this.classList.contains('correct')){
                        this.classList.remove('correct'); //remove correct class if value removed
                    }
                    
                }else{
                    this.classList.remove('validation');
                    this.classList.add('correct'); //give class 'correct' to all inputs with a value
                }
            })
        }
        
        //check whether all form inputs have a value
        function check(){
            let hasVal = false; //set flag var to false
            if(document.getElementsByClassName('correct').length === 4){
                hasVal = true;
            }
            
            return hasVal;
        }
        
        form.addEventListener('submit', function(e) {
            e.preventDefault(); //prevent form firing
            let haveVals = check(); //check all form inputs have a value
            
            if(!formSubmitted && haveVals){//if form not previously submitted and all form values have inputs
                if(submit.classList.contains('btn-danger')){
                    submit.classList.remove('btn-danger'); //remove class if previous form submissions had errors
                }
                
                submit.classList.add('btn-success');
                submit.value = "SENT"; //inform user form has been sent
                formSubmitted = true; //set flag var to true
                submit.disabled = true;
                
                //make form inputs readonly
                for(let i = 0; i<elements.length-1; i++){
                    elements[i].setAttribute('readonly',true);
                }
                
            }else{
                submit.classList.add('btn-danger');
                submit.value = "ERROR!";
            }
        })
        
    }());
    
})

