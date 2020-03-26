<?php

namespace App\Http\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class AdminLinkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' => $this->id,
            'title' => $this->title,
            'url' => $this->url,
            'route' => route('url.showRedirect', $this->code),
            'updated_at' => Carbon::parse($this->updated_at)->format('d/m/Y'),
            'visits' => $this->visits
        ];
    }
}
