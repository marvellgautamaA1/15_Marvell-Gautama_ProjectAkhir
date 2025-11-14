<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penampilan data</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <link rel="stylesheet" href="style1.css">
     <link rel="stylesheet" href="index.css">
</head>
<body style="padding-top: 70px;">
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

    <a href="tambah.php" class="add-room-btn">+ ADD NEW ROOM</a>

    <table border="1">
        <tr>
            <th>Room ID</th>
            <th>Class</th>
            <th>Price</th>
            <th>Beds</th>
            <th>Nights</th>
            <th>Valet</th>
            <th>Action</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from rooms");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $d['id']; ?></td>
                <td><?php echo $d['class']; ?></td>
                <td><?php echo $d['price']; ?></td>
                <td><?php echo $d['beds']; ?></td>
                <td><?php echo $d['nights']; ?></td>
                <td><?php echo $d['valet']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $d['id']; ?>">UPDATE</a>
                    <a href="delete.php?id=<?php echo $d['id']; ?>">DELETE</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>
