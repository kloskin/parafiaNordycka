<?php
       include('dbconnect.php');




if(isset($_POST['mod1'])){
    
    
    
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

            $co=$_POST['nr'];
            
            $zapytanie1="SELECT * FROM users WHERE id_users='$co'";
            $wyk_zap=mysqli_query($dbconnect, $zapytanie1);
            
            
 #tu robimy zeby wyswietlał sie formularz po formularzu
                echo '<input type="hidden" name="mod1" value="true"/>';

                    while($rek1=mysqli_fetch_array($wyk_zap)){
                        
                     echo '<input type="hidden" name="numer1" value="'.$rek1[0].'" />';   
            
                        
                     echo 'Imię: <input type="text" name="imie" value="'.$rek1[1].'"/><br /><br />';
                        
                     echo 'Nazwisko: <input type="text" name="nazwisko" value="'.$rek1[2].'"/><br /><br />';
                        
                     echo 'Login: <input type="text" name="login" value="'.$rek1[3].'"/><br /><br />'; 
                    
                    
                    echo 'Email: <input type="email" name="email" value="'.$rek1[5].'"/><br /><br />'; 
                    
                    }
            
                echo '<input type="submit" name="mod2" value="Zmien dane " />';

            echo '</form>';
            echo '</div>';
        }
    
    
}else{
 
    echo '<div class="formularze">';
    echo '<form action="" method="POST" >';
    
    $zapytanie="SELECT * FROM users";
    $wys_zap=mysqli_query($dbconnect, $zapytanie);
    
    while($rek=mysqli_fetch_array($wys_zap)){
        
        echo '<input type="radio" name="nr" value="'.$rek[0].'"/>'.$rek[1].' '.$rek[2].'<br />';
        
        
    }
    
        echo '<br /><input type="submit" name="mod1" value="Modyfikuj" />';

    echo '</form>';
    echo '</div>';
}




?>