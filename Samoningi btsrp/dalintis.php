<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>samoningi</title>
    
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="lib/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="main.css" />

 <?php
     include_once ("menu.php")
        ?>
    
     <?php
     include_once ("footer.php")
        ?>
         
         

<body id="background2">

    <div >
        <div class="container-fluid" id="dalintiscont" >
            <div class="row"><br><br><br><br><br>

                <!------------------------------------------FORMA 1---------------------------------------->
                <div class="col-md-3 col-md-offset-0 formosmedijos">
                    <form method="get" action="insert.php" id="registration-form" >
                        <label for="field1">Pavadinimas</label>
                        <div class="form-group">
                            <input type="text" name="pavadinimas" required="true" oninvalid="this.setCustomValidity('Įveskite renginio pavadinimą')" oninput="setCustomValidity('')" id="field-1" data-validation="required" maxlength="45" min="5"  class="form-control langeliai" data-validation-error-msg="įveskite renginio pavadinimą"  />
                        </div>

                        <label for="field12">Renginio pradžios data</label>
                        <div class="form-group">
                            <input type="text" name="data_" id="field12" required="true" maxlength="10" data-validation="birthdate" 
		 data-validation-help="yyyy-mm-dd" class="form-control langeliai"  data-validation-error-msg="Netinkamas datos formatas. Pvz 2018-12-30" />
                        </div>

                        <label for="field13">Organizatorių email</label>
                        <div class="form-group">
                            
                            <input type="text" name="email" id="field13" required="true" oninvalid="this.setCustomValidity('Įveskite galiojantį email adresą')" oninput="setCustomValidity('')" maxlength="35"  data-validation="email" class="form-control langeliai" data-validation-error-msg="neteisingas el paštas" />
                        </div>

                        <label id="field14marg" for="field14">UnikalusID <span id="nebutinas"> nebūtinas</span></label>
                        <div class="form-group">
                            <input type="text" name="unikalusid" id="field14" maxlength="35" min="5" class="form-control langeliai" />
                        </div>


                </div>
                <!------------------------------------------FORMA 2---------------------------------------->

                <div class="col-md-3 formosmedijos">

                    <!--                        Pasirinkti miesta       -->

                    <label for="field2">Miestas arba apskritis</label>
                    <div class="form-group">
                        <select name="miestas" id="field2" required="true" oninvalid="this.setCustomValidity('Pasirinkite iš variantų')" oninput="setCustomValidity('')" class="form-control langeliai">
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
                    </div>
                    <label for="field21">Tipas</label>
                    <div class="form-group">
                        <select name="tipas" id="field21" required="true" oninvalid="this.setCustomValidity('Pasirinkite iš variantų')" oninput="setCustomValidity('')" class="form-control langeliai">
    <option value=""></option>
    <option value="Med. praktika, meditacija">Med. praktika, meditacija</option>
    <option value="Paskaita">Paskaita</option>
    <option value="Stovykla, festivalis">Stovykla, festivalis</option>
    <option value="Mokymai">Mokymai</option>
    <option value="Kita">Kita</option>
    </select>
                    </div>
                    <div>
                        <label for="22">Registracija?</label>
                        <select name="registracija" id="field22" required="true" oninvalid="this.setCustomValidity('Pasirinkite iš variantų')" oninput="setCustomValidity('')" class="form-control langeliai">
   <option value=""></option>
    <option value="Būtina">Būtina</option>
    <option value="Nebūtina">Nebūtina</option>
    </select>
                    </div> <br>

                    <label for="field23">Nuoroda<span id="nebutinas"> nebūtina</span></label>
                    <div class="form-group">
                        <input type="text" name="nuoroda" id="field23" maxlength="5000" min="5" class="form-control langeliai" />
                    </div>

                </div>
                <!------------------------------------------FORMA 3---------------------------------------->
                <div class="col-md-6 formosmedijos">
                    <label for="field3">Trumpas Renginio aprašymas</label>
                    <div class="form-group">
                        <textarea name="aprasymas" id="field3" required="true" oninvalid="this.setCustomValidity('Aprašykite savo renginį!')" oninput="setCustomValidity('')" maxlength="500" min="10" class="aprasymasbox langeliai"></textarea>
                    </div>
                    <input type="submit" name="sub-1" value="Pateikti duomenis" class="btn dalintismygtukai" />

                    <input type="reset" name="res-1" id="res-1" value="Ištrinti duomenis" class=" btn dalintismygtukai" />
                </div>
                <!------------------------------------------FORMA END-------------------------------------->

                </form>
            </div>
        </div>
    </div>
  

    <script src="https://use.fontawesome.com/111b848bf1.js"></script>   
    <script type="text/javascript" src="main.js"></script>
    <script src="lib/jquery-3.2.1.min.js"></script>
    <script src="lib/jquery-ui.js"></script>
    <script type="text/javascript" src="lib/datepicker-lt.js"></script>
    <script src="lib/jquery.form-validator.min.js"></script>
   
<script>    
     $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });

  // Restrict presentation length
  $('#presentation').restrictLength( $('#pres-max-length') );

    
    $(function() {
    $("#field12").datepicker({
       
    }).on('change', function() {
        $(this).valid();  // triggers the validation test
        // '$(this)' refers to '$("#datepicker")'
    });
});
    
</script>
    

 
