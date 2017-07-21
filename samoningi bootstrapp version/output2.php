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
  $query="SELECT * FROM skelbimai WHERE
  (tinkamas_rodyti='tinkamas') OR (unikalusID='skelbejas') OR (unikalusID='skelbejas2')"; 
  $output=mysqli_query($con,$query);
  ?>
    <?php
 $uniqueid = 1;
  while($row = mysqli_fetch_assoc($output))
        {
           ?> 
  
<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=".myModal<?php echo $uniqueid; ?>">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" class="myModal<?php echo $uniqueid; ?>" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
    



</div>
</div>    
    
        
        <?php
               $uniqueid = $uniqueid +1;
               
  };


 ?>
</div>







