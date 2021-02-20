<?php

namespace App\Repositories;

use App\Models\ClassAssigning;
use App\Repositories\BaseRepository;

/**
 * Class ClassAssigningRepository
 * @package App\Repositories
 * @version July 15, 2020, 9:32 am UTC
*/

class ClassAssigningRepository extends BaseRepository
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
        return ClassAssigning::class;
    }
}
