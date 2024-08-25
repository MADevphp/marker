<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Value extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'attribute_id', 'product_id'];

    public array $translatable = ['name'];

    public function valueable(): MorphTo
    {
        return $this->morphTo();
    }
}
