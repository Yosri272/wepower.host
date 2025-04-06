<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SocialLinkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
<<<<<<< HEAD
            'logo' => $this->logo,
=======
            'logo' => asset($this->logo),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'link' => $this->link,
        ];
    }
}
