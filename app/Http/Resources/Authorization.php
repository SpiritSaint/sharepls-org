<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\User as UserResource;
use App\User as UserModel;

class Authorization extends JsonResource
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
            'sender' => new UserResource(UserModel::find($this->sender_id)),
            'receiver' => new UserResource(UserModel::find($this->receiver_id)),
            'status' => $this->status,
            'permanent' => $this->permanent,
            'dates' => $this->dates,
        ];
    }
}
