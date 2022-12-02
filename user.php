<?php
if(isset($_SESSION['nazwisko'])){
  echo 'Jesteś na koncie '.$_SESSION['imie'].' '.$_SESSION['nazwisko'];  
}else{echo 'jestes nie zalogowany';}

?>