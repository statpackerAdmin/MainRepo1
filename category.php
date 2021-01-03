
<head>
  <meta charset="utf-8" />
  <title>Valuable gear statistics</title>
  <link rel="stylesheet" type="text/css" href="../styles.css" />

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

</head>
<body>
<header><h1> <a href="index.html">Statpacker.com</a> <br> {{category.name}} statpage</h1></header>
<div class="pageBreak"><hr></div>
<div class="categoryDataContainer">
    <div id="app">
        <table>
            <tr>
              <th>categoryHeader</th>
            </tr>
            <tr>
              <td>categoryDatum</td>
            </tr>

          </table>
      </div>
</div>
</body>

<?php
$servername = "localhost:3306";
$username = "statpackeradmin_statpackeradmin_db";
$password = "aprilmaydatabasetoompark69$";
$dbname = "statpackeradmin_products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection fail: " . $conn->connect_error);
}

$sql = "GRANT ALL PRIVILEGES ON statpackeradmin_products.* TO 'statpackeradmin'@'localhost' WITH GRANT OPTION;
    FLUSH PRIVILEGES
";
$result = $conn->query($sql);
echo($result);
 $fieldinfo=mysqli_fetch_fields($result);

  foreach ($fieldinfo as $val)
    {
    printf(": %s\n",$val->name);

    }
    echo "<br><hr><br>";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["items"]. " - Name: " . $row["brand"]. " " . $row["model"]. "<br>";
  }

} else {
  echo "0 results";
}
$conn->close();
?>

</html>
