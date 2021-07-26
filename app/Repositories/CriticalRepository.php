<?php

namespace App\Repositories;

use App\Models\Critical;
use App\Repositories\BaseRepository;

/**
 * Class CriticalRepository
 * @package App\Repositories
 * @version July 3, 2021, 8:20 pm UTC
*/

class CriticalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_id',
        'user_id',
        'content',
        'title'
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
        return Critical::class;
    }
}
