<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class formController extends Model
{
    
    protected $connection = 'mongodb';
    protected $collection = 'Afiliados';
    
    protected $fillable = [
        'nombre', 'aPaterno','aMaterno','rut','fNacimiento','sexo','nacionalidad','correo','telefono' 
    ];
}
