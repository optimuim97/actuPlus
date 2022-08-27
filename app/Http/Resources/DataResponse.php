<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataResponse extends JsonResource
{


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        // return parent::toArray($request);

        // return [
        //     "id"=> $this->id,
        //     "name"=> $this->name,
        //     "email"=> $this->email,
        //     "image"=> $this->image
        // ];

    }

    public function with($request)
    {
        return [
            "id"=> $this->id,
            "name"=> $this->name,
            "email"=> $this->email,
            "image"=> $this->image,
            "email_verified_at"=> null
        ];
        
        // parent::toArray($request);
    }
}
