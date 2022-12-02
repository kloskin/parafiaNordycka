<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="opis.css" />
    <meta charset="UTF-8">
    <title>Wzór</title>
</head>
<body>

      
   <div id="naglowek">  
    <?php
    echo '<p id="nagl1">Parafia Nordycka w Midgardzie</p>';
    if($_REQUEST['url']!='glowna'){
        ?>
        <style>
                #naglowek {
                height: 200px;
                }
                #nagl1
                {
                padding-top: 8%;
                }
                @media only screen and (max-width:1600px) and (max-height:900px){
                    #nagl1{
                    padding-top: 10%;
                    }
                }
        </style>
        <?php
    }
    ?>
       
   </div>

    <ul>
        <?php
                require_once('db-utilis.php');
                require_once('menu.php');
        ?>
    </ul>


      <div id="ramka">
        <div id="kol1" class="kolumny" >

                <div id="kol1Text">
                        <h2 id="nagKol1">Ofiara dla parafii<br/></h2>
                    <?php
                            require_once('kolumna.php');
                            ?>
                    </div>


                <div id="kol1Text">
                    <h2 id="nagKol1">Msze<br/></h2>
                    <h3>Msze Święte</h3>
                    <p>8:00, 10:00, 11:30, 18:00 <br/>
                    (w ciągu roku oprócz Wielkiego Postu)
                    </p><br/>

                    <h3>W DNI POWSZEDNIE</h3>
                    <p>8:00, 18:00</p>
                </div>

                <div id="kol1Text">
                <h2 id="nagKol1">Rozgrzeszenia<br/></h2>
                    <h3>W I PIĄTEK MIESIĄCA</h3>
                    <p>16:00 - 18:00</p><br/>

                    <h3>WYKUPIONE Z NASZEGO SKLEPU USŁUG</h3>
                    <p>Czas wybieramy indywidualnie z każdą osobom</p>

                </div>

                <div id="kol1Text">
                <h2 id="nagKol1">Adres parafii<br/></h2>
                    <h3>Parafia Nordycka w Midgardzie</h3>
                    <p>ul. Odynowa 15</p><br/>
                    <p>61-536 Midgard</p>

                </div>

                
        </div>
       

       <div class="kolumny" id="kol2">
        <?php   
           
           if(!isset($_REQUEST['url'])){
               $url='glowna';
           } else {
               $url=$_REQUEST['url'];
           }
           
           if($url=='glowna'){
                   include('glowna.php');
           } 
            elseif($url=='szuk'){
                include('szukaj.php');   
            }
            elseif($url=='zaloguj'){
                include('logowanie.php');   
            }
            elseif($url=='dodaj'){
                include('dodaj.php');   
            }
            elseif($url=='bogowie'){
                include('bogowie.php');   
            }
            elseif($url=='ogloszenia'){
                include('ogloszenia.php');   
            } 
            elseif($url=='jakieUslug'){
                include('jakieUslug.php');   
            } 

            if(isset($_SESSION['status']))
            {
                if($_SESSION['status']=='2'){
                    if($url=='usun1'){
                        include('usun.php');   
                    }
                    elseif($url=='usun2'){
                        include('wielu.php');   
                    }
                    elseif($url=='mod'){
                        include('mod.php');   
                    }

                }
             

                if($url=='wyloguj'){
                    include('wyloguj.php');   
                }
                elseif($url=='haslokon'){
                    include('haslokon.php');   
                }
                elseif($url=='kontoMod'){
                    include('kontoMod.php');   
                }elseif($url=='uslugi'){
                    include('uslugi.php');              
                }

            }else{
                exit;
            }
            
                
             
        
           ?>
       </div>
   </div>
   <div id="stopka">
            <div id="wrapper">
                <div id="c1"><img src="obrazki/loc1.png " width="60" height="60" style="padding-bottom: 20px;"><br/><h3>Parafia Nordycka w Midgardzie</h3>
                    <p>ul. Odynowa 15</p><br/>
                    <p>61-536 Midgard</p></div>
                <div id="c2"><img src="obrazki/email1.png " width="60" height="60" style="padding-bottom: 20px;"><br/><h3>midgard@9worlds.com</div>
                <div id="c3"><img src="obrazki/call1.png " width="60" height="60" style="padding-bottom: 20px;"><br/>691 927 622</div>
            </div>  
            <div id="stopDol">
                <p>Kloska i Kaczmarek &copy; 2022</p>
            </div>
       
   </div>
    
</body>
</html>