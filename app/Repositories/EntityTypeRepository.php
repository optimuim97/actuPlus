<?php

namespace App\Repositories;

use App\Models\EntityType;
use App\Repositories\BaseRepository;

/**
 * Class EntityTypeRepository
 * @package App\Repositories
 * @version July 3, 2021, 8:32 pm UTC
*/

class EntityTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return EntityType::class;
    }
}
