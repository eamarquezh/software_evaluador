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

    <title> Dirección General de Formación y Superación Docente</title>
    <link rel="icon"type="image/png"sizes="16x16"href="assets/images/logo.png"/>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Evaluadores</title>
</head>

<body style="background-color: #621132;">
    <div class="main-wrapper">
        
        <nav class="navbar">
            <div class="container-fluid">
                <div>
                    <a href="#">
                        <img alt="gob.mx" src="assets/images/logo_gobhidalgo.png" width="258">
                    </a>
                </div>
                <div class="col-sm-12 col-lg-8 col-xl-8 text-white mt-4">
                    <h1>Dirección General de Formación y Superación Docente</h1>
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
                <?php echo '<a href="cerrarsesion.php"> <button  type="button" class="btn btn-success">cerrar sesión</button></a>'?>
            </div>
          </div>
    </div>
        <!-- acordeon -->
    <div class="accordion m-3" id="accordionExample">
        <!-- acordeon1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed text-white" style="background-color: #621132;" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
                    Preparación Académica 1
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputLic" class="col-form-label">Licenciatura:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputLic" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Constancia
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Certificado
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Titulo y Cedula
                            </label>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn text-white" style="background-color: #b38e5d;">Subir evidencia</button> 
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputEspe" class="col-form-label">Especialidad:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputLic" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Constancia
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Certificado
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Titulo y Cedula
                            </label>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn text-white" style="background-color: #621132;">Subir evidencia</button>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputMaes" class="col-form-label">Maestría:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputLic" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Constancia
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Certificado
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Titulo y Cedula
                            </label>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn text-white" style="background-color: #b38e5d;">Subir evidencia</button>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputDoc" class="col-form-label">Doctorado:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputLic" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Constancia
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Certificado
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Titulo y Cedula
                            </label>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn text-white" style="background-color: #621132;">Subir evidencia</button>
                        </div>
                    </div>
                    <div class="container text-center p-2">
                        <div class="col-auto">
                            <button class="btn btn-success" id="btn_cancelar" type="button">Cancelar</button>
                            <button class="btn btn-success" id="btn_guardar" type="button">Guardar y continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- acordeon2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed text-white" style="background-color: #b38e5d;" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"> 
                Preparación Académica 2
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                    <div class="row p-2 align-items-center">
                        <div class="col-auto">
                            <label for="inputLic" class="col-form-label">Idioma:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputLic" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Habla y lee
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Habla, lee y escribe
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Dominio total
                            </label>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn text-white" style="background-color: #621132;">Subir evidencia</button>
                        </div>
                    </div>
                    <div class="row p-2 align-items-center">
                        <div class="col-auto">
                            <label for="inputEspe" class="col-form-label">Certificacion:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputLic" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Incompleto
                            </label>
                        </div>
                        <div class="form-check col-sm-2">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Terminado
                            </label>
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn text-white" style="background-color: #b38e5d;">Subir evidencia</button>
                        </div>
                    </div>
                    <div class="container text-center p-2">
                        <div class="col-auto">
                            <button class="btn btn-success" id="btn_cancelar" type="button">Cancelar</button>
                            <button class="btn btn-success" id="btn_guardar" type="button">Guardar y continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- acordeon3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed text-white" style="background-color: #621132;" type="button"  data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"> 
                Permanencia en el Subsistema
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputEspe" class="col-form-label">Años de Servicio en el Subsistema:</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="inputLic" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="col-auto">
                        <button type="button" class="btn text-white" style="background-color: #b38e5d;">Subir evidencia</button>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputEspe" class="col-form-label"><b>Nota:El documento comprobatorio para este rubro debe ser el F.U.P. expedido por la SEP.</b></label>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-success" id="btn_cancelar" type="button">Cancelar</button>
                            <button class="btn btn-success" id="btn_guardar" type="button">Guardar y continuar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- acordeon4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingfour">
                <button class="accordion-button collapsed text-white" style="background-color: #b38e5d;" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                    Calidad
                </button>
            </h2>
            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <!-- aqui poner el contenido -->
                    <div class="row mb-3 align-items-center">
                      <div class="col-auto">
                          <label for="inputEspe" class="col-form-label">Cumple:</label>
                      </div>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-success" id="btn_cancelar" type="button">Cancelar</button>
                        <button class="btn btn-success" id="btn_guardar" type="button">Guardar y continuar</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    </main>
    <footer class="col-12" style="height:100px">
        <div class="align-items-centers">
          <div class="row  d-flex align-items-center justify-content-center">

            <div class="col-4 text-center text-white fs-3 mt-4">
                <img style="width:50%" src="assets/images/logotipohidalgo.png">
            </div>
            
            <div class="col-4  text-center mt-4 align-items-center justify-content-center text-white">
              <strong class="fs-6">Contacto</strong>
              <div class="text-center">
                <p>Blvd. Felipe Ángeles s/n C.P. 42083,Pachuca de Soto, Hidalgo, México</p> 
                <p>Horario de atención: 09:00 a 16:30</p>
                <p>Dirección General de Formación y Superación Docente  Tel. 771 791 42 73 y 771 791 45 13</p>
                <p>Departamento de Educación Normal Tel. 771 710 05 84</p>
                </div>       
            </div>       
            <div class="col-4  text-center mt-4 align-items-center justify-content-center text-white">
                        <img  style="width:20%" src="assets/images/escudo_blanco.svg">
                        <p>© 2022 Secretaría de Educación Pública</p>
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
