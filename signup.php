<?php
include_once 'header.php' ?>
  <section class="main-container">
      <div class="main-wrapper">
        <h2>Signup</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
          <input type="text" name="first" placeholder="First name">
          <input type="text" name="last" placeholder="last name">
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="uid" placeholder="user name">
          <input type="password" name="pwd" placeholder="pwd">
          <button type="submit" name="submit">Sign up</button>
        </form>
      </div>
    </section>
<?php

include_once 'footer.php';

?>
