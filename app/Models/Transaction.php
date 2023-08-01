<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'coa_kode',
        'coa_nama',
        'desc',
        'debit',
        'credit',
    ];
}
