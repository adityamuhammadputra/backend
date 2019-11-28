<?php

namespace App\Http\Resources;

use App\Contact;
use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Contact as ContactResource;
use App\Http\Resources\HeaderDetail;

class Header extends JsonResource
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
            'details' => HeaderDetail::collection($this->details),
            'contacts' => ContactResource::collection(Contact::all())
        ];
    }
}
