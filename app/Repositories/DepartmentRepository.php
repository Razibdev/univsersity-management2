<?php

namespace App\Repositories;

use App\Models\Department;
use App\Repositories\BaseRepository;

/**
 * Class DepartmentRepository
 * @package App\Repositories
 * @version July 24, 2020, 1:50 am UTC
*/

class DepartmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'faculty_id',
        'department_name',
        'department_code',
        'department_description',
        'department_status'
    ];

    protected $primaryKey = 'department_id';

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
        return Department::class;
    }
}
