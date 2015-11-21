/* 
 http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 */

$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Preencha o formulário corretamente!");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});



function submitForm() {
    // Inicializa variaveis com o conteudo do formulário
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();



    $.ajax({
        type: "POST",
        url: "formProcess.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function (text) {
            if (text == "success") {
                console.log("formSuccess");
                formSuccess();
            } else {
                console.log("formSuccess FALHOU. Texto: " + text);
            }
        }
    });
}
function formSuccess() {
    //limpa formulario
    $("#contactForm")[0].reset();
    //Envia mensagem com sucesso
    submitMSG(true, "Mensagem enviada!");
}

function submitMSG(valid, msg) {
    var msgClasses;
    if (valid) {
        msgClasses = "h3 text-center bounce animated text-success";
    } else {
        msgClasses = "h3 text-center flash animated text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}

function formError() {
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}