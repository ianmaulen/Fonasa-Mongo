<?php

namespace App\Http\Controllers;

use App\Models\formController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use \Freshwork\ChileanBundle\Rut;

class FormControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formControllers=formController::all();
        return view('completeForm',compact('formControllers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('completeForm');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'nombre' => 'required',
            'aPaterno' => 'required',
            'aMaterno' => 'required',
            'rut' => 'required|cl_rut|unique:Afiliados',
            'fNacimiento' => 'required',
            'sexo' => 'required',
            'nacionalidad' => 'required',

            'correo' => 'required|email',
            'telefono' => 'required|integer',
            'calle' => 'required',
            'nroCasa' => 'required|integer',
            'comuna' => 'required|string',
            'ciudad' => 'required|string'
            
            
        ],
        [
            'nombre.required'=>'Favor ingresar nombre',
            'aPaterno.required'=>'Favor ingresar apellido paterno',
            'aMaterno.required' => 'Favor ingresar apellido materno',
            'rut.required' => 'Se requiere un RUT',
            'fNacimiento.required' => 'Favor ingresa tu fecha de nacimiento',
            'sexo.required' => 'Favor selecciona tu sexo',
            'nacionalidad.required' => 'Favor ingresar nacionalidad',
            'rut.cl_rut' => 'Favor ingresar RUT válido',
            'rut.unique' => 'El RUT ya se encuentra registrado'
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
            
           
        }

        $formController = new formController();
        
        
        $formController->nombre = $request->get('nombre');
        $formController->aPaterno = $request->get('aPaterno');
        $formController->aMaterno = $request->get('aMaterno');
        $formController->rut = Rut::parse($request->get('rut'))->fix()->format();
        $formController->fNacimiento = $request->get('fNacimiento');
        $formController->sexo = $request->get('sexo');
        $formController->nacionalidad = $request->get('nacionalidad');
        $formController->correo = $request->get('correo');
        $formController->telefono = $request->get('telefono');
        $formController->calle = $request->get('calle');
        $formController->nroCasa = $request->get('nroCasa');
        $formController->comuna = $request->get('comuna');
        $formController->ciudad = $request->get('ciudad');
        $formController->region = $request->get('region');
        $formController->save();
        return redirect('completeForm')->with('success', 'Formulario has been successfully added');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formController  $formController
     * @return \Illuminate\Http\Response
     */
    public function show(formController $formController)
    {
        $formController=formController::all();
        return view('completeForm',compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formController  $formController
     * @return \Illuminate\Http\Response
     */
    public function edit(formController $formController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formController  $formController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formController $formController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formController  $formController
     * @return \Illuminate\Http\Response
     */
    public function destroy(formController $formController)
    {
        //
    }
}
