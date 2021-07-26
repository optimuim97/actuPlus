<?php

namespace App\Repositories;

use App\Models\Like;
use App\Repositories\BaseRepository;

/**
 * Class LikeRepository
 * @package App\Repositories
 * @version July 3, 2021, 8:28 pm UTC
*/

class LikeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_id',
        'user_id'
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
        return Like::class;
    }
}
