"use strict";

document.addEventListener("DOMContentLoaded", function() {
  // Get the submit button to detect click event
  var submitButton = document.getElementById("submit_button");
  var formInputs = document.querySelectorAll("input");
  var email = document.getElementById("email");
  var age = document.getElementById("age");
  var phoneNumber = document.getElementById("phoneNumber");
  var password = document.getElementById("password");
  var confirmPassword = document.getElementById("confirm_password");
  var cat = document.getElementsByName("cat");
  var isFormValid = false;
  var errorMessage = "";

  submitButton.addEventListener("click", function() {
    for (var item of formInputs) {
      // Simply check the valid states of inputs
      if (item.checkValidity()) {
        isFormValid = true;
      } else {
        isFormValid = false;
        errorMessage += `- ${item.id} is invalid \n\n`;

      }
    }

    // Check if passwords match.
    if (password.value !== confirmPassword.value) {
      isFormValid = false;
      errorMessage += "- Passwords do not match \n\n";
      password.focus();

    }

    // Check if email is correct.
    if (!email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
      isFormValid = false;
      errorMessage += "- Email is incorrect \n\n";
    }

    // Check if telephone number is valid.
    if (!phoneNumber.value.match(/^[0-9]+$/)) {
      //TODO: Can take it even further by pattern matching the digits.
      isFormValid = false;
      errorMessage += "- Phone Number is not a number \n\n";
    }

    if (phoneNumber.value.length !== 10) {
      isFormValid = false;
      errorMessage += "- PhoneNumber should be exactly 10 digits long \n\n";
    }

    // Checkthe category is valid.
    if ( ( cat.item(0).checked == false ) && ( cat.item(1).checked == false ) )
    {
          isFormValid = false;
      errorMessage += "- Please choose your Category: Student or Employee\n\n";

    }


    // Check if age is valid.


    if (!isFormValid) {
      alert(
        "Errors were found in form. Please correct them before submitting. \n\n" +
          errorMessage
      );
    } else {
      alert("Form Submission Successful!");
    }
    errorMessage = "";
  });
});
