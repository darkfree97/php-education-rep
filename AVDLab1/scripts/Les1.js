/**
 * Created by Darkfree on 09.09.2016.
 */
var f1,f2,f3,f4,f5,f6,f7,f8 = false;
function sign_up () {
    var surname = $("#surname").val();
    var name = $("#name").val();
    var f_name = $("#f_name").val();
    var birthday = $("#birth_day").val();
    var sex = $("#sex").val();
    var mail = $("#m_mail").val();
    var phone = $("#phone_num").val();
    var country = $("#country").val();
    var message = "Прізвище: "+surname+"\n";
    message += "Ім'я: "+name+"\n";
    message += "По-Батькові: "+f_name+"\n";
    message += "Дата народження: "+birthday+"\n";
    message += "Стать: "+sex+"\n";
    message += "Електронна пошта: "+mail+"\n";
    message += "Номер телефону: "+phone+"\n";
    message += "Країна: "+country+"\n";
    alert(message);
}
var name_reg = /^[А-ЯІЇ][а-яії']{1,19}[а-яії]$/;
var date_reg = /^\d\d\d\d-\d\d-\d\d$/;
var email_reg = /^.*@[a-z]{1,20}\.?[a-z]{1,5}\.[a-z]{1,5}$/;
var phone_reg = /^\+?\d{12}$/;
var country_reg = /^[А-ЯІЇ][а-яії']{1,19}[а-яії]$/;
function valid_1() {
    if(!(name_reg.test($("#surname").val()))){
        $("#message_1").html("Поле з \"Прізвище\" не заповнено або введені невірні дані!!!");
    }
    else{
        $("#message_1").html("");
        f1 = true;
    }
}
function valid_2() {
    if(!(name_reg.test($("#name").val()))){
        $("#message_2").html("Поле \"Ім'я\" не заповнено або введені невірні дані!!!");
    }
    else{
        $("#message_2").html("");
        f2 = true;
    }
}
function valid_3() {
    if(!(name_reg.test($("#f_name").val()))){
        $("#message_3").html("Поле з \"По-Батькові\" не заповнено або введені невірні дані!!!");
    }
    else{
        $("#message_3").html("");
        f3 = true;
    }
}
function valid_4() {
    if(!(date_reg.test($("#birth_day").val()))){
        $("#message_4").html("Поле з \"Дата народження\" не заповнено або введені невірні дані!!!");
    }
    else{
        $("#message_4").html("");
        f4 = true;
    }
}
function valid_5() {
    if($("#sex").val()=="Ваша стать"){
        $("#message_5").html("Поле з \"Стать\" не заповнено або введені невірні дані!!!");
    }
    else{
        $("#message_5").html("");
        f5 = true;
    }
}
function valid_6() {
    if(!(email_reg.test($("#m_mail").val()))){
        $("#message_6").html("Поле з \"Електронна пошта\" не заповнено або введені невірні дані!!!");
    }
    else{
        $("#message_6").html("");
        f6 = true;
    }
}
function valid_7() {
    if(!(phone_reg.test($("#phone_num").val()))){
        $("#message_7").html("Поле з \"Номер телефону\" не заповнено або введені невірні дані!!!");
    }
    else{
        $("#message_7").html("");
        f7 = true;
    }
}
function valid_8() {
    if(!(country_reg.test($("#country").val()))){
        $("#message_8").html("Поле з \"Країна\" не заповнено або введені невірні дані!!!");
    }
    else{
        $("#message_8").html("");
        f8 = true;
    }
}
$("form").submit(function (evt) {
    valid_1();
    valid_2();
    valid_3();
    valid_4();
    valid_5();
    valid_6();
    valid_7();
    valid_8();
    if(f1&&f2&&f3&&f4&&f5&&f6&&f7&&f8){
        sign_up();
        $("#message_10").html("");
    }
    else {
        $("#message_10").html("Відправка даних неможлива!!!");
        evt.preventDefault();
    }
});