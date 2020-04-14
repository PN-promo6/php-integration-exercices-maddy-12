 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <style>
         body {
             margin: 0;
         }

         section {
             column-width: 300px;
             column-gap: 5px;
             padding: 5px;
         }

         section img {
             width: 100%;
         }
     </style>
 </head>

 <body>
     <section>
         <?php
            $dirname = "img/";
            $images = glob($dirname . "*.jpg");

            foreach ($images as $image) {
                echo '<img src="' . $image . '" /><br />';
            }
            ?>
     </section>
 </body>

 </html>