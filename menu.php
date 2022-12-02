

<ul>
    <li><a class="active" href="index.php?url=glowna">Strona Główa</a></li>
    <li><a href="index.php?url=bogowie">Poznaj naszych Bogów</a></li>
    <li><a href="index.php?url=ogloszenia">Ogloszenia</a></li>
    <li><a href="index.php?url=jakieUslug">Usługi</a></li>

    <?php 
    
    if(!isset($_SESSION['status'])){
      echo '<li style="float:right"><a href="index.php?url=dodaj">Rejestracja</a>' ;
    }  
    if(!isset($_SESSION['nazwisko'])){      
      echo '<li style="float:right"><a class="logowanie">';

        include('logowanie.php');

      echo '</form></a></li>';
    }
  
   


if(isset($_SESSION['status'])){   
  ?> 



    </div>
    <li><a href="index.php?url=uslugi">Zakup usług</a></li>

    <li class="selectPlace"><a><select class="customSelect" name="forma" onchange="location = this.value;">
          <option >Konto</option>
          <option value="index.php?url=kontoMod">Zmień dane</option>
          <option value="index.php?url=haslokon">Zmień hasło</option>
    </select></a></li>
     
   <?php 
  if($_SESSION['status']=='2'){  
    ?>

    <li class="selectPlace"><a><select class="customSelect" name="forma" onchange="location = this.value;">
          <option >ADMIN</option>
          <option value="index.php?url=usun1">Usuń użytkownika</option>
          <option value="index.php?url=usun2">Usuń wielu</option>
          <option value="index.php?url=mod">Modyfikuj REKORDY</option>
    </select></a></li>


  

    <?php
  }
    else{ } 
}
else{
    
}

if(isset($_SESSION['nazwisko'])){
    
   echo  '<li style="float:right"><a href="index.php?url=wyloguj">Wyloguj</a></li>'; 
    
}else{
    
}
echo '</ul>';
    
?>