<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
            rel="stylesheet"
            href="/css/main.css"
    >
</head>
<body>


<nav class="navigation">
    <div>
        <ul class="mainMenu">
            <li><a
                        class="nav-link"
                        href="/index.php"
                >Home</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#about-us"
                >About us</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#menu"
                >Menu</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#delivery"
                >Delivery</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#table"
                >Reservation</a></li>
            <li><a
                        class="nav-link"
                        href="/index.php#footer"
                >Contact</a></li>

            <li><a
                        class="nav-link"
                        href="/views/register-form.php"
                >Register</a></li>

        </ul>
    </div>
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
</nav>


<div class="logo">
    <div class="container">
        <a href="#">
            <img
                    src="/img/Logo-Header.png"
                    alt="logo"
                    class="img-fluid"
            >
        </a>
    </div>
</div>



<div class="container">
    <div class="login-form">
        <h1 style="margin-bottom: 1em">Login</h1>
        <form action="/servlets/login-user.php" id="login-form" name="login-form" method="post">
            <div class="form_group m-3">
                <div class="form-group m-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group m-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>


                <div class="form-group m-3">
                    <input type="submit" value="Login" class="btn btn-primary mt-5 login-button" style="padding: 10px">
                </div>

                <div class="registerText">
                    <p>Don‘t have a profile? <a href="register-form.php">Sign up for FREE</a></p>
                </div>
    </div>
</div>





</body>
</html>


<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="/js/jq_messages.js"></script>
<script src="/main.js"></script>
<script>
    $( "#login-form" ).validate({
        rules: {
            email:{
                required:true,
                email: true
            },
            password:{
                required:true
            }
        }
    });

</script>