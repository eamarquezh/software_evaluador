<?php
//conexion
//sesion o sessiones
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
    <meta name="ad.size" content="width=480,height=320">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"href="./style.css">
    <!--Mamifest va permitir que se vea bien en los dispositivos moviles y ve que funcione bien el resposive-->
    <link rel="manifest" href="vs.configuracion/manifest.json">
    <title>Acceso</title>
</head>
<body>
  
  <section>
    <header class="bg-dark text-white" height="240">
      <nav class="navbar">
          <div class="container-fluid">
              <div>
                  <a href="#">
                      <img src="https://cdn.hidalgo.gob.mx/logo_hgo_2019.png" alt="" width="200"  height="160" class="">
                  </a>
              </div>
              <div class="nav navbar-nav text-center">
                  <h1>Secretaria de Educacion Pública de Hidalgo</h1>
              </div>
          </div>
      </nav>
  </header>
  </section>
  <section class="left-form">
    <main class="bg-light"> 
      <!-- acceso -->
      <div class="d-flex flex-row bd-highlight flex-wrap mb-2 justify-content-evenly">
        <div class="p-2 bd-highlight m-2">
          <div class="h1 text-strech ">
            <span><i class="fa fa-users"></i></span>
          </div>
          <div class="h6 text-strech">Sistema Informático Web para la Evaluación del Otorgamiento al Desempeño Docente en las Escuelas Normales Públicas del Estado de Hidalgo.</div>
          <div class="text-strech"><button type="button" class="btn btn-outline-info">Convocatoria para el Otorgamiento al Estímulo Docente en Escuelas Normales Públicas del Estado de Hidalgo.</button></div>
          <div class="blockquote text-strech">SUBSECRETARÍA DE EDUCACIÓN MEDIA SUPERIOR Y SUPERIOR</div>
          <div class="blockquote text-strech">DIRECCIÓN GENERAL DE FORMACIÓN Y SUPERACIÓN DOCENTE.</div>
        </div>
        
      </div>
  
      
  </section>
  <section class="rigth-form">
    <div class="px-lg-5-pt-4 pb-lg-3 p-4"></div>
      <h2>Iniciar Sesión</h2>
      <img src="https://cdn.hidalgo.gob.mx/logo_hgo_2019.png" alt="" width="100"  height="80" class="">
      <form >
        <div class="mb4">
          <label for="email" ><span><i class="fa fa-user"></i></span>Usuario</label>
          <input type ="text"class="formcontrol"name="email"id="email"placeholder="">
        </div>
          <div class="mb4">
            <label for="password" ><span><i class="fa fa-lock"></i></span>Contraseña</label>
            <input type ="password"class="formcontrol"name="password"id="passwo"placeholder="">
          </div>
          
     
          <button type="button" onclick="iniciarsesion();" class="btn btn-primary">Iniciar Sesión</button>
      </form>
    
  
  </section>
  <section></section>
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
            
            <p>Dirección General de Formación y Superación Docente  Tel. 771 791 42 73 y 771 791 45 13</p>
            <p>Departamento de Educación Normal Tel. 771 710 05 84</p>
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
<script >
  function iniciarsesion(){
    var correo=$('#email').val();
    var password=$('#password').val();
    console.log("HOLA DESDE LA CONSOLA DEL NAVEGADOR");
    $.ajax({
      type : "post",
      url : "verifica_login.php",
      data : {
        correo :email,
        password: password
      },
      dataType:'text',
      success : function( data ){   

       // alert(data); 
       
        if(data==-1){
          alert("Correo electronico y/o contraseña no son validos");
        }else{
          alert("Bienvenido");

          var url = "index.php";    
          $(location).attr('href',url);
        }              

       
        
      }
    });

  }
  </script>
</body>
</html>