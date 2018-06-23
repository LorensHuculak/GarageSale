<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Table Name
    protected $table = 'items';
    // Primary Key
    public $primaryKey = 'id';

    public $timestamps = true;

    public function user(){
return $this->belongsTo('App\User');
    }
}
