
function ValidationForm(){ 
   
    
    var isValidForm = validateEmail()

    if(isValidForm){
        isValidForm = validatName();
        }
      
        return isValidForm;
    }

        function validateName()
        {   
            var password = $("#txt_password").val();
            var passwordlength=password.length;
            var alphaExp = /^[0-9a-zA-Z]+$/;
            if (password==""){
                    $('#error').text(" All fields are mandatory *");
                    $('#txt_password').focus();
                    return false;
                   }
               else{
                   if ((passwordlength < 4))
                       { $('#error').text("minimumlength of user password is 4 *");
                       $('#password').focus();
                       return false;
                       }

                    else{
                        if (alphaExp.test(password))  {
                            return true;
                            } 
                        else {
                                $('#error').text("onlt uppercase lowercase and number are allowed in password"); // This segment displays the validation rule for address.
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
					 
                    $('#error').text(" All fields are mandatory *");
					$("#error").css("color", "#fff");
					$('#txt_password').focus();
                    return false;
                   }
				 else{
					$("#error").text("");
                    if (validemail(email)) {
						$("#txt_password").focus();
                    return true;
					} 
					else {
						$("#error").text("*Enter valid username !");
						$("#error").css("color", "#fff");
						$("#email").focus();
                    return false;
					}
					return ; 
					}
				}