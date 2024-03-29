<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Item extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $table = 'items';

    protected $fillable = [
        'title',
        'alias',
        'article',
        'desc',
        'size',
        'color',
        'material',
        //'images',
        'catalogs_id'
    ];

    public function catalogs() {
        return $this->belongsToMany(Catalog::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
              ->width(600)
              ->height(350);
    }

}
