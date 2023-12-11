<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'type'];

    public $translatable = ['name'];

    protected $casts = [
        'type' => 'array'
    ];


    public function value()
    {
        return $this->morphMany(Value::class, 'valuable');
    }


}
