<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">



                    <div class="contaner">
                        <div class="row">
                            <div class="col-6 offset-3">
                                <?php
                                if (!empty($_SESSION["errors"])) {
                                ?>
                                    <div class="alert alert-warning" role="alert" id="myElement">
                                        <strong>empty field</strong> 
                                    </div>
                                <?php
                                }
                                ?>
                                <form method="POST" id="signup-form" class="signup-form" action="handle_login.php">
                                <?php
                                if (!empty($_SESSION["no user"])) {
                                ?>
                                    <div class="alert alert-warning" role="alert" id="myElement">
                                        <strong>No User</strong> 
                                    </div>
                                <?php
                                }
                                ?>
                                    <h2 class="form-title">Login</h2>
                                    <div class="form-group">
                                        <input type="text" class="form-input" name="email" id="name" placeholder="Your Email" />
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" />
                                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                                    </div>

                                    <div class="form-group">
                                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-submit">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <p class="loginhere">
                        Have already an account ? <a href="register.php" class="loginhere-link">Register</a>
                    </p>
                </div>
            </div>
        </section>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
    setTimeout(function() {
      var elementToHide = document.getElementById('myElement');
      if (elementToHide) {
        elementToHide.style.display = 'none';
      }
    }, 5000);
  </script>
</body>

</html>
<?php
$_SESSION["errors"] = null;
?>