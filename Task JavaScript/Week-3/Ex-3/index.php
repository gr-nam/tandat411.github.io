<?php
  session_start();
  session_destroy();

  if (isset($_COOKIE["success"])) {
    echo "<script> alert('".$_COOKIE["success"]."')</script>";
  }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Bài tập JS 3: Lịch - đề 3 (Tuần 3)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="container">
    <form action="validate.php" method="post">
    	<table class="container__form" id="js-form">
        <tr>
          <td class="title">User name:</td>
          <td>
            <input type="text" id="js-name" name="txtName">
          </td>
          <?php if (isset($_SESSION["errorName"])) {echo "<td class='validate'>".$_SESSION["errorName"]."</td>";} ?>
        </tr>
        <tr>
          <td class="title">Password:</td>
          <td>
            <input type="password" id="js-password" name="txtPass">
          </td>
          <?php if (isset($_SESSION["errorPass"])) {echo "<td class='validate'>".$_SESSION["errorPass"]."</td>";} ?>
        </tr>
        <tr>
          <td class="title">Email:</td>
          <td>
            <input type="text" id="js-email" name="txtEmail">
          </td>
          <?php if (isset($_SESSION["errorEmail"])) {echo "<td class='validate'>".$_SESSION["errorEmail"]."</td>";} ?>
        </tr>
        <tr>
          <td class="title">Birthday:</td>
          <td class="col-dob">
            <input class="input-date" id="js-birthday" type="text" name="txtBirth" readonly>
            <img class="icon-calendar" id="js-icon-calendar" src="imgs/calender.png" alt="calendar">
            <table class="calendar" id="js-calendar">
              <tr>
                <td>
                  <button id="js-prev-year">
                    <img src="imgs/arrow2-left.png" alt="previous-year">
                  </button>
                </td>
                <td>
                  <button id="js-prev-month"><img src="imgs/arrow-left.png" alt="previous-month"></button>
                </td>
                <td colspan="2">
                  <select id="js-month"></select>
                </td>
                
                <td>
                  <select id="js-year"></select>
                </td>
                <td>
                  <button id="js-next-month"><img src="imgs/arrow-right.png" alt="next-month"></button>
                </td>
                <td>
                  <button id="js-next-year"><img src="imgs/arrow2-right.png" alt="next-year"></button>
                </td>
              </tr>
              <tr class="day-of-week">
                <td>Sun</td>
                <td>Mon</td>
                <td>Tue</td>
                <td>Wed</td>
                <td>Thu</td>
                <td>Fri</td>
                <td>Sat</td>
              </tr>
            </table>
          </td>
          <?php if (isset($_SESSION["errorBirth"])) {echo "<td class='validate'>".$_SESSION["errorBirth"]."</td>";} ?>
        </tr>
        <tr>
          <td></td>
          <td>
            <button class="btn" id="js-btn-submit" name="btnSubmit">SUBMIT</button>
            <button class="btn" id="js-btn-refresh" name="btnRefresh">REFRESH</button>
          </td>
          <td></td>
        </tr>
      </table>
    </form>
  </div>
  <!-- SCRIPT -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/calendar.js"></script>
  <script src="js/action.js"></script>
</body>
</html>