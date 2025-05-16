<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style_ku.css">
</head>
<body>
    <header>
        <h1 class="text-center text-white py-3 d-flex align-items-center justify-content-center bg-dark">
            <img src="Assets/logo.png" alt="*" width="50" height="50" class="me-2">
            Training Operation Tryout & Mandiri
        </h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Training Operation</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="#learning">Latihan</a></li>
                        <li class="nav-item"><a class="nav-link" href="materi.php">Materi</a></li>
                        <li class="nav-item"><a class="nav-link" href="profile.php">Profil</a></li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="msih dlm pngmbngn" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Assets/header1.jpg" class="d-block w-100" alt="First slide">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-warning">Training Operation: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, reprehenderit.</h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quo, pariatur id consectetur quisquam laborum.</p>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="Assets/header2.jpg" class="d-block w-100" alt="Second slide">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-warning">Training Operation</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, ea?</p>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img src="Assets/header3.jpg" class="d-block w-100" alt="Third slide">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h4 class="text-warning">Training Operation</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, dignissimos!</p>
                    </div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </header>

    <section id="hero" class="text-center text-white py-5" style="background: url('Assets/learning-bg.jpg') center/cover; height: 50vh;">
        <div class="container">
            <h2>Selamat datang di Training Operation</h2>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </section>

    <section id="learning" class="container my-5">
        <h3 class="text-center">Pilih Latihan</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="Assets/gambar1.jpg" class="card-img-top" alt="Gambar 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Bela Negara</h5>
                        <p class="card-text">Bela Negara Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, velit.</p>
                        <a href="tryout.php" class="btn btn-dark">Mulai</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="Assets/gambar2.jpg" class="card-img-top" alt="Gambar 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mandiri</h5>
                        <p class="card-text">Mandiri Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, dolorum!</p>
                        <a href="tryout.php" class="btn btn-dark">Mulai</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="Assets/gambar3.jpg" class="card-img-top" alt="Gambar 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">UTBK</h5>
                        <p class="card-text">UTBK Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima, nihil!</p>
                        <a href="tryout.php" class="btn btn-dark">Mulai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; Training Operation Lorem ipsum dolor sit amet.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<body>
    <h2>Selamat datang (masih dalam pengembangan ehe), <?php echo $_SESSION['username']; ?>!</h2>
    <ul>
        <li><a href="soal_list.php">Kelola Soal (CRUD-Nya)</a></li>
    </ul>
</body>
</html>