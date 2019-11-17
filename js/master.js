function contactVelidate() {
   var  name = $("#name").val();
   var phone = $("#phone").val();
   var email = $("#email").val();
   var subject = $("#subject").val();
   var message = $("#message").val();

   
//    name errors

   if(name == "")
   {
       $("#name").addClass('is-invalid');
      $('.name-error').show().text('Complete this Field');
       return false;
   }
   else{
    $("#name").removeClass('is-invalid');
    $(".name-error").hide();
    
   }

//    Phone errors

   if(phone == "")
   {
       $("#phone").addClass('is-invalid');
       $(".phone-error").show().text('Complete this Field');
       return false;
   }
   else if (isNaN(phone) || phone.length !== 10 ) {
    $("#phone").addClass('is-invalid');
    $(".phone-error").show().text('Invalid Phone');
    return false;
   }


   else{
    $("#phone").removeClass('is-invalid');
    $(".phone-error").hide().text('');
    
   }

//    Email errors

   if (email == "") {
    $("#email").addClass('is-invalid');
    $(".email-error").show().text('Complete this Field');
    return false;
   } 

   else {
    $("#email").removeClass('is-invalid');
    $(".email-error").hide().text('');
   }



//    subjects errors

    if (subject == "") {
        $("#subject").addClass('is-invalid');
        $(".subject-error").show().text('Complete this Field');
        return false;
    } 
    else {
    $("#subject").removeClass('is-invalid');
    $(".subject-error").hide().text('');
    }



    // Message error

    if (message == "") {
        $("#message").addClass('is-invalid');
        $(".message-error").show().text('Complete this Field');
        return false;
    } 
    else {
    $("#message").removeClass('is-invalid');
    $(".message-error").hide().text('');
    }


}


function chkLogin() {
    var username = $("#username").val();
    var password = $("#password").val();
       
    if (username == "") {
        $("#username").addClass('is-invalid');
        $(".username-error").text("complete this field").show();
        return false;
    }

    
    else if( password == ""){
        $("#password").addClass('is-invalid');
        $(".password-error").text("complete this field").show();
        return false;
    }

    else{
    

        // $.ajax({
        //     type: "POST",
        //     url: "../includes/query/loginQuery.php",
        //     data: $('form').serialize(),
          
        //     error: function (request, error) {  
 
        //         $(".loginError").removeClass('d-none').html('<strong> Opps ! </strong> Something Went Wrong' + error );
        //     },
        //     success: function (html) {
        //         // $("#username").removeClass('is-invalid').addClass('is-valid');
        //         // $(".username-error").hide();
        //         // $("#password").removeClass('is-invalid').addClass('is-valid');
        //         // $(".password-error").hide();
        //         // $(".loginError").removeClass('d-none alert-danger').addClass('alert-success').html(html);
        //         if (html == 1) {
        //             $("#username").removeClass('is-invalid').addClass('is-valid');
        //             $(".username-error").addClass('text-success').removeClass('text-danger').html('username Exists').show();

                    
        //         }
        //         else {
        //             $("#username").addClass('is-invalid');
        //             $(".username-error").html("Invalid Username" + html).show();
        //         }
                
            
        //     }
        // });
        
    }
}

function courseFilter() {
    var name = $("#course-filter").val();
   $("#filter-text").text(name + ' Results');
    
}
//  Email Velidation
// if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
//     $("#userEmail-info").html("(invalid)");
//     $("#userEmail").css('background-color','#FFFFDF');
//     valid = false;
// }

