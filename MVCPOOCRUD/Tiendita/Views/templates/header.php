 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./assets/layout.css">
     <title>Mi Tiendita</title>
 </head>

 <body>
     <header>
         <nav>
             <div class="userConatiner">
                 <div class="fotoUsuario"></div>
                 <h4><?= $userData['correo'] ?></h4>
                 <a href="index.php?controller=AuthController&action=logout">LOGOUT</a>
             </div>
             <ul></ul>
         </nav>
     </header>
     <section>
         <ul>
             <?php foreach ($menu as $key => $options) : ?>
                 <li><a href="<?= $options ?>"><?= $key ?></a></li>
             <?php endforeach; ?>

         </ul>
     </section>
     <div class="mainContainer">