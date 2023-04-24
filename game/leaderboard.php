<!DOCTYPE html>
<html>
<head>
  <title>Leaderboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      margin-top: 50px;
      margin-bottom: 50px;
      background-color: rgba(255,255,255,0.9);
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0px 0px 20px rgba(0,0,0,0.5);
    }
    h1 {
      text-align: center;
      margin-bottom: 50px;
    }
    .table {
      font-size: 14px;
    }
    th {
      background-color: #343a40;
      color: #fff;
      
    }
    tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>LeaderBoard</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width:5%;text-align:center;">Rank</th>
          <th style="width:20%;text-align:center;">Agent Name</th>
          <th style="width:10%;text-align:center;">Total Score</th>
          <th style="width:10%;text-align:center;">Time Taken</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("../db/db_config.php");

        // Retrieve data from MySQL table
        $sql = "SELECT name,SUM(score1 + score2 + score3) as total_score,SUM(time1 + time2 + time3) as time_taken FROM users GROUP BY id ORDER BY total_score DESC, time_taken DESC";
        $result = mysqli_query($conn, $sql);
        // Display data in HTML table
        if (mysqli_num_rows($result) > 0) {
            $counter = 1;
            while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td style='width:5%;text-align:center;'>" . $counter . "</td>";
            echo "<td style='width:20%;text-align:center;'>" . $row["name"] . "</td>";
            echo "<td style='width:10%;text-align:center;'>" . $row["total_score"] . "</td>";
            echo "<td style='width:10%;text-align:center;'>" . $row["time_taken"] . "</td>";
            echo "</tr>";
            $counter++;
        }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        mysqli_close($conn);
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
