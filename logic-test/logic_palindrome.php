//Use a form to collect a word or number
<form method="post">  
Enter a Word: <input type="text" name="input"><br><br>  
<input type="submit" name="submit" value="Submit">  
</form> 
<?php
// 
if($_POST)  {
    $input=$_POST['input']; 
    function Palindrome($input){ 
        if (strrev($input) == $input){ 
            return 1; 
        }
        else{
            return 0;
        }
    } 
     

    $word = $input;
    if(Palindrome($word)){ 
        echo "Palindrome"; 
    }
    else { 
    echo "Not a Palindrome"; 
    }
}
