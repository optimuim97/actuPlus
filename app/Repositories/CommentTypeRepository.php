<?php

namespace App\Repositories;

use App\Models\CommentType;
use App\Repositories\BaseRepository;

/**
 * Class CommentTypeRepository
 * @package App\Repositories
 * @version July 3, 2021, 8:27 pm UTC
*/

class CommentTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'slug'
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
        return CommentType::class;
    }
}
