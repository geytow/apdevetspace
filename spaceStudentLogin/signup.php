<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="signup.css">
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
  <script src="validation.js" defer></script>
</head>
<body>
  <section>
    <div class="form-box">
      <div class="form-value">
        <h2> Sign up </h2>

        <form action="process-signup.php" method="post" id="signup" novalidate>
          
          <div class="inputbox">
            <input type="text" id="name" name="name" placeholder="name">
            <label for="name">Name</label>
          </div>
        
          <div class="inputbox">
            <input type="email" id="email" name="email" placeholder="email">
            <label for="email">Email</label>
          </div>

          <div class="inputbox">
            <input type="password" id="password" name="password" placeholder="password">
            <label for="password">Password</label>
          </div>

          <div class="inputbox">
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="password confirmation">
            <label for="password_confirmation">Repeat Password</label>
          </div>

          <button> Sign up </button>

          <div class="register">
            <p>Already have an account? <a href="login.php">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>
</html>