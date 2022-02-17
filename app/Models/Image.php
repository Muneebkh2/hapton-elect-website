<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'original_name', 'path', 'type', 'imageable_id', 'imageable_type'];


    /**
     * Get the parent imageable model (products or video).
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
