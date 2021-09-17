<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Season;
use App\Models\Product;
use App\Models\Images;
use App\Models\Brand;
use App\Models\Collections;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('tiamo'); 
   }
    public function show($id){
        
        $product = Product::findOrFail($id);
        $viewed = session()->get('viewed', []); 
        if(!isset($viewed[$id])) {
        $viewed[$id] = [ "name" => $product->name_product, "quantity" => 1, "images" => $product->images ,"id"=>$product->id];
        } 
        session()->put('viewed', $viewed);
       return view('card', compact('product'));
    }
    public function catalog() { 
        $products=Product::paginate(9);
        return view('catalog', compact('products')); 
    }
    public function catalogstyle($id) { 
         $categ=Category::find($id);
         $products=$categ->products()->paginate(9);
             return view('catalog', compact('products'));
     }
     public function catalogbrand($id) { 
        /*  $products = Product::paginate(9); */
         /* $products = Product::all()->categories()->where('category_id',1); */
 /*         $products = Product::all()->categories()->where('category_id',1);*/
         $brands=Brand::find($id);
         $products=$brands->products()->paginate(9);
             return view('catalog', compact('products'));
     }
     public function catalogcollection($id) { 
        /*  $products = Product::paginate(9); */
         /* $products = Product::all()->categories()->where('category_id',1); */
 /*         $products = Product::all()->categories()->where('category_id',1);*/
         $products=Product::where('typeProduct_id',$id)->get();
             return view('catalog', compact('products'));
     }
    public function cart() {
         return view('cart'); 
    }
    public function addToCart($id) { 
/*         $id = $request->input('id');
        $radio = $request->input('name'); */
        $product = Product::findOrFail($id); 
        $cart = session()->get('cart', []); 
        if(isset($cart[$id])) {
        $cart[$id]['quantity']++; 
        } 
        else { 
            $cart[$id] = [ "name" => $product->name_product, "quantity" => 1, "price" => $product->price, "images" => $product->images ]; 
        }
        session()->put('cart', $cart); 
        return redirect()->back()->with('success', 'Product added to cart successfully!'); 
    }
    public function addToWish($id) { 
        /*         $id = $request->input('id');
                $radio = $request->input('name'); */
                $product = Product::findOrFail($id); 
                $wish = session()->get('wish', []); 
                if(isset($wish[$id])) {
                $wish[$id]['quantity']++; 
                } 
                else { 
                    $wish[$id] = [ "name" => $product->name_product, "quantity" => 1, "price" => $product->price, "images" => $product->images ]; 
                }
                session()->put('wish', $wish); 
                return redirect()->back()->with('success', 'Product added to wishlist successfully!'); 
            }
    public function addToViewed($id) { 
        $product = Product::findOrFail($id); 
        $viewed = session()->get('viewed', []); 
        if(isset($viewed[$id])) {
        $viewed[$id]['quantity']++;
        } 
        else { 
            $viewed[$id] = [ "name" => $product->name_product, "images" => $product->images ]; 
        }
        session()->put('viewed', $viewed); 
    }
    public function update(Request $request) { 
        if($request->id && $request->quantity){
             $cart = session()->get('cart'); 
             $cart[$request->id]["quantity"] = $request->quantity; 
             session()->put('cart', $cart); 
             session()->flash('success', 'Cart updated successfully'); 
            } 
        }
    public function removecart(Request $request) { 
        if($request->id) {
             $cart = session()->get('cart'); 
             if(isset($cart[$request->id])) { 
                 unset($cart[$request->id]); 
                 session()->put('cart', $cart);  
                }
                 session()->flash('success', 'Product removed successfully'); 
                }
             }
             public function removewish(Request $request) { 
                if($request->id) {
                     $wish = session()->get('wish'); 
                     if(isset($wish[$request->id])) { 
                         unset($wish[$request->id]); 
                         session()->put('wish', $wish); 
                        }
                         session()->flash('success', 'Product removed successfully'); 
                        }
                     }
}
