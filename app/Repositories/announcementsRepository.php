<?php

namespace App\Repositories;

use App\Models\announcements;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class announcementsRepository
 * @package App\Repositories
 * @version July 31, 2018, 5:29 am UTC
 *
 * @method announcements findWithoutFail($id, $columns = ['*'])
 * @method announcements find($id, $columns = ['*'])
 * @method announcements first($columns = ['*'])
*/
class announcementsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'start_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return announcements::class;
    }
}
