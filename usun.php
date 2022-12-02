<?php


include('dbconnect.php');

if(isset($_POST['guzik'])){
    
    $zapytanie="DELETE FROM users WHERE id_users='$kto'";
    
    $wys_zap=mysqli_query($dbconnect,$zapytanie);
    
    if($wys_zap){
        echo ' poprawnie usunieto rekord '.$kto;
    }else{echo 'nie udalo sie usunac rekordu';}
    
    
}else{
    
    echo '<div class="formularze">';
    echo '<form action="" method="post">';
        
    $zapytanie="SELECT * FROM users";
    
    $wys_zap=mysqli_query($dbconnect, $zapytanie);
    
    while($rekord=mysqli_fetch_array($wys_zap)){
        
        echo '<input type="radio" name="radio1" value="'.$rekord[0].'"/>'.$rekord[1].' '.$rekord[2].'<br /><br />';
        
    }
    
    
       echo '<br /> <input type="submit" name="guzik" value="Usun rekord" />
       </form>'; 
    echo '</div>';
    
    
    
}

?>