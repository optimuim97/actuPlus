<?php

namespace App\Repositories;

use App\Models\Media;
use App\Repositories\BaseRepository;

/**
 * Class MediaRepository
 * @package App\Repositories
 * @version July 3, 2021, 5:19 pm UTC
*/

class MediaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'post_id',
        'photo_url',
        'post_title'
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
        return Media::class;
    }
}
