<!DOCTYPE html>
<html>
<head>
    <title>UPDATE</title>
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

    <h3>EDIT</h3>

    <?php
    include 'koneksi.php';
    $id=$_GET['id'];
    $data = mysqli_query($koneksi, "select * from rooms where id='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
        <form method="post" action="ubah.php">
            <table>
                <tr>
                    <td>Class</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="class" value="<?php echo $d['class']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><input type="text" name="price" value="<?php echo $d['price']; ?>"></td>
                </tr>
                <tr>
                    <td>Beds</td>
                    <td>
                        <input type="number" name="beds" value="<?php echo $d['beds']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nights</td>
                    <td><input type="number" name="nights" value="<?php echo $d['nights']; ?>"></td>
                </tr>
                <tr>
                    <td>Valet</td>
                    <td><input type="checkbox" name="valet" value="<?php echo $d['valet']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="SAVE">
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>
</html>
