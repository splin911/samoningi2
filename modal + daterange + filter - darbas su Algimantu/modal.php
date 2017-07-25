<?php  
 $connect = mysqli_connect("localhost", "root", "root", "samoningai");  
 $query = "SELECT * FROM skelbimai ORDER BY data_ asc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="main.css" />
      </head>  
      <body>  
           <br /><br />  
           <div class="container"> 
               <div class="row">
               
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
