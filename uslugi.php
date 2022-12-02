<style>
    

</style>


<?php


if(isset($_POST['guzik'])){
    
    $nazwa_uslug = $_POST['nazwa_uslug'];
    $id_uslugi = $_POST['usluga'];
    $id_users = $_SESSION['id_users'];
    $email=$_POST['email'];

    include('dbconnect.php');
        
        $zapytanie="INSERT INTO zakup_uslug (id_zakup, id_users, id_uslugi, data, email) values ('','$id_users','$id_uslugi',NOW(),'$email')";
        
        $wys_zap=mysqli_query($dbconnect, $zapytanie);
        
        if(!$wys_zap){
            
        echo 'BŁĄD: Nie udało się dodać rekordu <br />';
        echo 'KOMUNIKAT'.mysqli_connect_error();
            
        }else
        {

            echo 'Udało się zakupić usługę: '.$nazwa_uslug;
        }
          
    
}else{


    
    $sql = "SELECT * FROM uslugi";
    $zapytWypisz = mysqli_query($dbconnect, $sql);

    ?>
    <div class="formularze">
        <form action="" method="post" enctype="multipart/form-data">

        Podaj adres E-mail na który mamy wysłać szczegóły dotyczące usługi<br/>
        <b>EMAIL: </b><input type="text" name="email" required/><br/><br/>

        <label for="usluga">Wybierz usługę:</label>
        <select style="font-size: 18px;" name="usluga">
        <?php
        while($rek=mysqli_fetch_array($zapytWypisz)){

            echo '<option value="'.$rek[0].'">'.$rek[1].'  -  Cena: '.$rek[2].'zł </option>';
            $nazwa=$rek[1];
        }
        ?>
        </select><br/><br/>
        <?php
        echo '<input type="hidden" id="nazwa_uslug" name="nazwa_uslug" value="'.$nazwa.'" />';
        ?>
        <input class="przyciski" type="submit" name="guzik" value="Zakup usługi" />     
    </form>
    </div>
    <?php
}

?>