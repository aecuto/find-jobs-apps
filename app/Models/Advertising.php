<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Advertising
 * @package App\Models
 * @version August 22, 2018, 7:24 am UTC
 *
 * @property string name
 * @property boolean show_name
 * @property string details
 */
class Advertising extends Model
{
    use SoftDeletes;

    public $table = 'advertisings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'show_name',
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'show_name' => 'boolean',
        'details' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    
}
