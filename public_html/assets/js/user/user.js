

function getForm(form){
    if (form.hasClass("user_registration")){
        registrationCheck(form);
    }else if(form.hasClass("user_login")){
        loginCheck();
    }else if (form.hasclass("user_settings")){

    }

}


$('.user_form').change(function(){
getForm(this);
});


function registrationCheck(form){
   foreach( form.children.has(".required").val() == ""){
       this.addClass("has-warning")
    }

}