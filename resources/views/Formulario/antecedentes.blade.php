<div class="row" style="width: 80%;display:flex;margin-left:auto;margin-right:auto">
            <h5 class="border rounded text-left p-2 mt-3 text-primary" style="margin-bottom:0px; width:100%; max-width:500px;">2.- Identificación del asegurado</h5>
            <div class="row border rounded py-2" style="margin-left:auto;margin-right:auto;margin-top:0px;">
                <div class="col-sm-4 mt-2">
                    <label for="names" class="form-label">Nombres</label>
                    <input type="text" class="form-control shadow-sm" id="names" required>
                </div>

                <div class="col-sm-4 mt-2">
                    <label for="ApPaterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control shadow-sm" id="ApPaterno" required>
                </div>

                <div class="col-sm-4 mt-2">
                    <label for="ApMaterno" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control shadow-sm" id="ApMaterno">
                </div>

                <div class="col-sm-4 mt-2">
                    <label for="Run">RUN</label>
                    <input type="text" class="form-control shadow-sm" id="Run">
                </div>

                <div class="col-sm-2 mt-2">
                    <label for="FNac" >Fecha de nacimiento</label>
                    <input type="date" class="form-control shadow-sm" id="FNac">
                </div>

                <div class="col-sm-3 mt-2">
                    <label for="" class="row ps-3">Sexo</label>
                    <div class="border border-blue p-1 shadow-sm bg-body rounded" style="align-items:center; justify-content:center; display:flex;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Femenino
                            </label>
                        </div>
                    </div>    
                </div>

                <div class="col-sm-3 mt-2">
                    <label for="Nacionalidad" >Nacionalidad</label>
                    <input type="text" class="form-control shadow-sm" id="Nacionalidad">
                </div>

                <div class="col-sm-6 mt-2">
                    <label for="Email" class="form-label">E-MAIL</label>
                    <input type="mail" class="form-control shadow-sm" id="Email" required>
                </div>
                
                <div class="col-sm-6 mt-2">
                    <label for="Tel" class="form-label">Teléfono/Celular</label>
                    <input type="phone" class="form-control shadow-sm" id="Tel" required>
                </div>

                <div class="form-check ms-3 mt-1">
                    <input class="form-check-input" type="checkbox" value="" id="AutInformacion" checked>
                    <label class="form-check-label text-primary" for="defaultCheck1">
                        <small>Autorizo a Fonasa para que me envíe información a mi e-mail y/o teléfono celular</small>
                    </label>
                </div>

            </div>
        </div>

        <!--        3.- Domicilio           -->

        <div class="row"  style="width: 80%;display:flex;margin-left:auto;margin-right:auto">
            <h5 class="border text-left p-2 rounded text-primary mt-3" style="margin-bottom:0px; width:100%; max-width:500px;">3.- Domicilio</h5>
            <div class="row border rounded py-4" style="margin-left:auto;margin-right:auto;margin-top:0px;">
                <div class="col-sm-4">
                    <label for="Street" class="form-label">Calle</label>
                    <input type="text" class="form-control shadow-sm" id="Street">
                </div>

                <div class="col-sm-2">
                    <label for="HouseNumber" class="form-label">N°</label>
                    <input type="number" class="form-control shadow-sm" id="HouseNumber">
                </div>

                <div class="col-sm-4">
                    <label for="Pob" class="form-label">Población/Villa</label>
                    <input type="text" class="form-control shadow-sm" id="Pob">
                </div>

                <div class="col-sm-2">
                    <label for="DptoNumber" class="form-label">Depto.</label>
                    <input type="number" class="form-control shadow-sm" id="DptoNumber">
                </div>

                <div class="col-sm-6">
                    <label for="Pob" class="form-label">Comuna</label>
                    <input type="text" class="form-control shadow-sm" id="Pob">
                </div>

                <div class="col-sm-4">
                    <label for="Pob" class="form-label">Ciudad</label>
                    <input type="text" class="form-control shadow-sm" id="Pob">
                </div>

                <div class="col-sm-2">
                    <label for="Reg" class="form-label">Región</label>
                    <select class="form-select w-60" id="Reg" required>
                        <option value="opcion" selected>RM - Región Metropolitana</option>
                        <option value="afiliación">I - Tarapacá</option>
                        <option value="afiliación">II - Antofagasta</option>
                        <option value="afiliación">III - Atacama</option>
                        <option value="afiliación">IV - Coquimbo</option>
                        <option value="afiliación">V - Valparaíso</option>
                        <option value="afiliación">VI - O'Higgins</option>
                        <option value="afiliación">VII - Maule</option>
                        <option value="afiliación">VIII - Bio-Bio</option>
                        <option value="afiliación">IX - Araucanía</option>
                        <option value="afiliación">X - Los Lagos</option>
                        <option value="afiliación">XI - Los Lagos</option>
                        <option value="afiliación">XII - Aysén</option>
                        <option value="afiliación">XIII - Magallanes</option>
                        <option value="afiliación">XIV - Los Rios</option>
                        <option value="afiliación">XV - Arica y Parinacota</option>
                    </select>
                </div>

                <div class="row mt-1 pl-3" style="margin-left:auto;margin-right:auto;">
                    <div class="col-md-3 text-center">
                        <label>TIPO DE PROPIEDAD:</label>
                    </div>

                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="TipoPropiedad" id="PPagada">
                            <label class="form-check-label" for="PPagada">
                                Propia pagada
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="TipoPropiedad" id="PDeuda">
                            <label class="form-check-label" for="PDeuda">
                                Propia con deuda
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="TipoPropiedad" id="PArrendada">
                            <label class="form-check-label" for="PArrendada">
                                Arrendada
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="TipoPropiedad" id="PAllegado">
                            <label class="form-check-label" for="PAllegado">
                                Allegado
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="TipoPropiedad" id="POtros">
                            <label class="form-check-label" for="POtros">
                                Otros
                            </label>
                        </div>

                    </div>

                </div>
                
            </div>
        </div>

        @yield('antecedentes')