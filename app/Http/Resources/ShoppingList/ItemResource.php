<?php

namespace App\Http\Resources\ShoppingList;

use App\Http\Resources\UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public $preserveKeys = true;
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'bought' => $this->bought,
            'user' => new UserResource($this->user)
        ];
    }
}
