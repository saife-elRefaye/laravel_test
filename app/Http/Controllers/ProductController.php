<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private static function getData() {
        return [
            [ 'id' =>1 , 'name' => 'productName1' , 'category' => 'categoryName1' ],
            [ 'id' =>2 , 'name' => 'productName2' , 'category' => 'categoryName2' ],
            [ 'id' =>3 , 'name' => 'productName3' , 'category' => 'categoryName3' ],
            [ 'id' =>4 , 'name' => 'productName4' , 'category' => 'categoryName4' ],
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        // get
        return view
        (
            'product.index',

            [
                'products' => self::getData(),
                'userInput' => 'this is user input'
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        //GET
        $products = self::getData();
        $index = array_search($product, array_column($products,'id'));
        if($index === false){
            abort(404);
        }
        return view('products.show',[
            'product' => $products[$index]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
