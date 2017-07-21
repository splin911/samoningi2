
<?php  
 $connect = mysqli_connect("localhost", "root", "root", "samoningai");  
 $query = "SELECT * FROM skelbimai ORDER BY data_ asc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Ajax PHP MySQL Date Range Search using jQuery DatePicker</title>  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">  
          <link rel="stylesheet" type="text/css" href="main.css" />
          
          
      </head>  
     
     
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">datepicker + jquery</h2>  
                <h3 align="center">2027-07-10</h3><br />  
                <div class="col-md-3">  
                     <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
                </div>  
                <div class="col-md-3">  
                     <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
                </div>  
                <div class="col-md-5">  
                     <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
                </div>  
                <div style="clear:both"></div>                 
                <br />  
                <div id="order_table">  
                   
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                    
<div class="col-md-4 modalinisisore view_data"  name="view" id="<?php echo $row["id"]; ?>" >

<h3><?php echo $row['tipas'] ?></h3> 

<h2><?php echo $row['pavadinimas'] ?></h2> 
    <hr>
<h4><i class="fa fa-compass" aria-hidden="true"></i>
<?php echo $row['miestas'] ?></h4>
  </a>   
    <hr>       
<h5><i class="fa fa-calendar-o" aria-hidden="true"></i>
<?php echo $row['data_'] ?></h5>

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
     
     
     
     
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>     
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
          
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




