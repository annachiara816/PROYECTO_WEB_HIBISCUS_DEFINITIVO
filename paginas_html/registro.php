<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&family=Oswald:wght@200..700&display=swap"
    rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="..\Imagenes\logo1.ico">
  <link rel="stylesheet" href="..\css\reg_stile.css">
  <!-- <link rel="stylesheet" href="..\css\principal.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>

<body>
  <!-- header section starts -->
  <header>

    <input type="checkbox" name="" id="toggler">

    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Hibiscus Shop<span>.</span></a>

    <!-- <img src="..\Imagenes\logo.png" class="logo" alt="Logo Hibiscus"> -->
    <!-- <h2>Bracelete, shop and more</h2> -->

    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#products">Products</a>
      <a href="#about_us">About Us</a>
      <a href="#contact">Contact</a>
      <a href="#sing_in">Register</a>
    </nav>

    <div class="icons">

      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-shopping-cart"></a>
      <a href="#" class="fas fa-user"></a>

    </div>

  </header>
  <!-- header section ends -->

   <!-- formulario section starts -->
    <div class="container">
        <div class="title">Register</div>

            <form action="#" id="formulario" onsubmit="event.preventDefault()">
                <fieldset id="">
                    <label for="nombre">Nombre del Estudiante:</label><br>
                    <input type="text" id="nombre" name="nombre" required><br>


                <div class="form-group">
                    <span>Name</span>
                    <input type="text" placeholder="name">
                </div>

                <div class="form-group">
                    <span>Username</span>
                    <input type="text" placeholder="username">
                </div>

                <div class="form-group">
                    <span>Email</span>
                    <input type="email" placeholder="email">
                </div>

                <div class="form-group">
                    <span>Phone number</span>
                    <input type="number" placeholder="phone">
                </div>

                <div class="form-group">
                    <span>Contrasena</span>
                    <input type="password" placeholder="Ingrese una contrasena">
                </div>

                <div class="form-group">
                    <span> Confirmar Contrasena</span>
                    <input type="password" placeholder="Ingresede una contrasena">
                </div>

                <div class="form-group"></div>
                    <span> Recordarme</span>
                    <input type="checkbox" placeholder="Ingresede una contrasena">
                </div>


            </form>



            <section>

                <form id="formulario" onsubmit="event.preventDefault(); agregarEstudiante();">
                <fieldset id="">
                    <label for="nombre">Nombre del Estudiante:</label><br>
                    <input type="text" id="nombre" name="nombre" required><br>
                    
                    <label for="nota1">Nota del Primer Trimestre:</label><br>
                    <input type="number" id="nota1" name="nota1" required><br>
                    
                    <label for="nota2">Nota del Segundo Trimestre:</label><br>
                    <input type="number" id="nota2" name="nota2" required><br>
                    
                    <label for="nota3">Nota del Tercer Trimestre:</label><br>
                    <input type="number" id="nota3" name="nota3" required><br><br>
                    <p>Estudiante <span id="contador">1</span> de 10</p>
            
                    </fieldset>
                    
                    <input type="submit" value="Agregar Alumno">
                   
                </form>
            
                <form id="formEnvio" method="post" action="" style="display:none;">
                    <input type="hidden" id="estudiantes" name="estudiantes">
                    <input type="button" value="Volver" onclick="enviarDatos();">
                </form>
                </section>
            

        </div>


 


   <!-- formulario section ends -->





  <!-- footer section starts -->

  <!-- <footer>
    <section class="footer">

        <div class="box-container">

          <div class="box">
            <h3>Quick links</h3>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Products</a>
            <a href="#">Review</a>
            <a href="#">Contact</a>

          </div>

          <div class="box">
            <h3>Extra links</h3>
            <a href="#">My account</a>
            <a href="#">My order</a>
            <a href="#">My favorite</a>
            
          </div>

          <div class="box">
            <h3>Locations</h3>
            <a href="#">India</a>
            <a href="#">Usa</a>
            <a href="#">Colombia</a>
            <a href="#">Italia</a>

          </div>


          <div class="box">
          <h3>Contact Info</h3>
          <a href="#">+3925688807</a>
          <a href="#">hibiscus@gmail.com</a>
          <a href="#">Madrid Espana - 28921</a>
          <img src="../Imagenes/payments2.png" alt="">

        </div>
        </div>


        <div class="box">
          <div class="icons">
          <h3>Connect With Us</h3>
          <a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
          <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
          <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
          
        </div>
        
      </div>
        </div>

        <div class="credit">

          &copy;
          Created by <span>Gloria Naranjo Web desingner</span> | All rights reserved</div>
        
    </section>

  </footer> -->
   <!-- footer section ends -->

</body>

</html>




