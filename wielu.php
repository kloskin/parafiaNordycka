<?php


include('dbconnect.php');


if(isset($_POST['guzik'])){
    
    $tablica=[$_POST['usun']];
    
    foreach($tablica as $nr => $rek){
        
        for($i=0;$i<count($rek);$i++){
            
            $zapytanie="DELETE FROM users WHERE id_users='$rek[$i]'";
            $wys_zap=mysqli_query($dbconnect, $zapytanie);
            echo 'usunieto rekord nr. :'.$rek[$i].'<br />';
            
        }
              
    }
}else
{
    echo '<div class="formularze">';
    echo '<form action="" method="POST">';
    
    $zapytanie="SELECT * FROM users";
    
    $wys_zap=mysqli_query($dbconnect, $zapytanie);
    
    while($rekord=mysqli_fetch_array($wys_zap)){
        
        echo '<input type="checkbox" name="usun[]" value="'.$rekord[0].'" /> '.$rekord[1].' '.$rekord[2].'<br /><br />';
        
    }  
      
    echo '<br />
        <input type="submit" name="guzik" value="Usuń rekord"/>';
    
    echo '</form>';
    echo '</div>';
}




?>