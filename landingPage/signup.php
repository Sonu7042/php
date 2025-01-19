<?php
include "configure.php";


if (isset($_POST['postSubmit'])) {

  $fullname = $_POST['fullname'];
  $email  = $_POST['email'];
  $password   = $_POST['password'];


  $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
  $emailResult = mysqli_query($con, $checkEmailQuery);

  if (mysqli_num_rows($emailResult) > 0) {
?>
    <script>
      alert("Email already exist")
    </script>;

<?php

  } else {
    $sql = "INSERT INTO users (name, email, password) 
              VALUES ('$fullname', '$email', '$password')";

    if (mysqli_query($con, $sql)) {
      header("Location: index.php");
    } else {
      echo "<script>alert('Data not inserted. Please try again.');</script>";
    }
  }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <script src="./assets/css/tailwind.js"></script>
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">
  <!-- Sign-Up Form -->
  <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Create Your Account</h2>
    <p class="text-sm text-gray-600 text-center mb-6">
      Join us today! Fill out the form below to get started.
    </p>
    <form action="signup.php" method="POST" class="space-y-4">
      <!-- Full Name -->
      <div>
        <label for="fullname" class="block text-sm font-medium text-gray-700">Full Name</label>
        <input
          type="text"
          id="fullname"
          name="fullname"
          placeholder="Enter your full name"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        <span class="fullName_error text-red-500 text-sm  hidden "></span>
      </div>
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Enter your email"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        <span class="email_error text-red-500 text-sm  hidden "></span>
      </div>
      <!-- Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Create a password"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        <span class="password_error text-red-500 text-sm  hidden "></span>
      </div>
      <!-- Confirm Password -->
      <div>
        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
        <input
          type="password"
          id="confirm-password"
          name="confirm-password"
          placeholder="Confirm your password"
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
        <span class="confirmPassword_error text-red-500 text-sm  hidden "></span>
      </div>
      <!-- Sign Up Button -->
      <button
        name="postSubmit"
        id="singn_btn"
        type="submit"
        class="w-full bg-gradient-to-r from-indigo-500 to-pink-500 hover:from-pink-500 hover:to-indigo-500 text-white font-semibold py-2 px-4 rounded-lg shadow-lg transform hover:scale-105 transition duration-300">
        Sign Up
      </button>
      <!-- Already have an account -->
      <p class="text-center text-sm text-gray-600 mt-4">
        Already have an account?
        <a href="login.php" class="text-indigo-500 font-medium hover:underline">Log In</a>
      </p>
    </form>
  </div>


  <script src="./assets/js/jquery-3.6.4.min.js"></script>


  <script>
    $(document).on('click', "#singn_btn", function(e) {
      let val = true
      let fullName = $("#fullname").val();
      let email = $("#email").val();
      let password = $("#password").val();
      let confirmPassword = $("#confirm-password").val();


      if (fullName == "") {
        $(".fullName_error").text("name is required");
        $(".fullName_error").removeClass("hidden");
        $("#fullname").addClass('border-red-500')
        val=false;
      }
      if (email == "") {
        $(".email_error").text("email is required");
        $(".email_error").removeClass("hidden");
        $("#email").addClass('border-red-500')
        val=false;
      }
      if (password == "") {
        $(".password_error").text("password is required");
        $(".password_error").removeClass("hidden");
        $("#password").addClass('border-red-500')
        val=false;
      }
      if (confirmPassword == "") {
        $(".confirmPassword_error").text("confirmPassword is required");
        $(".confirmPassword_error").removeClass("hidden");
        $("#confirm-password").addClass('border-red-500')
        val=false;

      } else if (confirmPassword !== password) {
        $(".confirmPassword_error").text("Passwords do not match").removeClass("hidden");
        $("#confirm-password").addClass('border-red-500');
        val=false;
      }





      $(document).on("keyup", "#fullname", function(e) {
        let fullName = $(this).val();
        if (fullName == '') {
          $(".fullName_error").text("name is required");
          $(".fullName_error").removeClass("hidden");
          $("#fullname").addClass('border-red-500');

        } else {
          $(".fullName_error").text("");
          $(".fullName_error").addClass("hidden");
          $("#fullname").removeClass('border-red-500')
          


        }
      })


      $(document).on("keyup", "#email", function(e) {
        let fullName = $(this).val();
        if (fullName == '') {
          $(".email_error").text("email is required");
          $(".email_error").removeClass("hidden");
          $("#email").addClass('border-red-500');

        } else {
          $(".email_error").text("");
          $(".email_error").addClass("hidden");
          $("#email").removeClass('border-red-500')
         
        }
      })



      $(document).on("keyup", "#password", function(e) {
        let fullName = $(this).val();
        if (fullName == '') {
          $(".password_error").text("password is required");
          $(".password_error").removeClass("hidden");
          $("#password").addClass('border-red-500');


        } else {
          $(".password_error").text("");
          $(".password_error").addClass("hidden");
          $("#password").removeClass('border-red-500')
       
        }
      })



      $(document).on("keyup", "#confirm-password", function(e) {
        let fullName = $(this).val();
        if (fullName == '') {
          $(".confirmPassword_error").text("confirmPassword is required");
          $(".confirmPassword_error").removeClass("hidden");
          $("#confirm-password").addClass('border-red-500');

        } else {
          $(".confirmPassword_error").text("");
          $(".confirmPassword_error").addClass("hidden");
          $("#confirm-password").removeClass('border-red-500')
       
        }
      })


      console.log(val)
      if (!val) {
        e.preventDefault();
      }



    })
  </script>




</body>

</html>