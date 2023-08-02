<!DOCTYPE html>
<html>

<head>
  <title>Movie Booking</title>
  <link rel="stylesheet" href="styles/style.css" />
  <link rel="stylesheet" type="text/css" href="styles/booking.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="fixed-bottom">
    <?php include 'navbar.php'; ?>
  </div>

  <div class="container my-5 pt-5 pb-3">
    <h1 class="my-3 pt-5 pb-3">Movie Booking</h1>
    <button id="buyTicketsBtn">Buy Tickets</button>
    <div id="dateContainer"></div>
    <div id="theaterContainer"></div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="booking.js"></script>
</body>

</html>