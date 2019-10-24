<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Images extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

            return url($this->temp);
            // 'user_id' => $this->user_id,
            // 'portofolio_id' => $this->portofolio_id,
            // 'title' => $this->title,
            // 'desc' => $this->desc,
    }
}
