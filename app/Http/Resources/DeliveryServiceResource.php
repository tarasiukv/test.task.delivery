<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'address' => $this->address,
            'packages' => PackageResource::collection($this->whenLoaded('packages')),
            'deliveries' => DeliveryResource::collection($this->whenLoaded('deliveries')),
        ];
    }
}
