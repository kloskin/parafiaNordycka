<style>
  input[type=submit]{

    background-color: #333;
    border: none;
    color: white;
    text-decoration: none;
    cursor: pointer;
    float:right;
    padding: 15px 17px;
    margin-top: -14px;
    font-size: 15px;
    font-family: Arial;
}
input[type=submit]:hover{
    background-color: #111;


}


</style>


<?php
include('dbconnect.php');

if(isset($_SESSION['nazwisko'])){
    
    
    //echo 'jestes zalogowany jako '.$_SESSION['imie'].' '.$_SESSION['nazwisko'];
    
}
else{
        if(isset($_POST['zaloguj'])){

                $login=$_POST['login'];
                $haslo1=sha1($_POST['haslo1']);

                              include('dbconnect.php');


                $zapytanie="SELECT * FROM users WHERE login='$login' AND haslo='$haslo1'";
            
                $wyk_zap=mysqli_query($dbconnect, $zapytanie);
                
                $wiersz=mysqli_fetch_array($wyk_zap);
            
                    if($wiersz){
                        
                        session_start();
                        $_SESSION['id_users']=$wiersz[0];
                        
                        $_SESSION['nazwisko']=$wiersz[2];
                        $_SESSION['imie']=$wiersz[1];
                        $_SESSION['id_users']=$wiersz[0];
                        $_SESSION['login']=$wiersz[3];
                        $_SESSION['haslo']=$wiersz[4];
                        $_SESSION['email']=$wiersz[5];
                        
                        $_SESSION['status']=$wiersz[8];
                        
                        mysqli_close($dbconnect);
                        
                        header('Location: index.php?url=glowna');
                        
                        exit;
                        
                        
                        
                    }else{
                        
                        echo '<li style="float:right"><a href="index.php?url=glowna">Spróbuj ponownie</a>';

                        echo '<li style="float:right"><a class="logowanie">Dane sie nie zgadzają</li>';
                    }
            
            
            
            
        }else{

            
            echo '
            <li style="float:right; margin-right:-47px">
                <form action="" method="post">';

                echo '<input type="text" name="login"  placeholder="login"/>
                <input type="password" name="haslo1" placeholder="hasło"/>

                <input type="submit" name="zaloguj" value="Zaloguj" id="submit"/></input>';

            echo '</form></li>';


        }
}
?>