<?php
 include('dbconnect.php');

    

 
        if(isset($_POST['mod2'])){

            
        $co1=$_POST['numer1'];
        $imie=$_POST['imie'];
        $nazwisko=$_POST['nazwisko'];
        $login=$_POST['login'];
        $email=$_POST['email'];
            
        
    $zapytanie3="UPDATE users SET imie='$imie', nazwisko='$nazwisko', login='$login', email='$email' WHERE id_users='$co1'";    
                 
            
    $wyk_zap=mysqli_query($dbconnect, $zapytanie3);

            
    if($wyk_zap){
        echo 'poprawnie zmodyfikowano rekord';
    }else{
        echo 'nie udalo sie zmodyfikować rekordu';
    
    }

        }else{

            echo '<div class="formularze">';
            echo '<form action="" method="POST" >';

        
                echo '<input type="hidden" name="mod1" value="true"/>';
                 
                     echo '<input type="hidden" name="numer1"  value="'.$_SESSION['id_users'].'"/>';   
                        
                     echo 'Imię: <input type="text" name="imie" value="'.$_SESSION['imie'].'"/><br /><br />';
                        
                     echo 'Nazwisko: <input type="text" name="nazwisko" value="'.$_SESSION['nazwisko'].'"/><br /><br />';
                        
                     echo 'Login: <input type="text" name="login" value="'.$_SESSION['login'].'"/><br /><br />'; 
                    
            
                    echo 'Email: <input type="email" name="email" value="'.$_SESSION['email'].'" ><br /><br />';                 
                    
                echo '<input type="submit" name="mod2" value="Zmien dane " />';

            echo '</form>';
            echo '</div>';
        }
    
    





?>