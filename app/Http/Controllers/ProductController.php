<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
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
        $request->validate([
            'name' => 'required',
            'ar_name' => 'required',
            'price' => 'required',
        ]);
        $input=$request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $fileName=rand(11111,99999).$file->getClientOriginalName();
            $input['image']='images/'.$fileName;
            $file->move('images/',$fileName);
        }
        $input['user_id']=\Auth::user()->id;
        $product=Product::create($input);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product=Product::find($id);
        if($product){
            return view('products.show',compact('product'));

        }
        else{
            flash('Product Not Found')->error();
            return redirect('/');
        }
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
        $product=Product::find($id);
        if($product && ($product->user_id==\Auth::user()->id || \Auth::user()->type=='admin' )){
            return view('products.edit',compact('product'));
        }
        else{
            flash('Product Not Found ')->error();
            return back();
        }
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
        $request->validate([
            'name' => 'required',
            'ar_name' => 'required',
            'price' => 'required',
        ]);
        $product = Product::find($id);
        $input=$request->all();
        if ($product && ($product->user_id==\Auth::user()->id || \Auth::user()->type=='admin' )) {
            if($request->hasFile('image')){
                $file = $request->file('image');
                $fileName=rand(11111,99999).$file->getClientOriginalName();
                $input['image']='images/'.$fileName;
                $file->move('images/',$fileName);
            }
            $product->update($input);
        }
        else{
            flash('Product Not Found ')->error();
            return back();
        }
        flash('Product Updated successfully')->success();

        return redirect('/myproducts');
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
        $product=Product::find($id);
        if($product && ($product->user_id==\Auth::user()->id || \Auth::user()->type=='admin' ) ){
            $product->delete();
            flash('Product Deleted successfully')->success();
            return back();
        }
        else{
            flash('Product Not Found ')->error();
            return back();
        }
    }

    public function myproduct(){
        if(\Auth::user()->type=='admin'){
            $products=Product::all();
        }
        else{
            $products=\Auth::user()->products;
        }
        return view('products.myproduct',compact('products'));
    }

    public function orderproduct($id){
        $product=Product::find($id);
        if($product){
            if($product->user_id==\Auth::user()->id){
                
                flash('You Already have this product')->warning();
                return back();
            }
            else{
                $checkorder=\Auth::user()->orders->where('product_id',$id)->first();
                if($checkorder){
                    flash('You Already ordered this product')->warning();
                    return back();

                }
                else{
                    Order::create([
                        'user_id'=>\Auth::user()->id,
                        'product_id'=>$product->id
                    ]);
                    flash('Product ordered successfully')->success();
                    return back();
                }
                
            }
                

        }
        else{
            flash('Product you ordered Not Found')->error();
            return redirect('/');
        }
    }
}
