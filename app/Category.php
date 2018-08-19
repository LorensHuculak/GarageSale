<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
        // Table Name
        protected $table = 'categories';
        // Primary Key
        public $primaryKey = 'id';
    
        public $timestamps = true;
        
        public function items() {
                return $this->hasMany('App\Item');
            }
}
