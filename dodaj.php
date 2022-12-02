<?php


if(isset($_POST['guzik'])){
    
    $imie=$_POST['imie'];
    $nazwisko=$_POST['nazwisko'];
    $login=$_POST['login'];
    $haslo1=sha1($_POST['haslo1']);
    $haslo2=sha1($_POST['haslo2']);
    $email=$_POST['email'];
    
    include('dbconnect.php');


    if($haslo1==$haslo2){
        
        $zapytanie="INSERT INTO users (id_users, imie, nazwisko, login, haslo, email, data_d) values ('','$imie','$nazwisko','$login','$haslo1','$email','NOW()')";
        
        $wys_zap=mysqli_query($dbconnect, $zapytanie);
        
        if(!$wys_zap){
            
        echo 'BŁĄD: Nie udało się dodać rekordu <br />';
        echo 'KOMUNIKAT'.mysqli_connect_error();
            
        }else
        {
            echo 'poprawnie dodano rekord'; 
        }     
        
    }else{
        echo "sprawdź hasła";
    }
 
    
}else{
    ?>
        <form action="" method="post" enctype="multipart/form-data">
        
            IMIE: <input type="text" name="imie" required/><br/><br/>
            NAZWISKO:<input type="text" name="nazwisko" required/><br/><br/>
            LOGIN: <input type="text" name="login" required/><br/><br/>
            HASŁO: <input type="password" name="haslo1" required/><br/><br/>
            POTWIERDŹ HASŁO: <input type="password" name="haslo2" required/><br/><br/>
            EMAIL: <input type="email" name="email" required/><br/><br/>
            
        <input type="submit" name="guzik" value="Dodaj rekord" />
        
        
       </form>
    
    
    
    <?php
}

?>