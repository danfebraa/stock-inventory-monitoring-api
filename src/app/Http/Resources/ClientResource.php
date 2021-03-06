<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Id' => $this->id,
            'ClientCode' => $this->client_code,
            'Name' => $this->name,
            'Address' => $this->address,
            'Email' => $this->email,
            'ContactNo' => $this->contact_no,
            'ContactPerson' => $this->contact_person,
            'Transactions' => new TransactionCollection($this->whenLoaded('transactions'))
        ];
    }
}
