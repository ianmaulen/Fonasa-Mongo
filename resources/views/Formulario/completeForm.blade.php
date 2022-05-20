<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario del Asegurado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Fonasa</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/">Formulario del asegurado</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/">Administrador</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <div class="d-flex justify-content-center mb-2">
        <h4 class="text-primary text-decoration-underline">FORMULARIO DEL ASEGURADO</h4>
    </div>
    
    <form action="{{url('add')}}" method="POST" class="needs-validation" style="width: 100%; max-width:1100px; display:block; margin-left:auto;margin-right:auto;">
        @csrf
        <!--        1.- Tipo solicitud      -->

        <div class="row">
            <h5 class="border text-left p-2 rounded text-primary" style="margin-bottom:0px; width:100%; max-width:500px;">1.- Ingrese tipo de solicitud</h5>
            <div class="container border rounded p-2" style="margin-top:0px;">    
                <select class="form-select w-60" name="tipoSolicitud" required>
                    <option value="opcion" disabled selected>Elija una opción</option>
                    <option value="afiliación">Solicitud de afiliación</option>
                    <option value="afiliación">Actualización de antecedentes</option>
                    <option value="afiliación">Incorporación o eliminación de cargas familiares</option>
                    <option value="afiliación">Modificación de empleador</option>
                    <option value="afiliación">Cambio de situación laboral</option>
                </select>
                <div class="invalid-feedback">
                    Por favor, seleccione una opción válida.
                </div>
            </div>
        </div>    

        <!--        2.- Identificación del asegurado        -->

        <div class="row">
            <h5 class="border rounded text-left p-2 mt-3 text-primary" style="margin-bottom:0px; width:100%; max-width:500px;">2.- Identificación del asegurado</h5>
            <div class="row border rounded py-2" style="margin-left:auto;margin-right:auto;margin-top:0px;">
                <div class="col-sm-4 mt-2">
                    <label for="names" class="form-label">Nombres</label>
                    <input type="text" class="form-control shadow-sm" name="nombre" id="names" value="{{ old('nombre') }}" required>
                </div>

                <div class="col-sm-4 mt-2">
                    <label for="ApPaterno" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control shadow-sm" id="ApPaterno" name="aPaterno" value="{{ old('aPaterno') }}" required>
                </div>

                <div class="col-sm-4 mt-2">
                    <label for="ApMaterno" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control shadow-sm" id="ApMaterno" name="aMaterno" value="{{ old('aMaterno') }}" required>
                </div>

                <div class="col-sm-4 mt-2">
                    <label for="Run">RUN</label>
                    <input type="text" class="form-control shadow-sm" id="Run" name="rut" required>
                </div>

                <div class="col-sm-2 mt-2">
                    <label for="FNac" >Fecha de nacimiento</label>
                    <input type="date" class="form-control shadow-sm" id="FNac" name="fNacimiento" value="{{ old('fNacimiento') }}" required>
                </div>

                <div class="col-sm-3 mt-2">
                    <label for="" class="row ps-3">Sexo</label>
                    <div class="border border-blue p-1 shadow-sm bg-body rounded" style="align-items:center; justify-content:center; display:flex;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault1" value="Masculino" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo" id="flexRadioDefault2" value="Femenino" required>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Femenino
                            </label>
                        </div>
                    </div>    
                </div>

                <div class="col-sm-3 mt-2">
                    <label for="Nacionalidad" >Nacionalidad</label>
                    <input type="text" class="form-control shadow-sm" id="Nacionalidad" name="nacionalidad" value="{{ old('nacionalidad') }}" required>
                </div>

                <div class="col-sm-6 mt-2">
                    <label for="Email" class="form-label">E-MAIL</label>
                    <input type="mail" class="form-control shadow-sm" id="Email" name="correo" value="{{ old('correo') }}" required>
                </div>
                
                <div class="col-sm-6 mt-2">
                    <label for="Tel" class="form-label">Teléfono/Celular</label>
                    <input type="phone" class="form-control shadow-sm" id="Tel" name="telefono" value="{{ old('telefono') }}" required>
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

        <div class="row">
            <h5 class="border text-left p-2 rounded text-primary mt-3" style="margin-bottom:0px; width:100%; max-width:500px;">3.- Domicilio</h5>
            <div class="row border rounded py-4" style="margin-left:auto;margin-right:auto;margin-top:0px;">
                <div class="col-sm-4">
                    <label for="Street" class="form-label">Calle</label>
                    <input type="text" class="form-control shadow-sm" id="Street" name="calle" value="{{ old('calle') }}" required>
                </div>

                <div class="col-sm-2">
                    <label for="HouseNumber" class="form-label">N°</label>
                    <input type="number" class="form-control shadow-sm" id="HouseNumber" name="nroCasa" value="{{ old('nroCasa') }}" required>
                </div>

                <div class="col-sm-4">
                    <label for="Pob" class="form-label">Población/Villa</label>
                    <input type="text" class="form-control shadow-sm" id="Pob" value="{{ old('poblacion') }}" name="poblacion">
                </div>

                <div class="col-sm-2">
                    <label for="DptoNumber" class="form-label">Depto.</label>
                    <input type="number" class="form-control shadow-sm" id="DptoNumber" value="{{ old('dpto') }}" name="dpto">
                </div>

                <div class="col-sm-6">
                    <label for="Pob" class="form-label">Comuna</label>
                    <input type="text" class="form-control shadow-sm" id="Pob" name="comuna" value="{{ old('comuna') }}" required>
                </div>

                <div class="col-sm-4">
                    <label for="Pob" class="form-label">Ciudad</label>
                    <input type="text" class="form-control shadow-sm" id="Pob" name="ciudad" value="{{ old('ciudad') }}" required>
                </div>

                <div class="col-sm-2">
                    <label for="region" class="form-label">Región</label>
                    <select class="form-select w-60" id="region" name="region" value="{{ old('region') }}" required>
                        <option value="RM">RM - Región Metropolitana</option>
                        <option value="I">I - Tarapacá</option>
                        <option value="II">II - Antofagasta</option>
                        <option value="III">III - Atacama</option>
                        <option value="IV">IV - Coquimbo</option>
                        <option value="V">V - Valparaíso</option>
                        <option value="VI">VI - O'Higgins</option>
                        <option value="VII">VII - Maule</option>
                        <option value="VIII">VIII - Bio-Bio</option>
                        <option value="IX">IX - Araucanía</option>
                        <option value="X">X - Los Lagos</option>
                        <option value="XI">XI - Los Lagos</option>
                        <option value="XII">XII - Aysén</option>
                        <option value="XIII">XIII - Magallanes</option>
                        <option value="XIV">XIV - Los Rios</option>
                        <option value="XV">XV - Arica y Parinacota</option>
                    </select>
                </div>

                <div class="row mt-1 pl-3" style="margin-left:auto;margin-right:auto;">
                    <div class="col-md-3 text-center">
                        <label>TIPO DE PROPIEDAD:</label>
                    </div>

                    <div class="col-md-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipoPropiedad" id="PPagada">
                            <label class="form-check-label" for="PPagada">
                                Propia pagada
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipoPropiedad" id="PDeuda">
                            <label class="form-check-label" for="PDeuda">
                                Propia con deuda
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipoPropiedad" id="PArrendada">
                            <label class="form-check-label" for="PArrendada">
                                Arrendada
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipoPropiedad" id="PAllegado">
                            <label class="form-check-label" for="PAllegado">
                                Allegado
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="tipoPropiedad" id="POtros">
                            <label class="form-check-label" for="POtros">
                                Otros
                            </label>
                        </div>

                    </div>

                </div>
                
            </div>
        </div>

        <!--        4.- Tipo de asegurado       --> 

        <div class="row">
            <h5 class="border text-left p-2 rounded text-primary mt-3" style="margin-bottom:0px; width:100%; max-width:500px;">4.- Tipo de asegurado</h5>
            <div class="row border rounded py-4" style="margin-left:auto;margin-right:auto;margin-top:0px;">
                <p class="text-primary">Por favor, apriete un botón para desplegar opciones</p>
                <div class="row">
                    <div class="col md-4">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-primary w-100" data-bs-toggle="collapse" href="#collapseOne">
                                    TRABAJADOR DEPENDIENTE
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body row">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Contrato Indefinido
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Contrato a plazo fijo
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Contrato por obra o faena
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Contrato por turno o jornada
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Trabajador pensionado del sector salud
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-info w-100" data-bs-toggle="collapse" href="#collapseTwo">
                                    PENSIONADO
                                </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                    
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Vejez
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Viudez
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Orfandad
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Invalidez
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Pensión en trámite
                                            </label>
                                        </div>
                                        <select class="form-select w-60 shadow-sm mt-2" name="instPension">
                                            <option value="opcion" disabled selected>INSTITUCIÓN PAGADORA DE PENSIÓN:</option>
                                            <option value="afiliación">AFP</option>
                                            <option value="afiliación">IPS</option>
                                            <option value="afiliación">MUTUAL</option>
                                            <option value="afiliación">Cía. de seguros</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col bg-yellow">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header">
                                    <a class="btn w-100 text-white" data-bs-toggle="collapse" href="#collapseThree" style="background-color:indigo;">
                                    OTROS
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                                    <div class="card-body">
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Independiente
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="TAsegurado" id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Cesante subsidio cesantía / seguro desempleo
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--        5.- Datos empleador o entidad pagadora de pensión       --> 

        <div class="row">
            <h5 class="border text-left p-2 rounded text-primary mt-3" style="margin-bottom:0px; width:100%; max-width:600px;">5.- Datos de empleador o entidad pagadora de pensión</h5>
            
            <div class="row border rounded py-4" style="margin-left:auto;margin-right:auto;margin-top:0px;">
                <div class="col-sm-2 mt-2">
                    <label for="EmpRun">RUN</label>
                    <input type="text" class="form-control shadow-sm" id="empRun" name="empRut" value="{{ old('empRut') }}" required>
                </div>
                <div class="col-sm-5 mt-2">
                    <label for="EmpNombre">Nombre o razón social</label>
                    <input type="text" class="form-control shadow-sm" id="empNombre" name="empNombre" value="{{ old('empNombre') }}" required>
                </div>
                <div class="col-sm-5 mt-2">
                    <label for="EmpDomicilio">Domicilio</label>
                    <input type="text" class="form-control shadow-sm" id="empDomicilio" name="empDomicilio" value="{{ old('empDomicilio') }}" required>
                </div>
                <div class="col-sm-2 mt-2">
                    <label for="EmpTel">Teléfono</label>
                    <input type="phone" class="form-control shadow-sm" id="empTel" name="empTel" value="{{ old('empTel') }}" required>
                </div>
                <div class="col-sm-5 mt-2">
                    <label for="EmpRenta">Renta imponible mensual</label>
                    <input type="number" class="form-control shadow-sm" id="renta" name="renta" value="{{ old('renta') }}" required>
                </div>
                <div class="col-sm-5 mt-2">
                    <div id="VigContrato" class="row">
                        <div class="col">
                            <label for="EmpFInicio">Fecha inicio de contrato:</label>
                             <input type="date" class="form-control shadow-sm" id="empFInicio" name="empFInicio" value="{{ old('empFInicio') }}" required>
                        </div>
                        <div class="col">
                            <label for="EmpFTermino">Fecha término de contrato:</label>
                             <input type="date" class="form-control shadow-sm" id="empFTermino" name="empFTermino">
                        </div>
                    </div>    
                </div>
            </div>

            <div class="row border rounded py-4" style="margin-left:auto;margin-right:auto;margin-top:0px;">
                <div class="col-sm-2 mt-2">
                    <label for="EmpRun2">RUN</label>
                    <input type="text" class="form-control shadow-sm" id="empRun2">
                </div>
                <div class="col-sm-5 mt-2">
                    <label for="EmpNombre2">Nombre o razón social</label>
                    <input type="text" class="form-control shadow-sm" id="empNombre2">
                </div>
                <div class="col-sm-5 mt-2">
                    <label for="EmpDomicilio2">Domicilio</label>
                    <input type="text" class="form-control shadow-sm" id="empDomicilio2">
                </div>
                <div class="col-sm-2 mt-2">
                    <label for="EmpTel2">Teléfono</label>
                    <input type="phone" class="form-control shadow-sm" id="empTel2">
                </div>
                <div class="col-sm-5 mt-2">
                    <label for="EmpRenta2">Renta imponible mensual</label>
                    <input type="number" class="form-control shadow-sm" id="empRenta2">
                </div>
                <div class="col-sm-5 mt-2">
                    <div id="VigContrato2" class="row">
                        <div class="col">
                            <label for="EmpFInicio2">Fecha inicio de contrato:</label>
                            <input type="date" class="form-control shadow-sm" id="empFInicio2">
                        </div>
                        <div class="col">
                            <label for="EmpFTermino2">Fecha término de contrato:</label>
                            <input type="date" class="form-control shadow-sm" id="empFTermino2">
                        </div>
                    </div>    
                </div>

            </div>
        </div>   

        <!--        6.- Detalle de cargas familiares        --> 

       

        <!--        7.- Inscripción establecimiento publico salud       --> 

        <div class="row">
            <h5 class="border text-left p-2 rounded text-primary mt-3" style="margin-bottom:0px; width:100%; max-width:500px;">7.- Inscripción establecimiento publico de salud</h5>
            <div class="row">
                <div class="row border rounded py-2" style="margin-left:1px;">
                    <div class="col-md-2 border rounded">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="EstPublico" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                SI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="EstPublico" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                 NO
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput">
                            <label for="floatingInput">Cuál?</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput">
                            <label for="floatingInput">Comuna:</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput">
                            <label for="floatingInput">Región:</label>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!--        8.- Declaraciones juradas       --> 

        <button type="submit" class="btn btn-success">Enviar formulario</button>

    </form>


</body>
</html>