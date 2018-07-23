<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobPosition
 * @package App\Models
 * @version July 23, 2018, 3:55 am UTC
 *
 * @property string jobname
 * @property string companyname
 * @property string job
 * @property string certificate
 * @property string country
 * @property integer salary
 * @property string experience
 * @property string map
 */
class JobPosition extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  
    use SoftDeletes;

    public $table = 'job_positions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobname',
        'companyname',
        'job',
        'certificate',
        'country',
        'salary',
        'experience',
        'map',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobname' => 'string',
        'companyname' => 'string',
        'job' => 'string',
        'certificate' => 'string',
        'country' => 'string',
        'salary' => 'string',
        'experience' => 'string',
        'map' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'job' => 'required'
    ];
    
}
