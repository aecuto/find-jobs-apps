<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class package
 * @package App\Models
 * @version August 1, 2018, 10:24 am UTC
 *
 * @property string name
 * @property string description
 */
class package extends Model
{
    public function have_manager()
    {
      return $this->belongsToMany(User::class, 'manager_package');
    }

    use SoftDeletes;

    public $table = 'packages';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    
}
