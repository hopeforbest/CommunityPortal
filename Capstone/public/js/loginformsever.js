$(document).ready(function(){
	alert("loginform");
  $('#loginform').submit(function(){
       window.location.href = 'http://localhost:8383/Module3ProjectNetBean/loginsucesspage.html';
    });
    return false;
  });
});
function ValidationForm(){ 
   alert("hai");
    
    var isValidForm = validateEmail()

    if(isValidForm){
        isValidForm = validatName();
        }
      
        return isValidForm;
    }

        function validateName()
        {   alert("hai");
            var password = $("#txt_password").val();
            var passwordlength=password.length;
            var alphaExp = /^[0-9a-zA-Z]+$/;
            if (password==""){
                    $('#disp').text(" All fields are mandatory *");
                    $('#txt_password').focus();
                    return false;
                   }
               else{
                   if ((passwordlength < 4))
                       { $('#disp').text("minimumlength of user password is 4 *");
                       $('#password').focus();
                       return false;
                       }

                    else{
                        if (alphaExp.test(password))  {
                            return true;
                            } 
                        else {
                                $('#disp').text("onlt uppercase lowercase and number are allowed in password"); // This segment displays the validation rule for address.
                                $('#txt_password').focus();
                                return false;
                            }
                        }

                    }   
            return;
        }


            function validemail(email) {
                  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                  return re.test(email);
                }

            function validateEmail() {
				
				 var email = $("#txt_username").val();
				 if (email==""){
					 alert("emailhai");
                    $('#disu').text(" All fields are mandatory *");
					$('#txt_password').focus();
                    return false;
                   }
				 else{
                  $("#disu").text("");
                    if (validemail(email)) {
                    $("#txt_password").focus();
                    return true;
					} else {
                    $("#disu").text(" Enter valid username !");
                    $("#disu")
                        .css("color", "red")
                        .css("padding-left","20px");
                    $("#email").focus();
                      return false;
					}
					return ; 
					}
				}