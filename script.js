jQuery( document ).ready(function($) {
$(".user_data.user_name").focus(function(){
        console.log(1111);
        $(".user_data.form_submit").css("display","block");
    });
    $(".user_data.user_last_name").focus(function(){
        $(".user_data.form_submit").css("display","block");
    });
    $(".user_data.user_email").focus(function(){
        $(".user_data.form_submit").css("display","block");
    });
    $(".user_data.user_pass").focus(function(){
        $(".user_data.form_submit").css("display","block");
    });
})