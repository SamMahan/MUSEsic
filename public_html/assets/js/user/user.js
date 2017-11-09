
$(document).ready(function() {
    function getForm(form) {
        var form1 = form;
        if (form1.prop("id") == "user-registration") {
            simpleCheck(form);
        } else if (form.hasClass("user_login")) {
            passwordCheck();
        } else if (form.hasclass("user_settings")) {

        }

    }


    $('form').change(function() {
        getForm($(this));
    });
    $('close-modal').click(function(){
        this.parent(".modal").removeAttr("style");
    });


    function simpleCheck(form) {
        var requiresConfirm = false;
        form.find("input").each(function () {
            if ($(this).attr("name") == "confirm-password") {
                requiresConfirm = true;
            }
            if ($(this).val() == "" && $(this).hasClass("required")) {
                $(this).parent("div").removeClass("has-success");
                $(this).parent("div").addClass("has-warning");



            } else {
                $(this).parent("div").removeClass("has-warning");
                $(this).parent("div").addClass("has-success");



            }
        });
        if (requiresConfirm == true) {
            passwordCheck(form);
        }
        else {
            form.find(".submit-button").attr("type", "submit");
        }

    }

    function passwordCheck(form) {
        var test = form.child(".password").val();
        if (form.find(".password").val() !== form.find(".confirm-password").val() && form.find(".confirm-password").val() != "") {

            form.find(".password").parent("div").removeClass("has-success");
            form.find(".confirm-password").parent("div").removeClass("has-success");
            form.find(".password").parent("div").addClass("has-warning");
            form.find(".confirm-password").parent("div").addClass("has-warning");
            alert("password and confirm-password should match!")
        }else if(form.find(".password").val() === form.find(".confirm-password").val() && form.find(".confirm-password").val() != "") {
            form.find(".password").parent("div").removeClass("has-warning");
            form.find(".confirm-password").parent("div").removeClass("has-warning");
            form.find(".password").parent("div").addClass("has-success");
            form.find(".confirm-password").parent("div").addClass("has-success");
            form.find(".submit-button").attr("type", "submit");
        }
    }
});