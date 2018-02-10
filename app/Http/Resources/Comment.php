<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Comment extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'comment' => $this->comment
        ];
    }
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author' => 'Allan Rabanillo'

        ];
    }
}
