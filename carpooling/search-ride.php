<?php
require_once("navbar.php");
?>
<!-- search-rides.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Rides | CarPoolNow</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Find a Ride</h2>
    <form class="row g-3 mb-4">
      <div class="col-md-5">
        <label for="from" class="form-label">From</label>
        <input type="text" class="form-control" id="from" placeholder="Departure location" required>
      </div>
      <div class="col-md-5">
        <label for="to" class="form-label">To</label>
        <input type="text" class="form-control" id="to" placeholder="Arrival location" required>
      </div>
      <div class="col-md-2">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" required>
      </div>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary px-5">Search</button>
      </div>
    </form>

    <h4>Available Rides</h4>
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Ahmedabad → Gandhinagar</h5>
        <p class="card-text">
          Date: 2025-08-02<br>
          Driver: Faizan S.<br>
          Seats Available: 3<br>
          Contribution: ₹50 per passenger
        </p>
        <a href="#" class="btn btn-sm btn-outline-success">Request Ride</a>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Surat → Vadodara</h5>
        <p class="card-text">
          Date: 2025-08-03<br>
          Driver: Ravi P.<br>
          Seats Available: 2<br>
          Contribution: ₹120 per passenger
        </p>
        <a href="#" class="btn btn-sm btn-outline-success">Request Ride</a>
      </div>
    </div>
  </div>
</body>
</html>

<?php
require_once("footer.php");
?>