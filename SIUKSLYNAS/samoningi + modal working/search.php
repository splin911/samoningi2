<div class="section" id="section3">
    <div class="intro fulscreenbug" id="background3">
        <h1 class="invisible" id="date2"></h1><br><br><br><br><br><br>
        <div class="container-fluid">

            <!----------------------------------------------MENU----------------------------------------------->
            <div class="row">
                <div class="col-md-6 riba table-responsive">        
                    
<select class="btnforma btn-default dropdown-toggle dropdown" id="miestai" name="fetchby">
<!--paimti is duombazes skirtingus komanda is:: select un-->
    <option value="" disabled selected>Atrinkti pagal miestą</option>
    <option value="Vilnius">Vilnius</option>
    <option value="Kaunas">Kaunas</option>
    <option value="Klaipėda">Klaipėda</option>
    <option value="Siauliai">Šiauliai</option>
    <option value="Panevezys">Panevėžys</option>
    <option value="Alytus">Alytus</option>
    <option value="Marijampole">Marijampolė</option>
    <option value="Utena">Utena</option>
    <option value="Telsiai">Telšiai</option>
                        
    <option value="Vilniaus">Vilniaus apskritis</option>
    <option value="Kauno">Kauno apskritis</option>
    <option value="Klaipedos">Klaipėdos apskritis</option>
    <option value="Siauliu">Šiaulių apskritis</option>
    <option value="Panevezio">Panevežio apskritis</option>
    <option value="Alytaus">Alytaus apskritis</option>
    <option value="Marijampoles">Marijampolės apskritis</option>
    <option value="Taurages">Tauragės apskritis</option>
    <option value="Utenos">Utenos apskritis</option>
    <option value="Telsiu">Telšių apskritis</option>
</select>

<select class="btnforma btn-default dropdown-toggle dropdown" id="tipas" name="fetchby2" placeholder="hey">
    
    
    <option value="" disabled selected>Atrinkti pagal tipą</option>
    <option value="meditacija">Meditacijos praktika, meditacija</option>
    <option value="paskaita">Paskaita</option>
    <option value="stovykla">Stovykla, festivalis, retritas</option>
    <option value="mokymai">Mokymai</option>
    <option value="kita">Kita</option>
</select>
                       </div>
            </div>
            
<!--
                  <tr class="fixedtr">
<th>Pavadinimas</th>
<th>Data</th>
<th>Email</th>
<th>Miestas</th>
<th>Tipas</th>
<th>Registracija</th>
<th>Aprasymas</th>

</tr>
       
-->
            <br>
            <!----------------------------------------------MENU END------------------------------------------->
            <div class="col-md-10 col-md-offset-1">
                <div class="searchdiv">
                    
                        <?php
     include_once ("output.php")
        ?>
                    
                </div>
            </div>
        </div>
    </div>







</div>


</div>
