<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function coa(): HasMany
    {
        return $this->hasMany(ChartOfAccount::class);
    }


    protected $fillable = [
        'nama'
    ];
}
