<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable =
        [
            'name',
            'description',
            'image',
            'price',
            'discount',
            'availability',
            'brand',
            'year_of_issue',
            'weight',
            'device_color',
            'subcategory_id'
        ];

    /**
     * Summary of subcategory
     * @return BelongsTo<Subcategory, Product>
     */
    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(Subcategory::class);
    }
}
