<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'category_id', 'image', 'slug','dynamic_table_header','dynamic_table_body'];

    /**
     * Get all of the product's images.
     */
    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }
    public function file()
    {
        return $this->morphOne(File::class, 'fileable');
    }

    public function document_files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    /**
     * Get the attributes for the product.
     */
    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

    function getDynamicTableHeaderAttribute($value){
        return json_decode($value);
    }

    function getDynamicTableBodyAttribute($value){
        return json_decode($value);
    }
}
