<!DOCTYPE html>
<html lang="fr-FR">
        <head>
            <title>vêtements-vente</title>
            <meta name="viewport" content="width=device-width, initial-socale=1.0">
            <meta charset="utf-8">
           <!-- <link  rel="stylesheet"  href="style.css">-->
           <link  rel="stylesheet"  href="loginCSS.css">
            <meta name="description" content="Vendre des vêtements de mode ">
             <script type="text/javascript" src="script.js"></script>
         
        </head>
        <body>
            <header>
                <h1>vêtements-vente</h1>
            </header>
            <nav>
                <div class="table">
                    <ul>
                        <li class="menu-accueil">
                            <a href="accueil.html">Accueil</a>
                        </li>
                        <li class="menu-CV">
                          <a href="CV.html">Qui sommes-nous?</a>
                        </li>
                           
                        <li  class="menu-contact">
                           <a href="contact.html">Contactez-nous !</a>
                        </li>
                        <li class="login">
                            <a href= "#login">LOGIN</a>
                         </li>
                         <li class="logout">
                            <a href= "#logout">LOGOUT</a>
                         </li>
                    </ul>
                </div>
            </nav>
        <!--   <div class="login">
                <form action ="inclode/loginphp.php" method="post">
                    <inpot type="text" name="E-mail" placeholder= "E-mail...">
                    <inpot type="password" name="pwd" placeholder="password...">
                     <button type="submit" name="login-submit">Login</button>
                </form>   

                <a href= "signup.php"> signup </a>
                <form action="include/logoutphp.php" method="post">
                 <button  type="submit" name="logout-submit">logout</button>
                </form>
              </div>-->

             

          <div class="container">
              <form action="include/loginphp.php" mathod="post">
                 <label for="uname"><b>E-mail</b></label><br>
                 <input type="text" placeholder="Enter E-mail..." name="uname" required><br>
                 <label for="psw"><b>Password</b></label><br>
                 <input type="password" placeholder="Enter Password..." name="psw" required><br>
                <button type="submit" name="login-submit">LOGIN</button><br>
                </form>
             <label>
               <input type="checkbox" checked="checked" name="remember"> Remember me
              </label><br>
              <span class="psw">Forgot <a href="#">password?</a></span> <br>

                <a href= "signup.php"> signup </a>
                <form action="include/logoutphp.php" method="post">
                   <button  type="submit" name="logout-submit">LOGOUT</button>
                </form>
            </div>

        <div class="container" style="background-color:#f1f1f1">
        <form action="https://www.google.com/">
        <button type="submit" class="cancelbtn">Cancel</button>
        </form>
      </div>
      </form>


</body>
</html>
           
