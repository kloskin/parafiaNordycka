<html>

<?php
$sql = "SELECT * FROM uslugi";
    $zapytWypisz = mysqli_query($dbconnect, $sql);

    ?>
    
        <h1 style="text-align: center; border-bottom: solid 3px black;">Usługi jakie posiada nasza cudowna parafia</h1><br/>
        <p style="text-align: center;">
        <select style="font-size: 20px;" name="usluga">
        <?php
        while($rek=mysqli_fetch_array($zapytWypisz)){

            echo '<option value="'.$rek[0].'">'.$rek[1].'  -  Cena: '.$rek[2].'zł </option>';
        }
        ?>
        </select><br/><br/></p>


        <p style="text-align:center; font-size:18px;">Żeby wykupić którąś usługę trzeba najpierw stworzyć konto (prawy górny róg "Rejestracja")</p>

    

    


</html>