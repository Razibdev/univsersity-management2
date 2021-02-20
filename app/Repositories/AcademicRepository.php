<?php

namespace App\Repositories;

use App\Models\Academic;
use App\Repositories\BaseRepository;

/**
 * Class AcademicRepository
 * @package App\Repositories
 * @version July 15, 2020, 9:17 am UTC
*/

class AcademicRepository extends BaseRepository
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
        return Academic::class;
    }
}
