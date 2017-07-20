<div class="section" id="section2">
    <div class="intro fulscreenbug" id="background2">
        <div class="container-fluid">
            <div class="row dalintisrow">
                 <br><br><br><br><br><br>
            
<!------------------------------------------FORMA 1---------------------------------------->
        <div class="col-md-3 col-md-offset-0 formosmedijos dalintisforma1">
            <form method="get" action="insert.php" class="vaalida">
                <label class="labelfirst" for="field1">Pavadinimas</label>
                <div class="form-group">
                    <input type="text" name="pavadinimas" id="field-1" required="true" maxlength="35" min="5" class="form-control" />
                </div>
 
                <label for="field12">Renginio pradžios data (formatas: 2017-07-06)</label>
                <div class="form-group">
                    <input type="text" name="data_" id="field12" required="true" maxlength="10" filter="date" class="form-control" data-invalid="Netinkamas datos formatas" />
                </div>

                <label for="field13">Organizatorių email</label>
                <div class="form-group">
                    <input type="text" name="email" id="field13" required="true" maxlength="35" filter="email" class="form-control" data-invalid="neteisingas el paštas" />
                </div>
                
                <label for="field7">UnikalusID (nebūtinas)</label>
                <div class="form-group">
                    <input type="text" name="unikalusid" id="field7" maxlength="20" min="5" class="form-control" />
                </div>
                
                 </div>
            
            
              <!--                        Vidurine dalis      -->
            
             <div class="col-md-3 col-md-offset-0 formosmedijos dalintisforma1">

                <label class="labelfirst" for="field5">Registracija?</label>
                <div class="form-group">
                    
                     <select name="registracija" id="field5" required="true" class="form-control">
    <option value=""></option>
    <option value="Būtina">Būtina</option>
    <option value="Nebūtina">Nebūtina</option>   
    </select>
                      <label for="field2">Miestas arba apskritis</label>
                <div class="form-group">
                    
                    <select name="miestas" id="field2" required="true" class="form-control">
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
                            <select name="tipas" id="field21" required="true" class="form-control">
    <option value=""></option>
    <option value="Meditacijos praktika, meditacija">Meditacijos praktika, meditacija</option>
    <option value="Paskaita">Paskaita</option>
    <option value="Stovykla, festivalis, retritas">Stovykla, festivalis, retritas</option>
    <option value="Mokymai">Mokymai</option>
    <option value="Kita">Kita</option>
    </select>
                        </div>
                    
                     <label for="field111">Nuoroda</label>
                <div class="form-group">
                    <input type="text" name="nuoroda" id="field111" required="true" maxlength="100" min="5" class="form-control" />
                </div>
                    
                    
                     
                </div>
                </div>
<!------------------------------------------FORMA 2---------------------------------------->
                <div class="col-md-5 box-pozicija formosmedijos dalintisforma2">
                    <label for="field3">Renginio aprašymas</label>
                    <div class="form-group">
                        <textarea name="aprasymas" id="field3" required="true" maxlength="500" min="10" class="aprasymasbox"></textarea>
                    </div>
                    <input type="submit" name="sub-1" value="Pateikti duomenis" class="btn btn-2" />
                    
                    <input type="reset" name="res-1" id="res-1" value="Ištrinti duomenis" class="btn btn-2" />
                </div>
<!------------------------------------------FORMA 2 END-------------------------------------->             
                    
                    </form>
            
        </div>
    </div>
</div>


