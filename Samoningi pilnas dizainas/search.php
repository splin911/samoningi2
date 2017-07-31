<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>samoningi</title>

    <link rel="stylesheet" type="text/css" href="lib/jquery.pagepiling.css" />
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css" />

 <?php
     include_once ("menu.php")
        ?>

<body id="background3">



<div>
    <h1 class="invisible" id="date2"></h1><br><br><br><br>
    <div class="container-fluid">


       
        <div class="row">
            <div class="col-md-6 riba table-responsive">

                <select class="btnforma btn-default dropdown-toggle dropdown" id="miestai" name="fetchby">
<!--paimti is duombazes skirtingus komanda is:: select un-->
   <option value=""></option>
    <option value="Vilnius">Vilnius</option>
    <option value="Kaunas">Kaunas</option>
    <option value="Klaipėda">Klaipėda</option>
    <option value="Šiauliai">Šiauliai</option>
    <option value="Panevėžys">Panevėžys</option>
    <option value="Alytus">Alytus</option>
    <option value="Marijampolė">Marijampolė</option>
    <option value="Utena">Utena</option>
    <option value="Telšiai">Telšiai</option>
                        
    <option value="Vilniaus apskr.">Vilniaus apskritis</option>
    <option value="Kauno apskr.">Kauno apskritis</option>
    <option value="Klaipėdos apskr.">Klaipėdos apskritis</option>
    <option value="Šiaulių apskr.">Šiaulių apskritis</option>
    <option value="Panevežio apskr.">Panevežio apskritis</option>
    <option value="Alytaus apskr.">Alytaus apskritis</option>
    <option value="Marijampolės apskr.">Marijampolės apskritis</option>
    <option value="Tauragės apskr.">Tauragės apskritis</option>
    <option value="Utenos apskr.">Utenos apskritis</option>
    <option value="Telšių apskr.">Telšių apskritis</option>
</select>

                <select class="btnforma btn-default dropdown-toggle dropdown" id="tipas" name="fetchby2" placeholder="hey">
    
    
    <option value=""></option>
    <option value="Meditacijos praktika, meditacija">Meditacijos praktika, meditacija</option>
    <option value="Paskaita">Paskaita</option>
    <option value="Stovykla, festivalis, retritas">Stovykla, festivalis, retritas</option>
    <option value="Mokymai">Mokymai</option>
    <option value="Kita">Kita</option>
</select>

            </div>
        </div>


        <br>

        <div class="col-md-10 col-md-offset-1">
            <div class="searchdiv">

                
        <?php
     include_once ("output.php")
        ?>

            </div>
        </div>
    </div>
</div>
 <?php
     include_once ("footer.php")
        ?>
    <script>document.body.className += ' fade-out';</script>
    <script src="https://use.fontawesome.com/111b848bf1.js"></script>
    <script src="lib/jquery-3.2.1.min.js"></script>
    <script src="lib/tilt.jquery.js"></script>
    <script src="lib/valida.2.1.7.js"></script>
    <script src="lib/jquery.interactive_bg.js"></script>
        <script src="menu.js"></script>
    <script src="lib/jquery.easyModal.js"></script>
    <script type="text/javascript" src="main.js"></script>
   

</body>