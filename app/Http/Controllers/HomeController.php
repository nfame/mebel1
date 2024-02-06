<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\Catalog;
use App\Models\Item;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getCatalogs()
    {
        return view('template.admin.catalog.list', [
            // 'data' => Catalog::all()
        ]);
    }

    public function getItems()
    {
        return view('template.admin.items.list', [
            'data' => Item::get()
        ]);
    }
    public function createItems() {

        return view('template.admin.items.create', [
            'item' => Catalog::get(),

        ]);
    }
    public function createItemsStore(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'article' => 'required|numeric',
            'alias' => 'required',
            'color' => 'required',
            'size' => 'required',
            'material' => 'required',
        ]);

        $itemCreate = Item::query()->create([
            'title'         =>  $request->get('title'),
            'desc'          =>  $request->get('desc'),
            'article'       =>  $request->get('article'),
            'alias'         =>  $request->get('alias'),
            'color'         =>  $request->get('color'),
            'size'          =>  $request->get('size'),
            'material'      =>  $request->get('material'),

            'images'        =>  $request->except(['images']),
        ]);

        if ($request->hasFile('images') && $request->file('images')->isValid()) {
            $itemCreate->addMediaFromRequest('images')->toMediaCollection('images');
        }

        $getCatalogs = Catalog::find([$request->get('catalog_id')]);
        $itemCreate->catalogs()->attach($getCatalogs);

        // dd($itemCreate);
        if($itemCreate->save() == true){
            return redirect()->route('admin.catalog.list')->with('message', 'Success');
        }else{
            return redirect()->route('admin.catalog.list')->with('message', 'Error - Check fields');
        }
    }
}
