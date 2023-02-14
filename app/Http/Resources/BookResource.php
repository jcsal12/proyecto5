<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'attributes' => [
                'title' => $this->title,
                'description' => $this->description,
                'price' => $this->price,
                'currency' => $this->currency,
                'images' => $this->images,
            ]

        ];
    }

    // public static function getAttributes($data)
    // {
    //     $attributes = array();

    //     foreach(self::KEYS as $key => $field) {
    //         $attributes[$key] = self::getFirstElementRecursive($data[$field]);
    //     }

    //     return $attributes;
    // }

    // public static function getFirstElementRecursive($dataArray) {
    //     return is_array($dataArray) ? self::getFirstElementRecursive($dataArray[0]) : $dataArray;
    // }
}
