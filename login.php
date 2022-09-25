<?php
include_once "header.php";
?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-txt">This is an error message!</div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email address" />
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter Password" />
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" value="Continue to Chat" />
        </div>
      </form>
      <div class="link">Not yet Signed up? <a href="index.php">Signup Now</a></div>
    </section>
  </div>
  <script src="js/pass-show-hide.js"></script>
  <script src="js/login.js"></script>
</body>

</html>