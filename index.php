<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cine Phile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles/style.css" />
</head>

<body>

  <?php include 'navbar.php'; ?>

  <!--carousel slide bars with images-->
  <div id="carouselExampleCaptions" class="carousel slide pb-5">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner myCarousel">
      <div class="carousel-item active">
        <img src="img/transformers.jpg" class="d-block w-100 blur" alt="background image,">
        <div class="carousel-caption text-start">
          <p id="caption-heading">PACIFIC RIM: Uprising</p>
          <p>Ethan Hunt and the IMF team must track down a terrifying new weapon that theatens all of humanity if it falls into the wrong hands.
            With control of the future and the fate of the world at stake, a deadly race around the globe begins.
            Confronted by a mysterious, all-powerful enemy, Ethan is forced to consider that nothing.</p>
          <p><a href="booking.php" class="btn btn-lg mt-3 button">Book Now</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://firebasestorage.googleapis.com/v0/b/kandy-city-centre.appspot.com/o/public%2Fmovies%2Fbackdrop%2F5642cc6f-89e4-47f0-830d-cd762fdd02c2.jpg?alt=media&token=2062f0a2-085f-46bb-9bb0-1dfdbd8b692b" class="d-block w-100" alt="...">
        <div class="carousel-caption text-start">
          <p id="caption-heading">Mission: Impossible - Dead Reckoning</p>
          <p>Ethan Hunt and the IMF team must track down a terrifying new weapon that theatens all of humanity if it falls into the wrong hands.
            With control of the future and the fate of the world at stake, a deadly race around the globe begins.
            Confronted by a mysterious, all-powerful enemy, Ethan is forced to consider that nothing.
          </p>
          <p><a href="booking.php" class="btn btn-warning btn-lg mt-3">Book Now</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/spiderman.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption text-start">
          <p id="caption-heading">Spider-Man: No Way Home</p>
          <p>Ethan Hunt and the IMF team must track down a terrifying new weapon that theatens all of humanity if it falls into the wrong hands.
            With control of the future and the fate of the world at stake, a deadly race around the globe begins.
            Confronted by a mysterious, all-powerful enemy, Ethan is forced to consider that nothing.</p>
          <p><a href="booking.php" class="btn btn-warning btn-lg mt-3">Book Now</a></p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Card -->
  <section class="campus pb-5">
    <h2 class="pt-5 pb-4 fw-bold text-start">Now Showing</h2>

    <div class="row">
      <div class="campus-col">
        <img src="https://m.media-amazon.com/images/M/MV5BYTUxYjczMWUtYzlkZC00NTcwLWE3ODQtN2I2YTIxOTU0ZTljXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_FMjpg_UX1000_.jpg">
        <div class="layer">
          <h3>Little Mermaid</h3>
        </div>
      </div>
      <div class="campus-col">
        <img src="https://m.media-amazon.com/images/M/MV5BZjYxYWVjMDMtZGRjZS00ZDE4LTk0OWUtMjUyOTI4MmYxNjgwXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_SL1024_.jpg">
        <div class="layer">
          <h3>Elemental</h3>
        </div>
      </div>
      <div class="campus-col">
        <img src="https://m.media-amazon.com/images/M/MV5BZTNiNDA4NmMtNTExNi00YmViLWJkMDAtMDAxNmRjY2I2NDVjXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg">
        <div class="layer">
          <h3>Transformers</h3>
        </div>
      </div>
      <div class="campus-col">
        <img src="https://m.media-amazon.com/images/M/MV5BMDkyMmZlN2EtMzhlNC00ODc5LTk0ODgtOWRlNzRkYzRkNTdmXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg">
        <div class="layer">
          <h3>Mission Impossible</h3>
        </div>
      </div>

      <div class="row">
        <div class="campus-col">
          <img src="https://m.media-amazon.com/images/M/MV5BMTYyOTAxMDA0OF5BMl5BanBnXkFtZTcwNzgwNTc1NA@@._V1_FMjpg_UX1000_.jpg">
          <div class="layer">
            <h3>Incidious</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="https://upload.wikimedia.org/wikipedia/en/b/b4/Spider-Man-_Across_the_Spider-Verse_poster.jpg">
          <div class="layer">
            <h3>Spider Man</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="https://i.ytimg.com/vi/45cv1sNf_fo/movieposter_en.jpg">
          <div class="layer">
            <h3>Flash</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="https://m.media-amazon.com/images/M/MV5BZTNiNDA4NmMtNTExNi00YmViLWJkMDAtMDAxNmRjY2I2NDVjXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_.jpg">
          <div class="layer">
            <h3>Transformers</h3>
          </div>
        </div>
      </div>

      <!-- Coming Soon Card-->
      <h2 class="pt-5 pb-5 fw-bold text-start">Coming Soon</h2>

      <div class="row">
        <div class="campus-col">
          <img src="https://hips.hearstapps.com/hmg-prod/images/best-teen-movies-2023-magic-flute-640755619b5a5.jpg">
          <div class="layer">
            <h3>The Magic Flute</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="https://cdn.moviefone.com/admin-uploads/posters/meg2-movie-poster_1683589009.jpg?d=360x540&q=60">
          <div class="layer">
            <h3>Meg2</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="https://lumiere-a.akamaihd.net/v1/images/au_poster_marvel_antmanquantumaniapayoff_4067ec05.jpeg">
          <div class="layer">
            <h3>Quantumania</h3>
          </div>
        </div>
        <div class="campus-col">
          <img src="https://cdn.moviefone.com/admin-uploads/posters/kraventhehunter-movie-poster_1687208160.jpg?d=360x540&q=60">
          <div class="layer">
            <h3>Krawen</h3>
          </div>
        </div>

        <div class="row">
          <div class="campus-col">
            <img src="https://chstarmacdotcom.files.wordpress.com/2021/01/img_1441.jpg">
            <div class="layer">
              <h3>Jumgle Cruise</h3>
            </div>
          </div>
          <div class="campus-col">
            <img src="https://www.nation.com.pk/print_images/large/2022-07-05/three-movies-to-hit-cinema-screens-on-eid-ul-azha-1662029333-8449.jpg">
            <div class="layer">
              <h3>London</h3>
            </div>
          </div>
          <div class="campus-col">
            <img src="https://www.digitaltrends.com/wp-content/uploads/2023/03/liLN69YgoovHVgmlHJ876PKi5Yi.jpg?p=1#038;p=1.jpg">
            <div class="layer">
              <h3>Ghost</h3>
            </div>
          </div>
          <div class="campus-col">
            <img src="https://hips.hearstapps.com/hmg-prod/images/disney-movies-2023-guardians-of-the-galaxy-1673546742.jpeg">
            <div class="layer">
              <h3>Guardians Galaxy</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>


  <!-- End card -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

