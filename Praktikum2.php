<?php
@$s = $_GET['s'];
@$keliling = 4 * $s;
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Rumus Keliling Belah Ketupat</title>
     <h3>Mencari Keliling Belah Ketupat</h3>
   </head>
   <body>
     <form action="" method="get">
       Sisi =
       <input type="text" name="s" value="<?php echo $s; ?>"/> Cm<br /><br />
       <input type="submit" name="submit" value="submit"/><br /><br />

       <?php
        echo "Keliling Belah Ketupat = ".$keliling." Cm";
        ?>
   </body>
 </html>
