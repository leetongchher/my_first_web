<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5794840617.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

</head>
<body>
    <div class="container">
        <header class="header">
          <i class="ph-dog"></i>
          <h2 class="title">Login</h2>
          <span class="good">Welcome back! Good to see you again.</span>
        </header>
      
        <form name="signin" class="form" method="post" action="index.php">
          <label for="email" class="label-email">
            <span class="email-span">Email address</span>
      
            <div class="input-email-container">
              <i class="ph-envelope"></i>
              <input type="email" name="email" id="email" class="input-email" placeholder="Enter your email" autofocus />
            </div>
          </label>
      
          <label for="password" class="label-password">
            <span class="password-span">Password</span>
      
            <div class="input-password-container">
              <i class="ph-lock"></i>
              <input type="password" name="password" id="password" class="input-password" placeholder="*************" />
            </div>
      
          </label>
      
          <label for="remember" class="label-remember">
            <button name="remember" role="checkbox" class="btn-checkbox"></button>
            <input type="checkbox" name="inputCheckbox" aria-hidden="true" tabindex="-1" style="transform: translateX(-100%); position: absolute; pointer-events: none; opacity: 0; margin: 0px; width: 24px; height: 24px;" />
            <span class="remember-span">Remember me for 30 days.</span>
          </label>
      
          <button type="submit" class="btn-sign-in">Sign In</button>
        </form>
      
        <footer class="footer">
          <a href="#" class="footer-link">Forgot your password?</a>
          <a href="#" class="footer-link">Don't have an account yet? Sign Up!</a>
        </footer>
      
        <script async="async" data-cfasync="false" src="//madrogueindulge.com/6f994c72f6caa154b79fc6f66f252146/invoke.js"></script>
        <div id="container-6f994c72f6caa154b79fc6f66f252146"></div>
      </div>
</body>
</html>
