/* 
http://webdesign.tutsplus.com/tutorials/building-a-bootstrap-contact-form-using-php-and-ajax--cms-23068
 */

$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
 
    submitForm();
});

function submitForm(){
    // Inicializa variaveis com o conteudo do formulário
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
 
 
 
    $.ajax({
        type: "POST",
        url: "formProcess.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                console.log("formSuccess");
                formSuccess();
            }else {
                console.log ("formSuccess FALHOU. Textos: " + text);
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}


