

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard | SVCI </title>
    <link rel="stylesheet" href="css/style.studentattendance.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="js/bootstrap.min.js"></script>
    </head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="img/svci.png.png" alt="SVCI LOGO">
      <span class="logo_name">ComputerLab</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="StudentAttendance.php">
            <i class='bx bx-box' ></i>
            <span class="links_name">Students</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">Teachers</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-border-all'></i>
            <span class="links_name">ComLab</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Analytics</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Exam</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Setting</span>
          </a>
        </li>
        <li class="log_out">
          <a href="#">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <i class='bx bx-user'></i>
        <span class="admin_name">Erica R.</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
      
<?php
require 'common.php';

//Grab all the users from our database
$users = $database->select("users", [
    'id',
    'name',
    'rfid_uid'
]);

require 'common.php';

//Grab all users from our database
$users = $database->select("users", [
    'id',
    'name',
]);
?>

    <div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Students</div>
          <div class="container">
              <div class="row">
                  <h2>Users</h2>
              </div>
              <table class="table table-striped">
                  <thead class="thead-dark">
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">RFID UID</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      //Loop through and list all the information of each user including their RFID UID
                      foreach($users as $user) {
                          echo '<tr>';
                          echo '<td scope="row">' . $user['id'] . '</td>';
                          echo '<td>' . $user['name'] . '</td>';
                          echo '<td>' . $user['rfid_uid'] . '</td>';
                          echo '</tr>';
                      }
                      ?>
                  </tbody>
              </table>
          </div>
          <div class="sales-details">
          </div>
          <div class="button">
            <a href="#">Start</a>

          </div><div class="button1">
            <a href="#">Stop</a>
          </div>
        </div>

 <?php
//Check if we have a year passed in through a get variable, otherwise use the current year
if (isset($_GET['year'])) {
    $current_year = int($_GET['year']);
} else {
    $current_year = date('Y');
}

//Check if we have a month passed in through a get variable, otherwise use the current year
if (isset($_GET['month'])) {
    $current_month = $_GET['month'];
} else {
    $current_month = date('n');
}

//Calculate the amount of days in the selected month
$num_days = cal_days_in_month(CAL_GREGORIAN, $current_month, $current_year);

?>
        <div class="top-sales box">
          <div class="title">Attendance</div>
          <table class="table table-striped table-responsive">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">Name</th>
                      <?php
                          //Generate headers for all the available days in this month
                          for ( $iter = 1; $iter <= $num_days; $iter++) {
                              echo '<th scope="col" style="min-width:200px;max-width:300px;">' . $iter . '</th>';
                          }
                      ?>
                  </tr>
              </thead>
              <tbody>
                  <?php
                      //Loop through all our available users
                      foreach($users as $user) {
                          echo '<tr>';
                          echo '<td scope="row">' . $user['name'] . '</td>';

                          //Iterate through all available days for this month
                          for ( $iter = 1; $iter <= $num_days; $iter++) {

                              //For each pass grab any attendance that this particular user might of had for that day
                              $attendance = $database->select("attendance", [
                                  'clock_in'
                              ], [
                                  'user_id' => $user['id'],
                                  'clock_in[<>]' => [
                                      date('Y-m-d', mktime(0, 0, 0, $current_month, $iter, $current_year)),
                                      date('Y-m-d', mktime(24, 60, 60, $current_month, $iter, $current_year))
                                  ]
                              ]);

                              //Check if our database call actually found anything
                              if(!empty($attendance)) {
                                  //If we have found some data we loop through that adding it to the tables cell
                                  echo '<td class="table-success">';
                                  foreach($attendance as $attendance_data) {
                                      echo $attendance_data['clock_in'] . '</br>';
                                  }
                                  echo '</td>';
                              } else {
                                  //If there was nothing in the database notify the user of this.
                                  echo '<td class="table-secondary">No Data Available</td>';
                              }
                          }
                          echo '</tr>';
                      }
                  ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <script src="js/script.dashboard.js"></script>
</body>
</html>
