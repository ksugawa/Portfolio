window.addEventListener("DOMContentLoaded", function () {
  if (window.location.pathname === "/") {
    const form = document.getElementById("form");
    const username = document.getElementById("username");
    const email = document.getElementById("email");

    function showError(input, message) {
      // Show input error message
      const formControl = input.parentElement;
      formControl.className = "form-control error";
      const small = formControl.querySelector("small");
      small.innerText = message;
    }

    function showSuccess(input) {
      // Show success outline
      const formControl = input.parentElement;
      formControl.className = "form-control success";
    }

    function checkEmail(input) {
      // Check email is valid
      const re =
        /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if (re.test(input.value.trim())) {
        showSuccess(input);
      } else {
        showError(input, "メールアドレスが無効です");
      }
    }

    function checkRequired(inputArr) {
      //Check required field
      let isRequired = false;
      inputArr.forEach(function (input) {
        if (input.value.trim() === "") {
          showError(input, `${getFieldName(input)} is required`);
          isRequired = true;
        } else {
          showSuccess(input);
        }
      });

      return isRequired;
    }

    function checkLength(input, min, max) {
      //Check input length
      if (input.value.length < min) {
        showError(
          input,
          `${getFieldName(input)} must be at least ${min} characters`
        );
      } else if (input.value.length > max) {
        showError(
          input,
          `${getFieldName(input)} must be less than ${max} characters`
        );
      } else {
        showSuccess(input);
      }
    }

    function getFieldName(input) {
      //Get fieldname
      return input.id.charAt(0).toUpperCase() + input.id.slice(1);
    }

    form.addEventListener("submit", function (e) {
      //Event listeners
      e.preventDefault();

      if (checkRequired([username, email])) {
        checkLength(username, 3, 15);
        checkEmail(email);
      }
    });
  }
});

export default {};
