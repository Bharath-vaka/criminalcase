<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Criminal Case - Signup</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
      *:before,
      *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        background-image: url("../images/login.png");
        background-repeat: no-repeat;
        background-size: 1500px 900px;
      }

      .background {
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
      }

      .background .shape {
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
      }

      form {
        height: 520px;
        width: 400px;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 38%;
        left: 30%;
        border-radius: 10px;
        padding: 50px 35px;
      }

      form * {
        font-family: 'Poppins', sans-serif;
        color: #ffffff;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
      }

      form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
      }

      label {
        display: block;
        margin-top: 20px;
        font-size: 16px;
        font-weight: 500;
      }

      .input1 {
        display: block;
        height: 45px;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.07);
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: 300;
      }

      ::placeholder {
        color: #e5e5e5;
      }

      .button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
      }

      .social {
        margin-top: 30px;
        display: flex;
      }

      .social div {
        background: red;
        width: 150px;
        border-radius: 3px;
        padding: 5px 10px 10px 5px;
        background-color: rgba(255, 255, 255, 0.27);
        color: #eaf0fb;
        text-align: center;
      }

      .social div:hover {
        background-color: rgba(255, 255, 255, 0.47);
      }

      .social .fb {
        margin-left: 25px;
      }

      .social i {
        margin-right: 4px;
      }
    </style>
  </head>
  <body>
    <div class="background"></div>
    <form method="post" action="signup_action.php">
      <h3>Sign Up</h3>
      <label for="name">Username</label>
      <input class="input1" type="text" placeholder="UserName" id="name" name="name">
      <label for="email">Email</label>
      <input class="input1" type="text" placeholder="Email" id="email" name="email">
      <label for="password">Password</label>
      <input class="input1" type="password" placeholder="password" id="password" name="password">
      <label for="confirmpassword">Confirm password</label>
      <input class="input1" type="password" placeholder="confirm Password" id="confirmpassword" name="confirmpassword">
      <input class="button" type="submit" name="submit" id="submit" value="Signup">
    </form>
  </body>
</html>