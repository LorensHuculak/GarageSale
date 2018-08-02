<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;


class Item extends Model
{
    use Favoriteable;
    // Table Name
    protected $table = 'items';
    // Primary Key
    public $primaryKey = 'id';

    public $timestamps = true;

    public function user(){
return $this->belongsTo('App\User');
    }

 
}
