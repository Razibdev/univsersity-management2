<?php

namespace App\Repositories;

use App\Models\Level;
use App\Repositories\BaseRepository;

/**
 * Class LevelRepository
 * @package App\Repositories
 * @version July 15, 2020, 5:36 am UTC
*/

class LevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Level::class;
    }
}
