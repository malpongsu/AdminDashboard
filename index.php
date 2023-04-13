<?php
require 'common.php';
?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Admin Dashboard | SVCI </title>
    <link rel="stylesheet" href="css/style.dashboard.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="js/scriptchart.js"></script>

    </head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <img src="img/svci.png.png" alt="SVCI LOGO">
      <span class="logo_name">ComputerLab</span>
    </div>
      <ul class="nav-links">
        <li>
          <a  class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="studentattendance.php">
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

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">We Have</div>
            <div class="number">1000</div>
            <div class="box-topic">CCS Students</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bxs-group cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">We Have</div>
            <div class="number">50</div>
            <div class="box-topic">CCS Teachers</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bxs-graduation cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">We Have</div>
            <div class="number">10,000</div>
            <div class="box-topic">Computers</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bx-server cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Attendance Rate</div>
            <div class="number">99.1%</div>
            <div class="box-topic">State Average</div>
            <div class="indicator">
            </div>
          </div>
          <i class='bx bx-git-compare cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Educational Stage</div>
          <div class="sales-details">

            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Computer Laboratory</div>
          <ul class="top-sales-details">
            <li>
              <a>
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider"></span>
                </label>
                  <span class="product"> Computer Lab 1 </span>
              </a>
              <span class="price">Available</span>
          </li>
          <li>
            <a>
              <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
              </label>
                <span class="product"> Computer Lab 2 </span>
            </a>
            <span class="price">Available</span>
          </li>
          <li>
            <a>
              <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
              </label>
                <span class="product"> Computer Lab 3 </span>
            </a>
            <span class="price">Available</span>
        </li>
        <li>
          <a>
            <label class="switch">
              <input type="checkbox">
              <span class="slider"></span>
            </label>
              <span class="product"> Computer Lab 4 </span>
          </a>
          <span class="price">Available</span>
      </li>
      <li>
        <a>
          <label class="switch">
            <input type="checkbox">
            <span class="slider"></span>
          </label>
            <span class="product"> Computer Lab 5 </span>
        </a>
        <span class="price">Available</span>
    </li>
    <li>
      <a>
        <label class="switch">
          <input type="checkbox" checked>
          <span class="slider"></span>
        </label>
          <span class="product"> Computer Lab 6 </span>
      </a>
      <span class="price">Available</span>
  </li>
          </ul>
          <script src="js/scriptcheckbox.js"></script>
          <script src="js/EducationalStage.js"> </script>
        </div>
      </div>
    </div>
  </section>
  <script src="js/script.dashboard.js"></script>
</body>
</html>
