<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Catalog;
use Intervention\Image\Facades\Image;

class MainController extends Controller
{
    public function homepage()
    {

        return view('template.sait.page.home', [
            'items' => Item::get()->random(5),
            'cats' => Catalog::get()
        ]);
    }

    public function getCatalogList()
    {
        $cats = Catalog::all();
        return view('template.sait.page.catalog.list', compact('cats'));
    }

    public function getCatalog($catname)
    {
        $cats = Catalog::where('alias', $catname)->with('items')->first();

        if (!$cats) {
            abort(404, 'Не найден ресурс');
        }

        return view('template.sait.page.catalog', compact('cats'))->with('alias', $catname)->with('items');
    }

    public function getItemsForList( $alias)
    {
        // $item = Item::where('alias', $alias)->with('catalogs')->firstOrFail();
        $item = Item::whereHas('catalogs', function ($catalog) use($alias)
        { $catalog->where('alias', $alias);})
        ->with('catalogs')->first();

        if (!$item) {
            abort(404, 'Не найден ресурс');
        }

        // dd($alias);

        return view('template.sait.page.catalog.view', compact('item'))->with('alias', $alias);
    }

    public function contacts()
    {
        return view('template.sait.page.contacts');
    }
}
