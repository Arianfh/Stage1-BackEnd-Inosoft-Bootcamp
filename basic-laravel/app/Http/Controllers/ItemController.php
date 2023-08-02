<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $itemModel = new Item();
        $items = $itemModel -> get();

        foreach ($items as $item){
            echo "Nama Item : " .$item -> item_name. '<br>';
            echo "Tipe Item : " .$item -> item_type. '<br>';
            echo "Harga Item : " .$item -> item_price. '<br>';
            echo "Deskripsi : " .$item->item_desc. '<br>';
        }
    }

    public function insertPage()
    {
        return view('insertItem');
    }

   /*public function store(Request $request)
    {
        $insertItem = $request->validate([
            'item_name'=>'required|max:50',
            'item_type'=>'required|min:3',
            'item_price'=>'required|numeric',
            'item_desc'=>'required'
        ]);

        $item = Item::create([
            'item_name'=>$insertItem['item_name'],
            'item_type'=>$insertItem['item_type'],
            'item_price'=>$insertItem['item_price'],
            'item_desc'=>$insertItem['item_desc']
        ]);

        $item->save();

        //print_r($insertItem);

        return redirect('item');
    }*/

    public function store(InsertItemRequest $request)
    {
        $post = $request->all();
        
        $insertItem = [
            'item_name'=>$post['item_name'],
            'item_type'=>$post['item_type'],
            'item_price'=>$post['item_price'],
            'item_desc'=>$post['item_desc']
        ];

        $item = Item::create($insertItem);
        $item->save();

        return redirect('item');
    }
}
