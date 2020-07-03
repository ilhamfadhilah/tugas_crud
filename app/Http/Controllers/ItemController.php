<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;



// $ItemModel = new ItemModel(); membuat object instance manual
// $ItemModel->get_all();

class ItemController extends Controller
{
    //
    public function index(){
        $items = ItemModel::get_all(); //menggunakan statik function
        // dd($items);
        return view('items.index', compact('items'));
        // return view('items.index', ['items' => $items]); //menggunakan array assosiative
    }

    public function create(){
        return view('items.form');
    }

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        // dd($data);
        $items = ItemModel::save($data);
        // dd($items);
        if($items){
            return view('item.index', compact('items'));
        }
    }

}
