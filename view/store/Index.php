<?php
session_start();
$login="index.php";
if (!isset($_SESSION['NOMBRE_CLIENTE'])||$_SESSION['NOMBRE_CLIENTE']=="inicia sesion o registrate!") {
    $_SESSION['NOMBRE_CLIENTE']="inicia sesion o registrate!";
    $login="Registrate.html";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Perfumes</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/Icon-Perfume.jpg">
  <link href="css/1.css" rel="stylesheet">
  <link href="css/all.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body background="img/Fondo_Principal.png">
    <br><br><br><br><br>
  <div class="Div-Principal">
    <header class="Cabecera">
      <nav class="Nav-Opciones">
        <a href="index.php">
          <h1 class="Logo-Perfumes">PERFUMERÍA</h1>
        </a>
        <ul>
          <li><a href=""><i class="fas fa-user-cog"></i></a></li>
          <li><a href=""><i class="fas fa-cart-plus"></i></a></li>
          <li><a href=<?php echo $login;?>><?php echo $_SESSION['NOMBRE_CLIENTE'];?><i class="far fa-user-circle"></i></a></li>
          <?php
          if($_SESSION['NOMBRE_CLIENTE']!="inicia sesion o registrate!"){
            echo '<li><a href="/../../controller/ACTIONS/act_logout.php">cerrar sesion<i class="far fa-user-circle"></i></a></li>';
          }
          ?>
        </ul>
      </nav>
    </header>
    <div class="Publicidad-1">
      <h1 class="font-effect-outline" id="Letra-Publicidad">
        “El perfume vive en el tiempo; tiene su juventud, su madurez y su vejez”
      </h1>
      <input class="Buscar" type="text" placeholder=" Buscar Productos">
    </div>
    <div class="slider">
      <!-- fade css -->
      <div class="myslide">
        <img src="img/Slider-1.jpg">
      </div>
      
      <div class="myslide">
        <img src="img/Slider-2.jpg">
      </div>
      
      <div class="myslide">
        <img src="img/Slider-3.jpg">
      </div>
      
      <div class="myslide">
        <img src="img/Slider-4.jpg">
      </div>
      
      <div class="myslide">
        <img src="img/Slider-5.jpg">
      </div>
      <!-- /fade css -->
      
      <!-- onclick js -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      
      <div class="dotsbox" style="text-align:center">
        <span class="Dirrecion" onclick="currentSlide(1)"></span>
        <span class="Dirrecion" onclick="currentSlide(2)"></span>
        <span class="Dirrecion" onclick="currentSlide(3)"></span>
        <span class="Dirrecion" onclick="currentSlide(4)"></span>
        <span class="Dirrecion" onclick="currentSlide(5)"></span>
      </div>
    </div>
  </div>
  <br>
  <div class="Top-Favoritos">
    <table class="Perfumes-Favoritos">
      <tr>
        <td class="Perfumes" id="Perfume_1">
          <h1 class="Letra-Top">LO + TOP</h1>
        </td>
        <td class="Perfumes" id="Perfume_2">
          <img src="img/Catalogo-1.png" alt=""><br>
          <h3>
            GIORGIO ARMANI
          </h3>
        </td>
        <td class="Perfumes" id="Perfume_3">
          <img src="img/Catalogo-2.png" alt=""><br>
          <h3>
            ACQUA DI GIO
          </h3>
        </td>
        <td class="Perfumes" id="Perfume_4">
          <img src="img/Catalogo-9.png" alt=""><br>
          <h3>
            LANCOME TRESOR
          </h3>
        </td>
        <td class="Perfumes" id="Perfume_5">
          <img src="img/Catalogo-10.png" alt=""><br>
          <h3>
            LANCOME TRESOR
          </h3>
        </td>
      </tr>
    </table>
  </div>
  <br>
  <div class="Categoria">
    <h1 id="Indicacion-Mensaje">NUESTROS PERFUMES</h1>
    <div class="Formulario-P" id="Opciones-Productos">
      <div class="Tabs-Usuario" id="Secciones-Productos">
        <label for="Registrate" id="label-Productos">
          <h3>PARA &nbsp; ÉL</h3>
        </label>
        <label for="Login" id="label-Productos">
          <h3>PARA &nbsp; ELLA</h3>
        </label>
      </div>
      <div class="content">
        <input type="radio" name="radio" id="Registrate" checked>
        <div class="Tabs-1">
          <table class="Tabla-Perfumes" id="Tabla-Hombres">
            <tr class="Seccion-Perfumes" id="Perfumes-Hombres">
              
            </tr>
            <tr class="Seccion-Perfumes" id="Perfumes-Hombres2">
              
            </tr>
          </table>
        </div>
        <input type="radio" name="radio" id="Login" checked>
        <div class="Tabs-2">
          <table class="Tabla-Perfumes" id="Tabla-Damas">
            <tr class="Seccion-Perfumes" id="Perfumes-Damas">
              
            </tr>
            <tr class="Seccion-Perfumes" id="Perfumes-Hombres">
              
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="Ventana-Modal">
    <div class="Sub-Ventana_Modal">
        <div class="Div-Modal_Bienvenida">
            <h2>Bienvenido a Perfumes</h2>
        </div>
        <div class="Div-Frase_Modal">
            <i class="far fa-times-circle" id="close"></i>
                <h2>
                  ¡ Encontrarás todo lo necesario para ti, un perfume único y exclusivo !
                </h2>
        </div>
    </div>
</div>


  <script src="js/productos.js" charset="uft-8"></script>
  <script type="text/javascript" src="js/1.js"></script>
  </body>
</html>