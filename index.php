<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.css">
    <link href="bootstrap-5.3.0-alpha3-dist/css/bootstrap-grid.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/calculoentradas.js"></script>
    <title>Document</title>
</head>
<body>
  <!--navbar-->
    <div class="container-xxl bg-dark">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
                  <div class="container-fluid">
                    <img src="img/codoacodo.png" width="90" height="55" alt="">
                    <a class="navbar-brand" href="#">Conf Bs As</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">La conferencia</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#oradores">Los Oradores</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">El lugar y la fecha</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#convOrador">Conviertete en orador</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-success" href="#comprarticket">Comprar tickets</a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </nav>
            </div>
        </div>  
    </div>
    <!--Imagen con texto superpuesto-->
    <div class="container-xxl bg-dark ps-2">
      <div class="row">
        <div class="col">
          <div class="card text-end border-0">
            <img src="img/ba1.jpg" class="card-img rounded-0  " style="filter:brightness(50%);" alt="...">
            <div class="card-img-overlay start-50 text-white" style="width: 50%; margin-top: 20%;">
            <h5 class="card-title">CONF BS AS</h5>
            <p class="card-text">Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experencia de 
              los expertos que estan creando el futuro de internet. Ven a conocer a los miembros del evento, a otros 
              estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!</p>
            <button type="button" class="btn btn-outline-light">Quiero ser orador</button>
            <button type="button" class="btn btn-success" onclick="location.href='#comprarticket'" >Comprar tickets</button>
          </div>
          </div>
        </div>  
      </div>
    </div>
    <!--Cards-->
    <div class="container-xxl p-4" id="oradores">
      <div class="row">
        <div class="col" style="text-align: center;">
          <p>Conoce a los <br></p>
          <h4>Oradores</h4>          
        </div>
      </div>
      <div class="row">
        <div class="col-sm"></div>
        <div class="col-sm-3">
          <div class="card h-100">
            <img src="img/steve.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <span class="badge text-bg-warning">Javascript</span>
                <span class="badge text-bg-primary">React</span>
                <h4>Steve Jobs</h4>
                <br>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam rem id maiores suscipit ad, corporis blanditiis explicabo, quasi incidunt doloribus distinctio nostrum architecto et facere cumque nesciunt voluptate dolor quos!</p>
              </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card h-100">
            <img src="img/bill.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <span class="badge text-bg-warning">Javascript</span>
                <span class="badge text-bg-primary">React</span>
                <h4>Bill Gates</h4>
                <br>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic tempore commodi blanditiis quae? Sint, tempore cupiditate facere saepe iste deserunt, delectus perspiciatis, hic repellat velit minima cumque. Eum, quod aperiam.</p>
              </div>
          </div>
        </div>
          <div class="col-sm-3">
            <div class="card h-100">
              <img src="img/ada.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <span class="badge text-bg-secondary">Negocios</span>
                <span class="badge text-bg-danger">Startups</span>
                <h4>Ada Lovelace</h4>
                <br>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo, ex facere, placeat delectus consequuntur veritatis corporis aliquam, autem et voluptate unde possimus repellendus quas aut ipsa minus sapiente nostrum? Expedita!</p>
              </div>
          </div>
        </div>
        <div class="col-sm"></div>
      </div>
      <!--Lugar para modal con oradores base de datos-->
      <div class="row">
        <div class="col-5"></div>
        <div class="col-2 mt-2">
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#otrosOradores">Enterate quien mas disertara</button>
                        <!-- Modal -->
                          <div class="modal fade" id="otrosOradores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Otros Oradoes inscriptos</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <ul class="list-group list-group-flush">
                                    <?php include "select_oradores.php"; ?>
                                  </ul>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                              </div>
                            </div>
                          </div>
        </div>
        <div class="col-5"></div>                
      </div>
    </div>
    <!--Imagen con comentario-->
    <div class="container-xxl bg-black">
      <div class="row">
        <div class="col">
          <div class="card bg-black my-1 border-0 rounded-0">
            <div class="row g-0">
              <div class="col-6">
                <img src="img/hawaii2.jpg" class="card-img" alt="...">
              </div>
              <div class="col-6">
                <div class="card-body text-white">
                  <h5 class="card-title">Conf Bs As</h5>
                  <p class="card-text">Buenos Aires es la provincia y localidad mas grande estado de Argentina, en los EE UU, Honolulu
                  es la mas sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu
                  se refiere al area urbana en la costa sureste de la isla Oahu, la ciudad y el condado de Honolulu
                  han formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600Km2 de superficie).
                  </p>
                  <button type="button" class="btn btn-outline-light" id="btncuadrado">Conoce mas</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--form Orador-->
    <div class="container-xxl" id="convOrador">
      <div class="row">
        <div class="col-12 text-center">
          Conviertete en <br><h2>ORADOR</h2>
        </div>
      </div>
    </div>
    <div class="container-xxl ">
        <div class="row">
          <div class="col-12 text-center">
            Anotate para  dar una <u style="text-decoration-style: dotted;">charla ignite</u>. Cuentanos de que queres hablar!
          </div>
        </div>
    </div>
    <div class="container-xxl ">
      <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
          <form class="row" style="height: 300px;" method="post" action="insertar_oradores.php">
            <div class="col-6">
              <input type="text" name="nombre" class="form-control"  placeholder="Nombre">
            </div>
            <div class="col-6">
              <input type="text" name="apellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="col-12">
              <textarea class="form-control" name="texto" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-success" style="width: 100%;">Enviar</button>
            </div>
          </form>
        </div>
        <div class="col">
        </div>
      </div>
    </div>
    <!--Form compra entradas-->
    <div class="container-xxl p-4">
      <div class="row">
        <div class="col-3"></div>
        <div class="col-2">
          <div class="card border-primary rounded-0 h-100">
              <div class="card-body text-center">
                <h4>Estudiante</h4><br>
                tiene un descuento <br>
                80% <br>
                <p class="mt-3"style="color: gray; font-size: 80%;">*presentar documentacion</p>
              </div>
          </div>
        </div>
        <div class="col-2">
          <div class="card border-info rounded-0 h-100">
              <div class="card-body text-center" style="text-justify: distribute;">
                <h4>Trainee</h4><br>
                tiene un descuento <br>
                50% <br>
                <p class="mt-3"style="color: gray; font-size: 80%;">*presentar documentacion</p>
              </div>
          </div>
        </div>
          <div class="col-2">
            <div class="card border-warning rounded-0 h-100">
              <div class="card-body text-center">
                <h4>Junior</h4><br>
                tiene un descuento <br>
                15% <br>
                <p class="mt-3"style="color: gray; font-size: 80%;">*presentar documentacion</p>
              </div>
          </div>
        </div>
        <div class="col-3"></div>
      </div>
    </div>
    <div class="container-xxl">
      <div class="row">
        <div class="col-12 text-center">
          Venta
        </div>
      </div>
    </div>
    <div class="container-xxl">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3>Valor del ticket $200</h3>
          </div>
        </div>
    </div>
    <div class="container-xxl " id="comprarticket">
      <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
          <form class="row" method="post" action="insertar_oyente.php">
            <div class="col-6">
              <input id="nombre" type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-6">
              <input id="apellido"type="text" name="apellido" class="form-control" placeholder="Apellido">
            </div>
            <div class="col-12 py-4">
              <input id="email" type="email" name="email" class="form-control" placeholder="Email"></input>
            </div>
            <div class="col-6 pb-4">
              <label for="cantidad">Cantidad</label>
              <input type="text" id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad">
            </div>
            <div class="col-6 pb-4">
              <label for="categoria">Categoria</label>
              <select class="form-select" id="categoria" name="categoria" onclick="calcular()">
                <option value="estudiante" selected>Estudiante</option>
                <option value="trainee">Trainee</option>
                <option value="junior">Junior</option>
              </select>
            </div>
            <div class="col-12 py-2">
              <div class="alert alert-info bg-opacity-10">Total a pagar: $ <span id="total" name="monto"></span>  </div>
            </div>
            <div class="col-6 pb-4">
              <button type="reset" class="btn btn-success" style="width: 100%; background-color: lawngreen; border-color: lawngreen;">Borrar</button>
            </div>
            <div class="col-6 pb-4">
              <button type="submit" class="btn btn-success" style="width: 100%; background-color: lawngreen; border-color: lawngreen;">Resumen</button>
            </div>
          </form>
        </div>
        <div class="col">
        </div>
      </div>
    </div>
    <!--Footer-->
    <div class="container-xxl footer">
        <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
          <div class="col">
            <a href="">Preguntas Frecuentes</a>
          </div>
          <div class="col">

          </div>
          <div class="col">
            <a href="">Contactanos</a>
          </div>
          <div class="col">

          </div>
          <div class="col">
            <a href="">Prensa</a>
          </div>
          <div class="col">

          </div>
          <div class="col">
            <a href="">Conferencias</a>
          </div>
          <div class="col">

          </div>
          <div class="col">
            <a href="">Terminos y condiciones</a>
          </div>
          <div class="col">

          </div>
          <div class="col">
            <a href="">Privacidad</a>
          </div>
          <div class="col">

          </div>
          <div class="col">
            <a href="">Estudiantes</a>
          </div>     
        </div>
    </div>
</body>
</html>
