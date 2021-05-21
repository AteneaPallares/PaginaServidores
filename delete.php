 <?php
   $servername = "localhost";
   $username = "atenea";
   $password = "12345678";
   $database = "palavi";
   $conn = mysqli_connect($servername, $username, $password, $database);
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
    $id=$_GET['id'];
    $id = mysqli_real_escape_string($conn,$id);
    $sql = "DELETE FROM cars WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>
