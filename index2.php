<!DOCTYPE html>
<html>

<head>
    <title>Movie Booking Application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="navbar.css" type="text/css">

</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- carousel -->
    <div id="myCarousel" class="container carousel slide pt-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="https://www.apple.com/"> 
                <img src="http://nlk.bmscdn.com/showcaseimage/eventimage/guardians-of-the-galaxy-vol-3-08-05-2023-09-32-39-936.jpg" alt="Image 1">
                <div class="carousel-caption">
                    <h3>Slide 1</h3>
                    <p>Slide 1 description</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href="https://www.samsung.com/in/"> 
                <img src="http://nlk.bmscdn.com/showcaseimage/eventimage/karthik-live-in-colombo-17-05-2023-02-42-47-385.jpg" alt="Image 2">
                <div class="carousel-caption">
                    <h3>Slide 2</h3>
                    <p>Slide 2 description</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href="https://www.hp.com/us-en/home.html"> 
                <img src="http://nlk.bmscdn.com/showcaseimage/eventimage/the-flash-12-06-2023-01-26-50-867.jpg" alt="Image 3">
                <div class="carousel-caption">
                    <h3>Slide 3</h3>
                    <p>Slide 3 description</p>
                </div>
            </div>
        </div>


        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- End Carousel-->

    <!-- Card -->
    <div class="container">
        <div class="row align-items-center pt-5 pb-2  justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/the-little-mermaid-et00004921-08-05-2023-05-01-23.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">The Little Mermaid</h5>
                    <p class="card-text">English</p>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/maamannan-et00004973-22-06-2023-01-20-34.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maamannan</h5>
                    <p class="card-text">Tamil</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/guardians-of-the-galaxy-vol-3-et00004897-21-04-2023-02-17-34.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Guardians of the Galaxy</h5>
                    <p class="card-text">English</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center pt-5 pb-2  justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/mission-impossible-dead-reckoning-part-one-et00004978-23-06-2023-03-41-33.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mission Impossible</h5>
                    <p class="card-text">English</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/por-thozhil-et00004957-05-06-2023-05-14-44.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Por Thozhil</h5>
                    <p class="card-text">Tamil</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/about-my-father-et00004922-08-05-2023-05-08-01.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">About My Father</h5>
                    <p class="card-text">English</p>
                </div>
            </div>
        </div>

        <!-- New card -->

        <!-- <div class="row row-cols-1 row-cols-md-4 g-4 pt-5 pb-2">
            <div class="col">
                <div class="card h-100">
                    <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/the-little-mermaid-et00004921-08-05-2023-05-01-23.jpg" class="card-img-top" alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">The Little Mermaid</h5>
                        <p class="card-text">
                            English
                        </p>
                    </div>                    
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/maamannan-et00004973-22-06-2023-01-20-34.jpg" class="card-img-top" alt="Los Angeles Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Maamannan</h5>
                        <p class="card-text">Tamil
                        </p>
                    </div>                    
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/guardians-of-the-galaxy-vol-3-et00004897-21-04-2023-02-17-34.jpg" class="card-img-top" alt="Palm Springs Road" />
                    <div class="card-body">
                        <h5 class="card-title">Guardians of the Galaxy</h5>
                        <p class="card-text">
                            English
                        </p>
                    </div>                    
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://lk-aps.bmscdn.com/iedb/movies/images/mobile/thumbnail/xlarge/mission-impossible-dead-reckoning-part-one-et00004978-23-06-2023-03-41-33.jpg" class="card-img-top" alt="Skyscrapers" />
                    <div class="card-body">
                        <h5 class="card-title">Mission Impossible</h5>
                        <p class="card-text">
                            English
                        </p>
                    </div>                    
                </div>
            </div>
        </div> -->
        <!-- End new card -->

    </div>

    <?php include 'footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>