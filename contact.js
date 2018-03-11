                                      $(document).ready(function(){
                                      var contactForm = $("#msform");
                                      //We set our own custom submit function
                                      contactForm.on("submit", function(e) {
                                        //Prevent the default behavior of a form
                                        e.preventDefault();

                                           var v = grecaptcha.getResponse();
                                                if(v.length == 0)
                                                {
                                                    $('#error_message').text("Du glemte å bevise at du ikke er en robot :)").show().delay(3000).fadeOut(1000);
                                                    return true;
                                                }
                                                else {

                                        var sender_name = $("#sender_name").val();
                                        var sender_email = $("#sender_email").val();
                                        var sender_message = $("#sender_message").val();
                                        $.ajax({
                                          type: "POST",
                                          url: "mail.php",
                                          data: {
                                            sender_name: sender_name,
                                            sender_email: sender_email,
                                            sender_message: sender_message,
                                            //THIS WILL TELL THE FORM IF THE USER IS CAPTCHA VERIFIED.
                                            response: grecaptcha.getResponse()
                                          },
                                          success: function() {
                                            console.log("OUR FORM SUBMITTED CORRECTLY");
                                             $('#success_message').text(" Melding sendt").show().delay(3000).slideDown(1000).fadeOut(1000);
                                            grecaptcha.reset();
                                            $('#response').val('');
                                            $('#sender_name').val('');
                                            $('#sender_email').val('');
                                            $('#sender_message').val('');
                                            },
                                            error: function() {
                                                console.log("AN ERROR OCCURED SUBMITTING THE FORM");
                                                $("#error_message").empty().append("An error occured. Please contact me and…err, this is awkward.");
                                            }
                                        })
                                       }
                                     });

                                  });