<?php
@$d1 = $_GET['d1'];
@$d2 = $_GET['d2'];
@$luas = 1/2 * $d1 * $d2;
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Rumus Luas Belah Ketupat</title>
     <h3>Mencari Luas Belah Ketupat</h3>
   </head>
   <body>
     <form action="" method="get">
       Diagonal 1 =
       <input type="text" name="d1" value="<?php echo $d1; ?>"/> Cm<br /><br />
       Diagonal 2 =
       <input type="text" name="d2" value="<?php echo $d2; ?>"/> Cm<br />
       <input type="submit" name="submit" value="submit"/><br /><br />

       <?php
        echo "Luas Belah Ketupat = " .$luas." Cm^2";
        ?>
   </body>
 </html>
