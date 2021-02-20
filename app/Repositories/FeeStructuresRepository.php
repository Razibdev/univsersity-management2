<?php

namespace App\Repositories;

use App\Models\FeeStructures;
use App\Repositories\BaseRepository;

/**
 * Class FeeStructuresRepository
 * @package App\Repositories
 * @version August 4, 2020, 1:16 pm UTC
*/

class FeeStructuresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'semester_id',
        'course_id',
        'level_id',
        'admissionFee',
        'semesterFee'
    ];

    protected $primaryKey = 'id';

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
        return FeeStructures::class;
    }
}
