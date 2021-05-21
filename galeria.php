<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PALAVI</title>
    <!-- MDB icon -->
    <link rel="icon" href="icon.ico" type="imbrand/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body onload="ajaxFunction(0)">

    <!-- Start your project here-->
    <section">
        <img src="universe.jpg" width="100%" height="50%" alt="Team member card imbrand">
        <section>
            <div class="container">
                <!-- Section: Features v.4 -->

                <section class="my-1">

                    <!-- Section heading -->
                    <h2 class="h3 font-weight-bold text-center my-4">Clásicos registrados</h2>
                    <!-- Section description -->

                    <div class="col-lg-12 text-center">
                        <a type="button" href="index.html" class="col-lg-3 btn btn-primary">Regresar</a>
                        <a type="button" href="https://www.univision.com/temas/autos-clasicos"
                            class="col-lg-3 btn btn-secondary">Noticias Autos clásicos</a>

                    </div>
                    <br /><br />
                    <!-- Grid row -->
                    
                </section>
                <!-- Section: Features v.4 -->
            </div>
            <!-- End your project here-->

            <!-- MDB -->
            <script type="text/javascript" src="js/mdb.min.js"></script>
            <!-- Custom scripts -->
            <script type="text/javascript"></script>

            <script type="text/javascript">
                //Browser Support Code
                function ajaxFunction(d=1) {
                    var ajaxRequest;
                    try {
                        ajaxRequest = new XMLHttpRequest();
                    } catch (e) {
                        try {
                            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            try {
                                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (e) {
                                alert("Error en el buscador");
                                return false;
                            }
                        }
                    }

                    ajaxRequest.onreadystatechange = function () {
                        if (ajaxRequest.readyState == 4) {
                            var ajaxDisplay = document.getElementById('ajaxDiv');
                            ajaxDisplay.innerHTML = ajaxRequest.responseText;
                        }
                    }
                    var brand = document.getElementById('brand').value;
                    var model = document.getElementById('model').value;
                    var price = document.getElementById('price').value;
                    var year = document.getElementById('year').value;
                    if((brand==""||model==""||price=="") && d!=0){
                        alert("Llene todos los campos");
                        return;
                    }
                    var queryString = "?brand=" + brand;
                    queryString += "&model=" + model + "&price=" + price + "&brand=" + brand+ "&year=" + year;
                    ajaxRequest.open("GET", "insert.php" + queryString, true);
                    ajaxRequest.send(null);
                    ajaxRequest.open("GET", "conexion.php" + queryString, true);
                    ajaxRequest.send(null);
                }
                function delete_purchase(d) {
                    var ajaxRequest;
                    try {
                        ajaxRequest = new XMLHttpRequest();
                    } catch (e) {
                        try {
                            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                        } catch (e) {
                            try {
                                ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                            } catch (e) {
                                alert("Error en el buscador");
                                return false;
                            }
                        }
                    }

                    ajaxRequest.onreadystatechange = function () {
                        if (ajaxRequest.readyState == 4) {
                            var ajaxDisplay = document.getElementById('ajaxDiv');
                            ajaxDisplay.innerHTML = ajaxRequest.responseText;
                        }
                    }
                    var brand = document.getElementById('brand').value;
                    var model = document.getElementById('model').value;
                    var price = document.getElementById('price').value;
                    var queryString = "?brand=" + brand;
                    queryString += "&id=" + d + "&price=" + price + "&brand=" + brand;
                    if(d!=0){
                    ajaxRequest.open("GET", "delete.php" + queryString, true);
                    ajaxRequest.send(null);
                    }
                    ajaxRequest.open("GET", "conexion.php" + queryString, true);
                    ajaxRequest.send(null);
                }
            </script>
<div  class="p-5 text-center ">
            <div class="card">
                <div class="card-header">
                    <strong>Ingrese Nuevo Carro</strong>
                </div>
                <div class="card-body text-center">

                    <form name='myForm'>
                        <div class="row">
                            <div class="d-inline col-lg-3">
                                <strong>Marca</strong>
                                <input class="form-control" type='text' id='brand' placeholder="Ejem. Ford" />
                            </div>
                            <div class="d-inline col-lg-3">
                                <strong>Modelo</strong>
                                <input class="form-control" type='text' id='model' placeholder="Ejem. Grand Marquiz" />
                            </div>
                            <div class="d-inline col-lg-3">
                                <strong>Año</strong>
                                <input class="form-control" type='number' id='year' placeholder="Ejem. 1982" />
                            </div>
                            <div class="d-inline col-lg-3">
                                <strong>Precio</strong>
                                <input class="form-control" type='number' id='price' placeholder="Ejem. 160000" />
                            </div>
                        </div>

                        <br />

                        <input type='button' class="btn btn-success" onclick='ajaxFunction()' value='Agregar' />

                    </form>

                </div>
            </div>


            <div id='ajaxDiv'  class="mt-5"></div>
        </div>
        
</body>

</html>