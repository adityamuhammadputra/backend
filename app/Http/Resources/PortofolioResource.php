<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\ImagesResource;

class PortofolioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'desc' => $this->desc,
            'updated_at' => $this->updated_at,
            'images' => ImagesResource::collection($this->images),
            'image_first' => new ImagesResource($this->imageFitst)
        ];
    }
}
