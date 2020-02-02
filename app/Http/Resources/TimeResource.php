<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TimeResource extends JsonResource
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
            'nome' => $this->nome,
            'idade' => $this->idade,
            'grupoProfisional' => $this->grupoProfisional,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'jogadors' => new JogadorCollection($this->whenLoaded('jogadors')),
            'partidas' => new PartidaCollection($this->whenLoaded('partidas'))
        ];
    }
}
