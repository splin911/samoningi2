
<?php  

include __DIR__ . '/model.php';

?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>  
            <link rel="stylesheet" href="lib/bootstrap.min.css"/>  
           <link rel="stylesheet" href="lib/jquery-ui.css">  
          <link rel="stylesheet" type="text/css" href="main.css" />
          
          
      </head>  
     
     
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">
               <form method="get" action="index_date.php">
                <h2 align="center">datepicker + jquery</h2>  
                <h3 align="center">2027-07-10</h3><br />  
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" value="<?= isset($_GET['from_date']) ? htmlspecialchars($_GET['from_date']) : date('Y-m-d') ?>" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" value="<?= isset($_GET['to_date']) ? htmlspecialchars($_GET['to_date']) : '' ?>" />  
                </div>  
                <div class="col-md-5">  
                     <input type="submit" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>
               </form>       
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                   
                     <?php
                        $from_date = isset($_GET['from_date']) ? $_GET['from_date'] : null;
                        $to_date = isset($_GET['to_date']) ? $_GET['to_date'] : null;
                            
                        $articles = get_articles($from_date, $to_date);
                     
                     foreach ($articles as $article) {  
                     ?>  
                    
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
                    
                     <?php  
                     }  
                     ?>  
                    
                </div>  
           </div>  
     
     
     <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Employee Details</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">    
                 </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
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








 <script>  
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




 <script>  
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
                     alert("Please Select Date");  
                }  
           });  
      });  
 </script>




