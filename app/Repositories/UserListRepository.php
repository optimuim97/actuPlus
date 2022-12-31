<?php

namespace App\Repositories;

use App\Models\UserList;
use App\Repositories\BaseRepository;

/**
 * Class UserListRepository
 * @package App\Repositories
 * @version October 31, 2022, 12:16 pm UTC
*/

class UserListRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'image',
        'user_type',
        'password'
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
        return UserList::class;
    }
}
