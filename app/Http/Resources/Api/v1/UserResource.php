<?php

namespace App\Http\Resources\Api\v1;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'username' => $this->username,
            'email' => $this->email,
            'email_verificado' => $this->email_verified_at ?? 'Não Verificado',
            'status' => $this->status ? 'Ativo' : 'Bloqueado',
            'type' => User::$tipos_usuarios[$this->type],
        ];
    }
}
