<form method="post">  
Enter a Number: <input type="number" name="input"><br><br>  
<input type="submit" name="submit" value="Submit">  
</form> 
<?php
if($_POST)  
{  
    $input=$_POST['input']; 
    $year = $input;
    if ($year % 400 == 0) {
       echo $year." is a leap year.";
    } elseif ($year % 100 == 0) {
       echo $year." is not a leap year.";
    } elseif ($year % 4 == 0) {
       echo $year." is a leap year.";
    } else {
       echo $year." is not a leap year.";
    }
}

?>