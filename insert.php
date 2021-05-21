
<?php
$servername = "localhost";
   $username = "atenea";
   $password = "12345678";
   $database = "palavi";
   $conn = mysqli_connect($servername, $username, $password, $database);
 echo "............";
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
   
  function runMyFunction() {
    echo 'I just ran a php function';
  }
 $brand = $_GET['brand'];
 $model = $_GET['model'];
 $price = $_GET['price'];
 $year = $_GET['year'];
 
 // Escape User Input to help prevent SQL Injection
  $brand = mysqli_real_escape_string($conn,$brand);
  $model = mysqli_real_escape_string($conn,$model);
  $price = mysqli_real_escape_string($conn,$price);
  $sql = "INSERT INTO cars (brand, model, price,year) VALUES ('$brand', '$model', $price,$year)";
  if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
