<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Repositories\ItemRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemRepository = new ItemRepository();

        return response()->json([
            'items' => $itemRepository->all()
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'product_name' => 'required',
            'product_price' => 'required',
            'product_qty' => 'required',
            'product_img_url' => 'required'
        ]);

        $itemRepository = new ItemRepository();
        $item = new Item($request->all());
        $itemRepository->add($item);
        
        return response()->json([
            'message' => sprintf("Item stored succesfully. %s", $item->product_qty)
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemRepository = new ItemRepository();
        
        if ($itemRepository->delete($id)) {
            return response()->json([
                'message' => sprintf("Item [%s] deleted succesfully.", $id)
            ], 200);
        } 

        return response()->json([
            'error' => sprintf("Item [%s] do not exist.", $id)
        ], 400);
    }
}
