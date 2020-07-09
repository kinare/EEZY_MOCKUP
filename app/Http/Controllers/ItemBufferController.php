<?php

namespace App\Http\Controllers;

use App\ItemBuffer;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ItemBufferController extends Controller
{
    public function index(){
        return JsonResource::collection(ItemBuffer::all());
    }

    public function store(Request $request){
        $request->validate([
            'Entry_No' => 'required',
            'Item_No' => 'required',
            'Item_Description' => 'required',
            'Serial_No' => 'required',
            'Lot_No' => 'required'
        ]);
        $item = ItemBuffer::where($request->all())->first();
        if ($item) return response('Item already exist', 303);
        $item = new ItemBuffer();
        $item->fill($request->all());
        $item->save();

        return response('Item saved successfully', 200);
    }
}
