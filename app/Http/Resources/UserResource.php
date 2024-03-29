<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            // 'phone' => '('.$this->phone->prefix.') '.$this->phone->phone_number
            'phones' => $this->phones->pluck('phone_number'),
            'roles' => $this->roles->pluck('name'),
        ];
    }
}
