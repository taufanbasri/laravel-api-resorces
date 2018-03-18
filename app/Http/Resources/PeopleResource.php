<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeopleResource extends JsonResource
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
            'type' => 'people',
            'id' => (string)$this->id,
            'attributes' => [
                'first-name' => $this->first_name,
                'last-name' => $this->last_name,
                'twitter' => $this->twitter,
            ],
            'links' => [
                'self' => route('authors.show', ['authors' => $this->id]),
            ]
        ];
    }
}
