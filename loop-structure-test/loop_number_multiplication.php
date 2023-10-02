<form method="post">  
Enter a Number: <input type="number" name="input"><br><br>  
<input type="submit" name="submit" value="Submit">  
</form>  
<?php  
if($_POST)  
{  
    $input=$_POST['input'];  
   for ($i = 1; $i <= 10; $i++) {
            $result = $input * $i;
            echo "$input x $i = $result\n";
        }
   }   
?>  