<div class="section" id="section2">
    <div class="intro fulscreenbug" id="background2">
        <div class="container-fluid">
            <div class="row">
                <h1 class="invisible">dalintis</h1>   
            
<!------------------------------------------FORMA 1---------------------------------------->
        <div class="col-md-5 col-md-offset-1 formosmedijos">
            <form method="get" action="insert.php" class="valida">
                <label id="labelfirst" for="field1">Pavadinimas</label>
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

                <!--                        Pasirinkti miesta       -->

                <label for="field2">Miestas arba apskritis</label>
                <div class="form-group">
                    <select name="miestas" id="field2" required="true" class="form-control">
    <option value=""></option>
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
                        </div>
                        <label for="field21">Tipas</label>
                        <div class="form-group">
                            <select name="tipas" id="field21" required="true" class="form-control">
    <option value=""></option>
    <option value="meditacija">Meditacijos praktika, meditacija</option>
    <option value="paskaita">Paskaita</option>
    <option value="stovykla">Stovykla, festivalis, retritas</option>
    <option value="mokymai">Mokymai</option>
    <option value="kita">Kita</option>
    </select>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="field5" id="field5" value="y" />
                            <label for="registracija">Būtina registracija</label>
                        </div>
                </div>
<!------------------------------------------FORMA 2---------------------------------------->
                <div class="col-md-5 box-pozicija formosmedijos">
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
</div>


