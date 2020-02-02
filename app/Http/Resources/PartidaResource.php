<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PartidaResource extends JsonResource
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
            'dataPartida' => $this->dataPartida,
            'time_id' => $this->time_id,
            'time2_id' => $this->time2_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'escalao_partidas' => new Escalao_PartidaCollection($this->whenLoaded('escalao_partidas')),
            'time' => new TimeResource($this->whenLoaded('time'))
        ];
    }
}
