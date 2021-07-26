<?php

namespace App\Http\Requests\API;

use App\Models\CommentType;
use InfyOm\Generator\Request\APIRequest;

class UpdateCommentTypeAPIRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = CommentType::$rules;
        
        return $rules;
    }
}
