<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\Resource;
class Contact extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'role' => $this->role
            
        ];
    }
    public function with($request) {
        return [
            'version' => '1.0.0',
            'author_url' => url('http://traversymedia.com')
        ];
    }
}