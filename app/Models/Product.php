<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Review;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'rate',
        'types',
        'stock',
        'categories',
        'picturePath'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'product_id');
    }

    // Relasi ke model Review
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    // Dapatkan rating rata-rata produk
    public function getAverageRatingAttribute()
    {
        return round($this->reviews->avg('rate'), 1); // Menghitung rata-rata rating produk
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    public function toArray()
    {
        $toArray = parent::toArray();
        $toArray['picturePath'] = $this->picturePath;
        return $toArray;
    }

    public function getPicturePathAttribute($value)
    {
        return url('') . Storage::url($this->attributes['picturePath']);
    }
}
