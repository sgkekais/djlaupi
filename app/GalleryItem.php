<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryItem extends Model
{
    //
    protected $table = 'gallery_items';

    protected $fillable = [
        'title',
        'subtitle',
        'imgpath',
    ];
}
