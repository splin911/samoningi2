

<?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "root", "samoningai");  
      $query = "SELECT * FROM skelbimai WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
              
          
         
               
               <div class=container-fluid>
 <div class="row">
<div class="modalinisvidus">

    <div class="col-md-6 modalcolor">
         
        <h3>Renginio pradžios data</h3>
        <h4><i class="fa fa-calendar-o" aria-hidden="true"></i>
            '.$row['data_'].'
        </h4>
    </div>
    <div class="col-md-6 modalcolor2">
        <h3>Registracija</h3>
        <h4><i class="fa fa-address-card-o" aria-hidden="true"></i>
            '.$row['registracija'].'
            
           
        </h4>
    </div>
    <hr>
</div>
<!----------------------------------------------tipas ir vieta-->
<div class="row modalinisvidus2">
    <div class="col-md-6">
        <h6><i class="fa fa-flag-o" aria-hidden="true"></i>
           '.$row['tipas'].'
        </h6>
    </div>
    <div class="col-md-6">
        <h6><i class="fa fa-map-o" aria-hidden="true"></i>

           '.$row['miestas'].'
        </h6>
    </div>
</div>
    <!----------------------------------fb ir mail-->
<div class="row modalinisvidus3">
    <div class="col-md-6">
        <h5>Nuoroda</h5>
        <h6>
            '.$row['nuoroda'].'
        </h6>
    </div>
    <div class="col-md-6">
        <h5>el paštas</h5>
        <h6>
            '.$row['email'].'
        </h6>
        
    </div>
</div> 
<!--    -----------------------------------------info-->
    <div class="row">
         <div class="col-md-12"><p>aprasymas '.$row['aprasymas'].' </p></div>
        </div>
<!--    div modal end-->

    
    
    

</div>
          
              </div>
            
                 <br><br>  <br><br>
            
               
                ';  
      }  
     
      echo $output;  
 }  
 ?>


