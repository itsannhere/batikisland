<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="web.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="body_create">
    <header></header>

    <main class="login">
    <form action="process_login.php" method="post">
        <h1 class="login">Log in</h1>
        <br>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address/Username</label>
        </div>
        
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <br>

        <div class="col-auto login">
            <a class="btn btn-primary mb-3" href="home.html">Submit</a>
        </div>

        <p class="p_login">
            <a href="#" class="p_login">Forgot password?</a><br>
            Don't have an account?<a href="create_account.html" style="color: rgb(0, 139, 225);" class="p_login"> Create an account</a>
        </p>
    </form>
    </main>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>