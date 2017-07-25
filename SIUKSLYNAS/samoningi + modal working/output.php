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
    <?php
  
  $query="SELECT * FROM skelbimai"; 
  $output=mysqli_query($con,$query);//     WHERE miestas='Kaunas'

  ?>
    
    <?php

 $uniqueid = 1;
  while($row = mysqli_fetch_assoc($output))
        {
           ?> 

<h1 class="easy-modal-open" href=".modal1<?php echo $uniqueid; ?>"><?php echo $row['pavadinimas'] ?></h1>
<h1 class="easy-modal  easy-modal-close modal1<?php echo $uniqueid; ?>"><?php echo $row['data_'] . $row['pavadinimas'] ?></h1>
            
    
        
        <?php
               $uniqueid = $uniqueid +1;
               
  };


 ?>

</div>





