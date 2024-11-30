<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/c3.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <script src="js/jquery.knob.js"></script>
  <script src="js/student.js"></script>
  <link href="navbar-fixed-top.css" rel="stylesheet">
  <title>Student Attendance</title>
  <style>
    /* Flexbox layout to keep footer at the bottom */
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0; /* Remove default body margin */
    }
    main {
      flex: 1;
      margin-top: 70px; /* Space for the fixed navbar */
      padding: 20px; /* Add padding for form visibility */
    }
    footer {
      background-color: #282c34;
      color: #ffffff;
      text-align: center;
      padding: 20px 10px;
      font-family: Arial, sans-serif;
      font-size: 16px;
    }
    footer a {
      color: #61dafb;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s ease;
    }
    footer a:hover {
      color: #21a1f1;
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Online Attendance</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <main>
    <div class="container">
      <div id="output"></div>
      <form id="getAttendance">
        <div class="form-group">
          <label>Year of course</label>
          <select name="year" class="form-control">
            <?php foreach(range(date('Y', time()), 1983) as $r) echo '<option>'.$r.'</option>'; ?>
          </select>
        </div>
        <div class="form-group">
          <label>Section</label>
          <select name="section" class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
        <div class="form-group">
          <label>Subject Code of Course</label>
          <input type="text" class="form-control" name="code" placeholder="Eg - COE-216">
          <span class="help-block">DDD-NNN where D : Department , N : Number</span>
        </div>
        <div class="form-group">
          <label>Roll Number</label>
          <input type="text" class="form-control" name="roll" placeholder="Eg - 262/CO/12">
          <span class="help-block">NNN/DD/YY where N : Number, D : Department , Y : Year</span>
        </div>
        <button class="btn btn-primary">Get Results</button>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <div id="footer">
      <p>© 2024 Copyright: All Rights Reserved</p>
    </div>
    <div id="footer1">
      <a href="https://github.com/Piyush73-dba" target="_blank" rel="noopener noreferrer">Developed by Piyush Yadav</a>
    </div>
  </footer>
</body>
</html>
