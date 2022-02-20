<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'original_name', 'path', 'type', 'fileable_id', 'fileable_type'];


    /**
     * Get the parent imageable model (products or video).
     */
    public function fileable()
    {
        return $this->morphTo();
    }
}
