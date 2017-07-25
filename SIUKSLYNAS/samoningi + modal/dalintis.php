<div class="section" id="section2">
    <div class="intro fulscreenbug" id="background2">
        <div class="container-fluid">
            <div class="row"><br><br><br><br><br>

                <!------------------------------------------FORMA 1---------------------------------------->
                <div class="col-md-2 col-md-offset-1 formosmedijos">
                    <form method="get" action="insert.php" class="vaalida">
                        <label for="field1">Pavadinimas</label>
                        <div class="form-group">
                            <input type="text" name="pavadinimas" id="field-1" required="true" maxlength="35" min="5" class="form-control" />
                        </div>

                        <label for="field12">Renginio pradžios data</label>
                        <div class="form-group">
                            <input type="text" name="data_" id="field12" required="true" maxlength="10" filter="date" class="form-control" data-invalid="Netinkamas datos formatas" />
                        </div>

                        <label for="field13">Organizatorių email</label>
                        <div class="form-group">
                            <input type="text" name="email" id="field13" required="true" maxlength="35" filter="email" class="form-control" data-invalid="neteisingas el paštas" />
                        </div>

                        <label for="field14">UnikalusID</label>
                        <div class="form-group">
                            <input type="text" name="unikalusid" id="field14" maxlength="35" min="5" class="form-control" />
                        </div>


                </div>
                <!------------------------------------------FORMA 2---------------------------------------->

                <div class="col-md-2 formosmedijos">

                    <!--                        Pasirinkti miesta       -->

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
                    <div>
                        <label for="22">Būtina registracija</label>
                        <select name="registracija" id="field22" required="true" class="form-control">
   <option value=""></option>
    <option value="Būtina">Būtina</option>
    <option value="Nebūtina">Nebūtina</option>
    </select>
                    </div> <br>

                    <label for="field23">Nuoroda</label>
                    <div class="form-group">
                        <input type="text" name="nuoroda" id="field23" maxlength="500" min="5" class="form-control" />
                    </div>

                </div>
                <!------------------------------------------FORMA 3---------------------------------------->
                <div class="col-md-5 formosmedijos">
                    <label for="field3">Renginio aprašymas</label>
                    <div class="form-group">
                        <textarea name="aprasymas" id="field3" required="true" maxlength="500" min="10" class="aprasymasbox"></textarea>
                    </div>
                    <input type="submit" name="sub-1" value="Pateikti duomenis" class="btn btn-2" />

                    <input type="reset" name="res-1" id="res-1" value="Ištrinti duomenis" class="btn btn-2" />
                </div>
                <!------------------------------------------FORMA END-------------------------------------->

                </form>
            </div>
        </div>
    </div>
</div>
