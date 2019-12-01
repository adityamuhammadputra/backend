<?php

namespace App\Http\Resources;

use App\Contact;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\HeaderDetailResource;
use App\Http\Resources\ContactResource;

class HomeResource extends JsonResource
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
            'details' => HeaderDetailResource::collection($this->details),
            'contacts' => ContactResource::collection(Contact::all())
        ];
    }
}
