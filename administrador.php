<?php
//conexion
//session o sesiones
session_start();
if(!isset($_SESSION['ss_idusuario'])){
    $idusuario=0;
  }else{
    $idusuario=$_SESSION['ss_idusuario'];
  }
  $nombre_usuario="";
  //echo $idusuario;
  if($idusuario>0){
    $consulta="select nombre from Accesos where idusuario='$idusuario'";
    $recordset = mysqli_query($link,$consulta);
    while($registro = mysqli_fetch_array($recordset)){$nombre_usuario=$registro["nombre"];}
  
  }
  
  //echo "idusuario ".$idusuario;  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>adninistrador</title>
</head>
<body>
    <header class="bg-dark text-white" height="240">
        <nav class="navbar">
            <div class="container-fluid">
                <div>
                    <a href="#">
                        <img src="http://cdn.hidalgo.gob.mx/logo_gobhidalgo.svg" alt="" width="200"  height="160" class="">
                    </a>
                </div>
                <div class="nav navbar-nav text-center">
                    <h1>Secretaria de Educacion Pública de Hidalgo</h1>
                </div>
            </div>
        </nav>
    </header>
    <main class="bg-light"> 
    <!-- aqui datos de autenticacion -->
    <div class="h3 m-2">
        <div class="d-flex flex-row mb-3 justify-content-between">
            <div class="p-2">
                <?php echo '<label a  href="#">Usuario Actual: <strong>'.$nombre_usuario.'</strong><span class="text-end"><i class="fa fa-user"></i></span>-name</label>'?>
            </div>
            <div class="p-2">
                <?php echo '<a href="cerrarsesion.php"> <button  type="button" class="btn btn-secondary">cerrar sesión</button></a>'?>
            </div>
          </div>
        
    </div>
    <!-- acordeon -->
    <div class="accordion m-3" id="accordionExample">
        <!-- acordeon1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed bg-primary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Docentes Participantes
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <!-- aqui poner el contenido -->
                  <div class="container text-center">
                      <div class="row align-items-start">
                          <div class="col bg-primary text-white">
                              <b>Docente</b>
                          </div>
                          <div class="col bg-primary text-white">
                              <b>RFC</b>
                          </div>
                          <div class="col bg-primary text-white">
                              <b>Correo</b>
                          </div>
                          <div class="col bg-primary text-white">
                              <b>Escuela</b>
                          </div>
                      </div>
                      <div class="row align-items-center">
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                      </div>
                      <div class="row align-items-end">
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                      </div>
                      <div class="row align-items-end">
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                      </div>
                  </div>
                  <div class="container text-center p-2">
                      <button type="button" class="btn btn-primary text-white">Subir Docentes</button> <button type="button" class="btn btn-primary text-white">Activar Convocatoria</button>
                  </div>
              </div>
          </div>
        </div>
        <!-- acordeon2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Evaluadores Participantes
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <!-- aqui poner el contenido -->
                  <div class="container text-center">
                      <div class="row align-items-start">
                          <div class="col bg-secondary text-white">
                              <b>Docente</b>
                          </div>
                          <div class="col bg-secondary text-white">
                              <b>RFC</b>
                          </div>
                          <div class="col bg-secondary text-white">
                              <b>Correo</b>
                          </div>
                          <div class="col bg-secondary text-white">
                              <b>Evaluara a</b>
                          </div>
                      </div>
                      <div class="row align-items-center">
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                      </div>
                      <div class="row align-items-end">
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                      </div>
                      <div class="row align-items-end">
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                          <div class="col">
                              -
                          </div>
                      </div>
                  </div>
                  <div class="container text-center p-2">
                      <button type="button" class="btn btn-secondary text-white">Subir Evaluadores</button> <button type="button" class="btn btn-secondary text-white">Informar a evaluadores</button>
                  </div>
              </div>
          </div>
        </div>
        <!-- acordeon3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed bg-warning text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Dispersión
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                  <!-- aqui poner el contenido -->
                  <div class="container text-center">
                      <div class="row align-items-end">
                          <form>
                              <div class="mb-3">
                                  <label for="exampleInputUMA" class="form-label"><b>Valor actual de la UMA:</b></label>
                                  <input type="uma" class="form-control" id="exampleInputUMA" aria-describedby="Ingrese UMA">
                              </div>
                              <button type="submit" class="btn btn-warning">Actualizar</button>
                          </form>
                      </div>
                  </div>
              </div>
        </div>
        <!-- acordeon4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingfour">
              <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                  Resultados
              </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                    <div class="container text-center">
                        <div class="row align-items-start">
                            <div class="col bg-success text-white">
                                <b>Docente</b>
                            </div>
                            <div class="col bg-success text-white">
                                <b>RFC</b>
                            </div>
                            <div class="col bg-success text-white">
                                <b>Correo</b>
                            </div>
                            <div class="col bg-success text-white">
                                <b>Resultados</b>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col">
                                -
                            </div>
                            <div class="col">
                                -
                            </div>
                            <div class="col">
                                -
                            </div>
                            <div class="col">
                                -
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                -
                            </div>
                            <div class="col">
                                -
                            </div>
                            <div class="col">
                                -
                            </div>
                            <div class="col">
                                -
                            </div>
                        </div>
                        <div class="row align-items-end">
                            <div class="col">
                                -
                            </div>
                            <div class="col">
                                -
                            </div>
                            <div class="col">
                                -
                            </div>
                            <div class="col">
                                -
                            </div>
                        </div>
                    </div>
                    <div class="container text-center p-2">
                        <button type="button" class="btn btn-success text-white">Informar resultados e informar cierre de convocatoria</button>
                    </div>
                </div>
            </div>
          </div>
      </div> 

    </main>
    <footer class="bg-dark text-white text-center text-lg-start bottom">
        <div class="container p-4">
          <div class="row">
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                <img src="https://cdn.hidalgo.gob.mx/logo_hgo_2019.png" alt="" width="100"  height="80" class="">
            </div>
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
              <h5 class="text-center">Contacto</h5>
                <div class="text-center">
                <p>Blvd. Felipe Ángeles s/n C.P. 42083,Pachuca de Soto, Hidalgo, México</p> 
                <p>Horario de atención: 09:00 a 16:30</p>
                
               <p>Dirección General de Formación y Superación Docente Tel. 771 791 42 73 y 771 791 45 13</p>
                <p>Departamento de Educacción Normal Tel. 771 710 05 84</p>
                </div>       
            </div>
            <div class="col-lg-4 col-md-3 mb-3 mb-md-0">
                <div class="text-end">
                    <a href="#">
                        <img src="http://cdn.hidalgo.gob.mx/escudo_blanco.svg" alt="" width="200"  height="160" class="">
                    </a>
                </div>
            </div>
          </div>
        </div>
      </footer>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
 function cerrarsesion(){
    $.ajax({
      type : "post",
      url : "cerrarsesion.php",
      data : {
         
      },
      dataType:'text',
      success : function( data ){                  
        location.reload();
        
      }
    });
  }
</script>
</body>
</html>