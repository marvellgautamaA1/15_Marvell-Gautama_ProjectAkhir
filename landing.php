
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
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


    <div id="carouselExample" class="carousel slide" style="margin-top:56px;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="carousel1.png" class="d-block w-100" alt="carousel1">
            </div>
            <div class="carousel-item">
                <img src="carousel2.png" class="d-block w-100" alt="carousel2">
            </div>
            <div class="carousel-item">
                <img src="carousel3.png" class="d-block w-100" alt="carousel3">
            </div>
            <div class="carousel-item">
                <img src="carousel4.png" class="d-block w-100" alt="carousel4">
            </div>
            <div class="carousel-item">
                <img src="carousel5.png" class="d-block w-100" alt="carousel5">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <div class="col">
            <div class="card">
                <img src="standard.jpg" class="card-img-top" alt="Standard Room">
                <div class="card-body">
                    <h5 class="card-title">Standard</h5>
                    <p class="card-text">
                        A cozy and comfortable room perfect for short stays. 
                        Equipped with essentials, clean ambiance, and a calm resting space.
                    </p>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card">
                <img src="premium.jpg" class="card-img-top" alt="Premium Room">
                <div class="card-body">
                    <h5 class="card-title">Premium</h5>
                    <p class="card-text">
                        Spacious and stylish with upgraded furnishings, elegant lighting, 
                        and additional amenities to elevate your comfort.
                    </p>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card">
                <img src="vip.jpg" class="card-img-top" alt="VIP Room">
                <div class="card-body">
                    <h5 class="card-title">VIP</h5>
                    <p class="card-text">
                        A luxurious suite with premium materials, artistic interior design, 
                        and exclusive comfort tailored for high-end guests.
                    </p>
                </div>
            </div>
        </div>

        
        <div class="col">
            <div class="card">
                <img src="poor.jpg" class="card-img-top" alt="Poor Room">
                <div class="card-body">
                    <h5 class="card-title">Poor</h5>
                    <p class="card-text">
                        Broke ahh 🥀
                    </p>
                </div>
            </div>
        </div>
    </div>


</body>
</html>