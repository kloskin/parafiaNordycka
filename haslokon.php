

<?php
include('dbconnect.php');

    

 
    if(isset($_POST['mod2'])){

         $co1=$_POST['numer1'];   
        $haslo1=sha1($_POST['haslo2']);
        $haslo2=sha1($_POST['haslo3']);

            
   if($haslo1==$haslo2){
       
    
       
        
    $zapytanie3="UPDATE users SET haslo='$haslo1' WHERE id_users='$co1'";    
                 
            
    $wyk_zap=mysqli_query($dbconnect, $zapytanie3);

            
    if($wyk_zap){
        echo 'poprawnie zmodyfikowano rekord';
    }else{
        echo 'nie udalo sie zmodyfikować rekordu';
    
    }

        }else{echo 'wpisz takie same hasła';}
    }else{

            echo '<div class="formularze">';
            echo '<form action="" method="POST" >';

                echo '<input type="hidden" name="mod1" value="true"/>';

                  
                        
                     echo '<input type="hidden" name="numer1"  value="'.$_SESSION['id_users'].'"/>';   
            
                        
                     echo 'Hasło: <input type="password" name="haslo2"/><br /><br />';
                    
                    echo 'Potwierdź Hasło: <input type="password" name="haslo3"/><br /><br />';
                        

                    
                echo '<input type="submit" name="mod2" value="Zmien hasło " />';

            echo '</form>';

        }
    
    







?>