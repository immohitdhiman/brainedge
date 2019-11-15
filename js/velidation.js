      
function newzletterVelidation() {
    
    email = $('#newzletterEmail');
    newzletterError = $('.newzletterError');
    submitButton = $('#newzletterSubmitButton');
    emailValue = email.val();
    var dataString = {email : emailValue };



    if (emailValue == '') {
        email.addClass('is-invalid');
        newzletterError.text("Complete this field");
   
        return false;
    }

    else
    {
    
        $.ajax ({
            type: 'POST',
            dataType: 'text',
            url: 'includes/query/basics.php',
            data: dataString,
           
            error: function (request, error) {
                console.log(arguments);
                    email.addClass('is-invalid');
                    newzletterError.text(" Can't do because: " + error);
                
                    return false;
            },
            success: function(html){
                if (html == 1) {
                    email.addClass('is-valid').removeClass('is-invalid');
                    newzletterError.text(" Thank You ! " + emailValue).addClass('text-success').removeClass('text-white-50 text-danger');
                    submitButton.addClass('btn-success').removeClass('btn-light btn-danger');
                 
                } else {
                    email.addClass('is-invalid');
                    newzletterError.html(" Opps Something went Wrong ! <strong> " + html + "</strong>").addClass('text-white-50').removeClass('text-danger');
                    submitButton.addClass('btn-light').removeClass(' btn-success');
                    
                  
                }
               
                
            }
            

    });

}

}   

function sendQuery() { 
    
    var name = $("#queryName").val();
    var phone = $("#queryPhone").val();
    var email = $("#queryEmail").val();
    var subject = $("#querySubject").val();
    var message = $("#queryMessage").val();

    var  FormData = {queryName : name ,  queryPhone : phone,  queryEmail : email, querySubject : subject, queryMessage : message };
    // alert (JSON.stringify(FormData));
    if (name == '' || phone == '' || email == '' || subject == '' || message == '') {
        $(".queryAlert").removeClass('d-none').text('Complete All Fields');
        return false;
    }

    else{
        $.ajax({
            type: "POST",
            url: "includes/query/basics.php",
            data: "FormData",
            dataType: "text",
            error: function (request, error) {
                console.log(arguments);
                $(".queryAlert").removeClass('d-none').text("Opps! Something went wrong" + error);
              },
                success: function (html) {
                $(".queryAlert").text(html).removeClass('d-none');
                
            }
        });
    }
 }


 function sendMessage() {  

 }
