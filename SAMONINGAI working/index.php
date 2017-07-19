<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>samoningai</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="pagePiling.js plugin by Alvaro Trigo." />
    <meta name="keywords" content="pile,piling,piling.js,stack,pages,scrolling,stacking,touch,fullpile,scroll,plugin,jquery" />
    <meta name="Resource-type" content="Document" />


    <link rel="stylesheet" type="text/css" href="lib/jquery.pagepiling.css" />
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="main.css" />


</head>

<body>
  
    <ul id="menu">
        <li data-menuanchor="page1" class="active"><a href="#page1">sąmoningai</a></li>
        <li data-menuanchor="page2"><a href="#page2">dalintis</a></li>
        <li data-menuanchor="page3"><a href="#page3">renginiai</a></li>
    </ul>

     
    <div id="pagepiling">
    
         <?php
     include_once ("footer.php")
        ?>
        
        <?php
     include_once ("home.php")
        ?>
        
         
       
         <?php
     include_once ("dalintis.php")
        ?>

        <?php
     include_once ("search.php")
        ?>
        
       
    </div>

    <script src="lib/jquery-3.2.1.min.js"></script>
    <script src="lib/tilt.jquery.js"></script>
    <script src="lib/valida.2.1.7.js"></script>
    <script src="lib/jquery.interactive_bg.js"></script>
    <script type="text/javascript" src="lib/jquery.pagepiling.js"></script>
<!--    <script type="text/javascript" src="lib/jquery-color-master/jquery.color.js"></script>-->
    <script type="text/javascript" src="main.js"></script>

</body>

</html>
