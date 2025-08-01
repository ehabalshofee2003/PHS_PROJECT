<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
public function toArray($request)
{
    return [
        'id' => $this->id,
        'name' => $this->name,

        'image_url' => $this->image_url, // ما تستخدم asset() هون

    ];
}
}
