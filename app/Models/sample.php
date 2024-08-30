<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'sampla';
    public function sampleCategory(){

        return $this->belongsTo(ServiceCategory::class, 'category');
        
      }
}
