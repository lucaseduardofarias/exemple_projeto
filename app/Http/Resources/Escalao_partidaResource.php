<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Escalao_partidaResource extends JsonResource
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
            'jogador_id' => $this->jogador_id,
            'partida_id' => $this->partida_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'jogador' => new JogadorResource($this->whenLoaded('jogador')),
            'partida' => new PartidaResource($this->whenLoaded('partida'))
        ];
    }
}
