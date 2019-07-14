<?php

namespace App\Http\Controllers;

use App\GalleryItem;
use App\VideoLink;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $gallery_items = GalleryItem::all();
        $video_links = VideoLink::all();

        return view('main', compact('gallery_items', 'video_links'));
    }

    public function imprint()
    {
        return view('impressum');
    }
}
