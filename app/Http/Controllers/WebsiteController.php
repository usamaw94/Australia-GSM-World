<?php

namespace App\Http\Controllers;

use App\Product;
use App\QuotationMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    //
    public function products()
    {
        $products = DB::table('products')->orderBy('created_at','DESC')->paginate(8);
//        $products = DB::select('SELECT * FROM products ORDER BY created_at DESC');
        $results = array(
            'products' => $products,
        );
        return view('products')->with($results);
    }

    public function searchProduct(Request $request){
        $productName = $request->product;
        $products = DB::table('products')->where('product_name', 'Like' , '%' . $productName . '%')->orderBy('created_at','DESC')->paginate(500);

        $results = array(
            'productName' => $productName,
            'products' => $products,
        );
        return view('searchProducts')->with($results);
    }

    public function repairs()
    {
        return view('repairs');
    }

    public function unlock()
    {
        return view('unlock');
    }

    public function buySellTrade()
    {
        return view('buySellTrade');
    }

    public function warranty()
    {
        return view('warranty');
    }

    public function shopsLocator()
    {
        return view('shopsLocator');
    }

    public function getAQuote()
    {
        return view('getAQuote');
    }

    public function productDetails($id)
    {
        $product = DB::select('SELECT * FROM products WHERE id=?',[$id]);
        $results = array(
            'product' => $product,
        );
        return view('productDetails')->with($results);
    }

    public function submitQuote(Request $request)
    {
        $m = new QuotationMessage();
        $m->customer_name = $request->name;
        $m->customer_email = $request->email;
        $m->phone = $request->phone;
        $m->suburb = $request->suburb;
        $m->postcode = $request->postcode;
        $m->message_subject = $request->subject;
        $m->message = $request->message;
        $m->msg_status = 'New';
        $saved = $m->save();

        if($saved){
            return view('quoteSubmitted');
        }
    }
}
