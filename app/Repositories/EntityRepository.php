<?php

namespace App\Repositories;

use App\Models\Entity;
use App\Repositories\BaseRepository;

/**
 * Class EntityRepository
 * @package App\Repositories
 * @version July 3, 2021, 8:50 pm UTC
*/

class EntityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'logo',
        'photo_url',
        'photo_url',
        'entity_type_idl'
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
        return Entity::class;
    }
}
