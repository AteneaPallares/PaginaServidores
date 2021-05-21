<?php
   
   $servername = "localhost";
   $username = "atenea";
   $password = "12345678";
   $database = "palavi";
   
   $conn = mysqli_connect($servername, $username, $password, $database);
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
   }
            $sql = "SELECT *FROM cars";
      
            if ($res = mysqli_query($conn, $sql)) {
                echo "<div ><div class='card text-center'>
                <div class='card-header h5 font-weight-bold'>Autos registrados</div>
                <div class='card-body col-lg-12'>

                ";
                if (mysqli_num_rows($res) > 0) {
                    echo "<table class='table table-striped table-hover'>";
                    echo "<thead>
                    <tr>
                        <th scope='col' class='font-weight-bold' >Id</th>
                        <th scope='col' class='font-weight-bold'>Marca</th>
                        <th scope='col' class='font-weight-bold'>Modelo</th>
                        <th scope='col' class='font-weight-bold'>Año</th>
                        <th scope='col' class='font-weight-bold'>Precio</th>
                        <th scope='col' class='font-weight-bold'></th>
                        </tr></thead>
                        <tbody>
                    ";
                    while ($row = mysqli_fetch_array($res)) {
                        $val=$row['id'];
                        echo "<tr><td>".$row['id']."</td>";
                        echo "<td>".$row['brand']."</td>";
                        echo "<td>".$row['model']."</td>";
                        echo "<td>".$row['year']."</td>";
                        echo "<td>".$row['price']."</td>";
                        
                        echo('<td  >
                        <button class="btn btn-danger btn-sm px-3" onclick="delete_purchase(\'' . $val . '\')" ><i class="fas fa-times"></i></button></td>');
                        echo"</tr>";
                    }
                    echo "</tbody></table></div></div></div>";
                }
                else {
                    echo "No se encontraron registros.";
                }
            }
            else {
                echo "ERROR: No se pudo ejecutar  $sql. "
                                            .mysqli_error($conn);
            }
            mysqli_close($conn);
        
?>
