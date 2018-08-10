<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class company
 * @package App\Models
 * @version July 23, 2018, 9:26 am UTC
 *
 * @property string companyname
 * @property string companytype
 * @property string details
 * @property string start_year
 * @property string worker_count
 * @property string address
 * @property string country
 * @property string phone
 * @property string fax
 * @property string email
 * @property string website
 * @property string fullname_contact
 * @property string position_context
 */
class company extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function job_position()
  {
    return $this->hasMany(JobPosition::class);
  }

    use SoftDeletes;

    public $table = 'companies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'companyname',
        'companytype',
        'details',
        'start_year',
        'worker_count',
        'address',
        'country',
        'phone',
        'fax',
        'email',
        'website',
        'fullname_contact',
        'position_contact',
        'map_embed',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'companyname' => 'string',
        'companytype' => 'string',
        'details' => 'string',
        'start_year' => 'string',
        'worker_count' => 'string',
        'address' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'website' => 'string',
        'fullname_contact' => 'string',
        'position_contact' => 'string',
        'map_embed' => 'text',
        'image' => 'binary'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'companyname' => 'required',
        'details' => 'required',
        'start_year' => 'required',
        'worker_count' => 'required',
        'address' => 'required',
        'country' => 'required',
        'phone' => 'required',
    ];

    
}
