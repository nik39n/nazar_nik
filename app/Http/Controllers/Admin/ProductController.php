<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Images;
use App\Models\ProductCategory;
use App\Models\ProductBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductRequest;




class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::paginate(10);
        return view('auth.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $brands = Brand::get();
        $categories = Category::get();
        return view('auth.products.form', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $params = $request->all();

        
        $request->validate([]);
        if ($request->has('image')) {
            $params['image'] = $request->file('image')->store('products');

        }
        $path = $request->file('image')->store('products');

        $params = $request->all();
        
        $params['image'] = $path;

        $tempd = Product::create($params);
        $tempid=$tempd['id'];
        $params['product_id'] = $tempid;
        
        Images::create($params);

        foreach ($params['category_id'] as $value) {
            $params['category_id']=$value;
            ProductCategory::create($params);
        }
        foreach ($params['brand_id'] as $value) {
            $params['brand_id']=$value;
            ProductBrand::create($params);
        }


        




        
        return redirect()->route('products.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $images = Images::where('product_id', $product->id)->get();
        $productbrands = ProductBrand::where('product_id',$product->id)->get();
        $productcategories = ProductCategory::where('product_id',$product->id)->get();
        $brands =[];
        $categories =[];
        foreach ($productbrands as $value) {
            $brandname = Brand::select('name')->where('id',$value['brand_id'])->get();
            array_push($brands, $brandname);    
        }
        foreach ($productcategories as $value) {
            $categoryname = Brand::select('name')->where('id',$value['category_id'])->get();
            array_push($categories, $categoryname);    
        }
        
        
        return view('auth.products.show', compact('product', 'brands', 'images','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $brands = Brand::get();
        $categories = Category::get();
        
        return view('auth.products.form', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // $params = $request->all();
        // unset($params['image']);
        // if ($request->has('image')) {
        //     Storage::delete($product->image);
        //     $params['image'] = $request->file('image')->store('products');
        // }
        // $imageObj = Images::where('product_id',$product['id'])->get();
        // foreach ($imageObj as $value) {
        //     $value->update(['image'=>'123']);
        // }

        // $imageObj = Images::where('product_id',$product['id'])->get();

        // dd($imageObj);
        
        ProductCategory::where('product_id',$product->id)->delete();
        ProductBrand::where('product_id',$product->id)->delete();
        if ($request->file('image') == null) {
            $path = "";
        } else {
            $path = $request->file('image')->store('products');
        }
        $params = $request->all();
        
        $params['image'] = $path;
        
        $params['product_id'] = $product['id'];
        // dd($params);
        if(array_key_exists('category_id',$params)){
            foreach ($params['category_id'] as $value) {
                $params['category_id']=$value;
                ProductCategory::create($params);
            }
        };
        if(array_key_exists('brand_id',$params)){
            foreach ($params['brand_id'] as $value) {
                $params['brand_id']=$value;
                ProductBrand::create($params);
            }
        };
        



        foreach (['new', 'hit', 'recommend'] as $fieldName) {
            if (!isset($params[$fieldName])) {
                $params[$fieldName] = 0;
            }
        }
        Images::create($params);

        $product->update($params);
        

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
