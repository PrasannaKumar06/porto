<?php
include_once '../BackEnd/connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Login and Registration Form in HTML </title>
   <link rel="stylesheet" href="../CSS/loginstyle.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
   <div class="wrapper">
      <div class="title-text">
         <div class="title login">
            Login Form
         </div>
         <div class="title signup">
            Signup Form
         </div>
      </div>
      <div class="form-container">
         <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
         </div>
         <div class="form-inner">
            <form id="login-form" class="login">
               <div class="field">
                  <input type="text" id="email" placeholder="Email Address" name="email" required>
               </div>
               <div class="field">
                  <input type="password" id="password" placeholder="Password" name="password" required>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Login" onclick='login_submit(event)'>
               </div>
               <div class="signup-link">
                  Not a member? <a href="">Signup now</a>
               </div>
            </form>



            <form class="signup" id="signup-form">
               <div class="field">
                  <input type="text" id="email_signup" placeholder="Email Address" name="email" required>
               </div>
               <div class="field">
                  <input type="password" id="password_signup" placeholder="Password" name="password" required>
               </div>
               <div class="field">
                  <input type="password" id="confirmpass" placeholder="Confirm password" required>
               </div>
               <div class="field btn">
                  <div class="btn-layer"></div>
                  <input type="submit" value="Signup" onclick="signup_submit(event)">
               </div>
            </form>
         </div>
      </div>
   </div>
   <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (() => {
         loginForm.style.marginLeft = "-50%";
         loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (() => {
         loginForm.style.marginLeft = "0%";
         loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (() => {
         signupBtn.click();
         return false;
      });
   </script>


   <script>
      function isFormComplete(form) {
         var fields = form.elements;

         for (var i = 0; i < fields.length; i++) {
            if (fields[i].required && fields[i].value === "") {
               return false;
            }
         }
         return true;
      }

      function isFormValid(form) {
         var email = document.getElementById("email").value;
         var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

         return emailRegex.test(email);
      }

      function isFormValidSignup(form) {
         var email = document.getElementById("email_signup").value;
         var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

         return emailRegex.test(email);
      }

      function login_submit(event) {
         var email = document.getElementById("email").value;
         var form = document.getElementById("login-form");
         var password = document.getElementById("password").value;
         event.preventDefault();

         if (!isFormComplete(form)) {
            alert("Please fill in all required fields.");
            return;
         }
         if (!isFormValid(form)) {
            alert("Please enter a valid e-mail address");
            return;
         }

         if (password.length < 8) {
            alert("Password must be atleast 8 characters long");
            return;
         }
         var formData = {
            email: email,
            password: password,
         };

         $.ajax({
            type: "POST",
            url: "../BackEnd/backend_signin.php",
            data: formData,
            success: function(response) {
               console.log(response);
               if (response === "success") {
                  alert("Logged in successfully. Redirecting to homepage...");
                  window.location.href = "index.php";
               } else if (response === "error") {
                  alert("Error occurred while logging in. Please try again.");
               } else if (response === "invalid") {
                  alert("Invalid email or password.");
               }
            },
            error: function(xhr, status, error) {
               console.log(error);
               alert("An error occurred while processing your request. Please try again later.");
            },
         })
      }

      function isPasswordMatching() {
      var password = document.getElementById("password_signup").value;
      var confirmPassword = document.getElementById("confirmpass").value;
      if (confirmPassword === password) {
        return true;
      }
      return false;
    }

      function signup_submit(event) {
      var email = document.getElementById("email_signup").value;
      var form = document.getElementById("signup-form");
      var password = document.getElementById("password_signup").value;
      event.preventDefault();

      if (!isFormComplete(form)) {
        alert("Please fill in all required fields.");
        return;
      }

      if (!isFormValidSignup(form)) {
        alert("Please enter a valid e-mail address");
        return;
      }

      if (password.length < 8) {
        alert("Password must be atleast 8 characters long");
        return;
      }

      if (!isPasswordMatching()) {
        alert("Passwords don't match");
        return;
      }
      var formData1={
         email:email,
         password:password,
      }
      $.ajax({
        type: "POST",
        url: "../BackEnd/backend_signup.php",
        data: formData1,
        success: function(response) {
          if (response === "success") {
              alert("Signed up successfully. Redirecting to homepage...");
              window.location.href = "index.php";
          } else if (response === "duplicate") {
            alert("Username or email already in use.");
          } else {
            alert("Error occurred while registering. Please try again.");
          }
        },
        error: function(xhr, status, error) {
          console.log(error);
          alert("An error occurred while processing your request. Please try again later.");
        },
      });
      }
   </script>
</body>