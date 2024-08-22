<?php
require "headerLOGIN.php";
?>

<main>
<div class="container">
    <section class="section-default">
    <h1> SIGHNUP</h1>
<form action="include/signup.php" method="post">
    <input type="text" name="E-mail" placeholder="E-mail"><br>
    <input type="password" name="pwd" placeholder="password"><br>
    <input type="password" name="confirm-pwd" placeholder="confirm your password" ><br>
    <button type="submit" name="signup-submit">SIGNUP </button><br>

</form>
</section>
<div>

</main>