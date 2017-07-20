<?php

   define('HOST', 'localhost');
      define('DB_USERNAME', 'ppdizain');
      define('DB_PASSWORD', 'ppDIZAIN123keule');
      define('DB_NAME', 'samoningai');

      function connect_DB () {
        $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
//        if ( $connection) {
//          echo "Prisijungti pavyko <br />";
//        } else {
//          echo "NEPAVYKO prisijungti!!! " . mysqli_connect_error()  . " <br />";
//        }
        return $connection;
      }
  $con = connect_DB();

      // connect_DB();

    ////----------------------------------------------f-jia trina senus skelbimus
function trintiSenusSkelbimus(){
        $dabartineData = date("Y-m-d");
        $sql = "DELETE FROM skelbimai
                WHERE data_ < '$dabartineData'";
        $con = connect_DB();
        $status = mysqli_query($con, $sql);
    }
 trintiSenusSkelbimus();
    ////----------------------------------------------f-jia trina senus skelbimus

?>

<script src="lib/jquery-3.2.1.min.js">
</script>
<script>
    $(document).ready(function() {
        $("#miestai").on('change', function() /// ------------------------rusiuojame miesta
            {
                var keyword = $(this).val();
                $.ajax({
                    url: 'miestoPaieska.php',
                    type: 'POST',
                    data: 'request=' + keyword,

                    beforeSend: function() {
                        $("#table-container").html('Working...');

                    },
                    success: function(data) {
                        $("#table-container").html(data);
                    },
                });
            });

        $("#tipas").on('change', function() /// ------------------------rusiuojame tipa
            {
                var keyword = $(this).val();
                $.ajax({
                    url: 'tipoPaieska.php',
                    type: 'POST',
                    data: 'request=' + keyword,

                    beforeSend: function() {
                        $("#table-container").html('Working...');

                    },
                    success: function(data) {
                        $("#table-container").html(data);
                    },
                });
            });

    });

</script>

<div id="table-container">
<div class="container-fluid">
    <div class="row">
    <?php
  $query="SELECT * FROM skelbimai WHERE
  (tinkamas_rodyti='tinkamas') OR (unikalusID='skelbejas') OR (unikalusID='skelbejas2')"; 
  $output=mysqli_query($con,$query);
  ?>
    <?php
 $uniqueid = 1;
  while($row = mysqli_fetch_assoc($output))
        {
           ?> 
  
<div class="col-lg-3"> 

<a><div class="modalinisisore easy-modal-open"   href=".modal1<?php echo $uniqueid; ?>"></a> 
<h3><?php echo $row['tipas'] ?></h3>  
<h2><?php echo $row['pavadinimas'] ?></h2> 
    <hr>
<h4><i class="fa fa-compass" aria-hidden="true"></i>
<?php echo $row['miestas'] ?></h4>
    <hr>
<h5><i class="fa fa-calendar-o" aria-hidden="true"></i>
<?php echo $row['data_'] ?></h5>       
 </div>
    
<div class="modalinisvidus easy-modal modal1<?php echo $uniqueid; ?>">
<div class="row">
    <div class="col-md-6 modalcolor">
        <h3>Renginio pradžios data</h3>
        <h4><i class="fa fa-calendar-o" aria-hidden="true"></i>
            <?php echo $row['data_']?>
        </h4>
    </div>
    <div class="col-md-6 modalcolor2">
        <h3>Registracija</h3>
        <h4><i class="fa fa-address-card-o" aria-hidden="true"></i>
            <?php echo $row['registracija'] ?>
        </h4>
    </div>
    <hr>
</div>
<!----------------------------------------------tipas ir vieta-->
<div class="row modalinisvidus2">
    <div class="col-md-6">
        <h6><i class="fa fa-flag-o" aria-hidden="true"></i>
            <?php echo $row['tipas'] ?>
        </h6>
    </div>
    <div class="col-md-6">
        <h6><i class="fa fa-map-o" aria-hidden="true"></i>

            <?php echo $row['miestas'] ?>
        </h6>
    </div>
</div>
    <!----------------------------------fb ir mail-->
<div class="row modalinisvidus3">
    <div class="col-md-6">
        <h5>Nuoroda</h5>
        <h6><a id="nuoroda" href="<?php echo $row['nuoroda'] ?>">
            <?php echo $row['nuoroda'] ?></a>
        </h6>
    </div>
    <div class="col-md-6">
        <h5>el paštas</h5>
        <h6>
            <?php echo $row['email'] ?>
        </h6>
        <button id="modalouzdarytojas" class="close"><i class="fa fa-times" aria-hidden="true"></i></button>
    </div>
</div> 
<!--    -----------------------------------------info-->
    <div class="row">
         <div class="col-md-12"><p>aprasymas<?php echo $row['aprasymas'] ?></p></div>
        </div>
<!--    div modal end-->

    
    
    

</div>
</div>    
    
        
        <?php
               $uniqueid = $uniqueid +1;
               
  };


 ?>
</div>
</div>
</div>





