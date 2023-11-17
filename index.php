   <?php
   require_once 'vendor/autoload.php'; // Cargar el paquete de PHP Markdown
   use Michelf\MarkdownExtra;

   function markdownToHtml($file) {
       $markdown = file_get_contents($file);
       return MarkdownExtra::defaultTransform($markdown);
   }
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Tu Sitio Web</title>
       <link rel="stylesheet" href="css/styles.css">
       <style>
           body {
               background-color: #1a1a1a;
               color: #ffffff;
           }
       </style>
   </head>
   <body>
       <?php include 'includes/header.php'; ?>

       <div class="container" id="inicio">
           <h1>Página de Inicio</h1>
           <?php echo markdownToHtml('md/inicio.md'); ?>
       </div>

       <div class="container" id="acerca-de">
           <h1>Acerca de</h1>
           <?php echo markdownToHtml('md/acerca_de.md'); ?>
       </div>

       <div class="container" id="servicios">
           <h1>Nuestros Servicios</h1>
           <?php echo markdownToHtml('md/servicios.md'); ?>
       </div>

       <div class="container" id="contacto">
           <h1>Contacto</h1>
           <?php echo markdownToHtml('md/contacto.md'); ?>
       </div>
       <?php include 'body.php'; ?>

       <?php include 'includes/footer.php'; ?>
       <script src="js/script.js"></script>
   </body>
   </html>

