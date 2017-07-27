 <!DOCTYPE html>
 <html>
      <head>
           <title>Webslesson Tutorial | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>
            <link rel="stylesheet" href="lib/bootstrap.min.css"/>
           <link rel="stylesheet" href="lib/jquery-ui.css">
          <link rel="stylesheet" type="text/css" href="main.css" />


      </head>


      <body>
    
           <div class="container" style="width:900px;">
               <div class="row">
               <form method="get" action="index_date.php">
                <h2 align="center">datepicker + jquery</h2>
                   
 <!--                         Miesto ir tipo filtru pradzia                                -->
                  <div class="col-md-3" id="table-container">  
<!--                      ar teisingai padaviau value? narsykles adreso lauke  duomenys atsispindi-->
                    <select class="btn-default dropdown-toggle dropdown" name="value" id="tipas"> 
                        <option value=""></option>
                        <option value="Meditacijos praktika, meditacija">Meditacijos praktika, meditacija</option>
                        <option value="Paskaita">Paskaita</option>
                        <option value="Stovykla, festivalis, retritas">Stovykla, festivalis, retritas</option>
                        <option value="Mokymai">Mokymai</option>
                        <option value="Kita">Kita</option>
                    </select>
                     
                    <select class="btn-default dropdown-toggle dropdown" name="value" id="miestai">
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
                      <input type="submit" name="filter" id="" value="Filter Tipas " class="btn btn-info" />
                      <input type="submit" name="filter" id="" value="Filter Miestas " class="btn btn-info" />
                      </div>
<!--     Miesto ir tipo filtru pabaiga                           -->
                   
                <div class="col-md-3">
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" value="<?= isset($_GET['from_date']) ? htmlspecialchars($_GET['from_date']) : date('Y-m-d') ?>" />
                </div>
                   
                <div class="col-md-3">
                    
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" value="<?= isset($_GET['to_date']) ? htmlspecialchars($_GET['to_date']) : '' ?>" />
                </div>
                   <div class"col-md-3">
                       
                   </div>
                   
                <div class="col-md-5">
                     <input type="submit" name="filter" id="filter" value="Filter" class="btn btn-info" />
                </div>
               </form>
                <div style="clear:both"></div>
                <br />
                <div id="order_table">

                     <?php foreach ($articles as $article) { ?>

                        <div class="col-md-4 modalinisisore view_data"  name="view" id="<?php echo $article["id"]; ?>" >

                        <h3><?php echo $article['tipas'] ?></h3>

                        <h2><?php echo $article['pavadinimas'] ?></h2>
                            <hr>
                        <h4><i class="fa fa-compass" aria-hidden="true"></i>
                        <?php echo $article['miestas'] ?></h4>
                          </a>
                            <hr>
                        <h5><i class="fa fa-calendar-o" aria-hidden="true"></i>
                        <?php echo $article['data_'] ?></h5>

                        </div>

                     <? } ?>

                </div>
           </div>


     <div id="dataModal" class="modal fade">
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Skelbimo detalės</h4>
                </div>
                <div class="modal-body" id="employee_detail">
                 </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
      </div>
 </div>
</div>


     <script src="lib/font-awesome.css"></script>
       <script src="lib/jquery-3.2.1.min.js"></script>
       <script src="lib/bootstrap.min.js"></script>
      <script src="lib/jquery-ui.js"></script>

      </body>
 </html>








 <script> ///----------------------------------------skirtas modal veikimui
 $(document).ready(function(){
      $('.view_data').click(function(){
           var employee_id = $(this).attr("id");
           $.ajax({
                url:"modal_fetch.php",
                method:"post",
                data:{employee_id:employee_id},
                success:function(data){
                     $('#employee_detail').html(data);
                     $('#dataModal').modal("show");
                }
           });
      });
 });
 </script>




 <script> ///---------------------------------------- skirtas datepicker iskviesti
      $(document).ready(function(){
           $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd'
           });
           $(function(){
                $("#from_date").datepicker();
                $("#to_date").datepicker();
           });
           $('#filter').click(function(){
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                if(from_date != '' && to_date != '')
                {
                     $.ajax({
                          url:"date_filter.php",
                          method:"POST",
                          data:{from_date:from_date, to_date:to_date},
                          success:function(data)
                          {
                               $('#order_table').html(data);

                          }
                     });
                }
                else
                {
                     alert("Pasirinkite datą");
                }
           });
      });
 </script>




<script>  //// ---------------------------------------- ajax skirtas tipui
    $(document).ready(function()
                     {
        $("#fetchval").on('change',function()
                         {
            var keyword = $(this).val();
            $.ajax(
            {
                url:'date_filter.php',
                type:'POST',
                data:'request='+keyword,
                
                beforeSend:function()
                {
                    $("#table-container").html('Working...');
                    
                },
                success:function(data)
                {
                    $("#table-container").html(data);
                },
            });
        });
    });
    
</script>
