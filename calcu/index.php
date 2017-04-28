<!DOCTYPE html>
<head>
         
        <title>Object Oriented Programming di PHP</title>
  <?php require("calcu.php"); ?>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    
 
   <div align="center">
<b>PERHITUNGAN OPERATOR DENGAN OOP</b></div>
 
 
   <table align="center">
<tr>
    <td><input type="text" name="angkasiji" size="10" placeholder=" ..... "></td> 
    <td><input type="text" name="angkakalih" size="10" placeholder=" ..... "></td>
    <td><select name="pipalanda">
     <option>+</option>
     <option>-</option>
     <option>*</option>
     <option>/</option>
    </select></td>
    <td><input type="submit" name="submit" value="Hitung"></td>
     
    </tr>
</table>
</form>
</br>

  <center>
  <?php
   $hasil = new Kalkulator();
   $num1 = @$_POST['angkasiji'];
   $num2 = @$_POST['angkakalih'];
   $opr = @$_POST['pipalanda'];
   if($opr == '+'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->tambah($num1,$num2);
   }
   else if($opr == '-'){
    echo $num1." ".$opr." ".$num2." = "; 
    $hasil->Kurang($num1,$num2);
   }
   else if($opr == '*'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Kali($num1,$num2);
   }
   else if($opr == '/'){
    echo $num1." ".$opr." ".$num2." = ";  
    $hasil->Bagi($num1,$num2);
   }
  ?>
  </center>
</body>
 
</html>