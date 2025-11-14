<?php
    session_start();
    include 'koneksi.php';

    if (isset($_POST['login'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE name='$name'";
        $result = mysqli_query($koneksi, $query);
        $user = mysqli_fetch_assoc($result);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            header('Location: index1.php');
            exit;
        } 
        else {
            echo "<script>alert('Username atau password salah!');</script>";
        }
    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="user.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
   <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="landing.php">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top me-2" alt="">
            PARADISE HOTEL
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" href="landing.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="about.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="index1.php">Show Hotel Data</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link login-btn" href="login.php">Login</a>
                </li>
            </ul>
            </div>
        </div>
</nav>


    <h1>Login</h1>
    <form method="post" >
        <table>
            <tr>
                <td><input type="text" name="name" placeholder="Username" required></td>
            </tr>
            <tr>
                <td><input type="password" name="password" placeholder="Password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="login"></td>
            </tr>
        </table>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a></p>
</body>
</html>