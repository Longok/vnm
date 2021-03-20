<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\CategoryRequest;
use App\Category;
use App\Product;
use App\Slide;
use Session;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        $products = Product::orderBy('id','desc')->paginate(16);
        $slides = Slide::all();
        return view('index', compact('categorys','products','slides'));
    }

    public function detail($id)
    {
        $products = Product::where('category_id',$id)->get();
        return view('home.detail-product', compact('products'));
    }

}
