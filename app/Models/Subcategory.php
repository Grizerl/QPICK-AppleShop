<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = "subcategories";
    protected $fillable = ['name', 'category_id', 'article'];

    /**
     * Summary of category
     * @return BelongsTo<Category, Subcategory>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Summary of products
     * @return HasMany<Product, Subcategory>
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
