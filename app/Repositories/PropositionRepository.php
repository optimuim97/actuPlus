<?php

namespace App\Repositories;

use App\Models\Proposition;
use App\Repositories\BaseRepository;

/**
 * Class PropositionRepository
 * @package App\Repositories
 * @version July 3, 2021, 8:25 pm UTC
*/

class PropositionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'images',
        'video_url',
        'image_urls'
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
        return Proposition::class;
    }
}
