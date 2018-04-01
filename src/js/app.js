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
    
    
    //VALIDATE FORM
    let form = document.forms[0]; //cache form
    let elements = form.elements; //cache form elements
    let formSubmitted = false; //flag var
    $('#submit').prop('disabled', true);
    
    let all = false;
    
    //change class dependent on user form input
    for(let i = 0; i<elements.length; i++){
        elements[i].addEventListener('blur', function() {
            if(!this.value){ //if no value in input box
                this.classList.add('validation');
                all = false; //set flag var to false
            }else{ //if value exists
                this.classList.remove('validation');
                all = true; //set flag to true
            }
            
            checkForm(); //run checkForm function
        })
    }
    
    function checkForm(){ //check to see whether all form inputs have been inputted into
        if(all && !formSubmitted){ //if all form inputs have value and form previously not sent
            $('#submit').prop('disabled',false); //enable submit btn
        }else{
            $('#submit').prop('disabled',true); //disable submit btn
        }
    }
    
    
    if(!formSubmitted) {//if form previously not submitted
        form.addEventListener('submit', function(e) {
            formSubmitted = true; //set flag  var to true
            $('#submit').prop('disabled',true); //disable btn to prevent user from sending continious form results
            console.log('form submitted');
            
            if(formSubmitted){
                e.preventDefault(); //prevent form firing
            }
            
        })
    }    
})

