<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Property extends Model
{
    use Notifiable;
    protected $fillable = [
        'name', 'price', 'negotiable','address','description','bed','img_url','bath','area','telephone','email','agent','user_id','onSale'
    ];
    public function path()
    {
        return url("/real-estate/{$this->id}-" . Str::slug($this->name));
    }
}
