<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class PricingPackage extends Model
{
    protected $fillable = [
        'name', 'description', 'price_text', 'price_suffix',
        'features', 'is_featured', 'is_active', 'sort_order',
    ];

    protected function featureList(): Attribute
    {
        return Attribute::make(
            get: fn () => collect(explode("\n", $this->features ?? ''))
                ->map(fn ($line) => trim($line))
                ->filter()
                ->values(),
        );
    }
}