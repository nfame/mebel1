<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Item;

class Catalog extends Model
{
    use HasFactory;

    protected $table = 'catalogs';

    protected $fillable = [
        'title',
        'alias'
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class);
        // return $this->belongsToMany('App\Models\Item');
    }

}
