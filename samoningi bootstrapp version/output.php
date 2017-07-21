<div class="container-fluid">
    <div class="row">
<div class="col-md-8"> 

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
    
<div class="modalinisvidus">
<div class="row">
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