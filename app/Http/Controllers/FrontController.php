<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Settings;

class FrontController extends Controller
{
    public function index(){
        $data['categories'] = Category::all();
        $data['feature_products'] = Product::orderBy('created_at','DESC')->limit(4)->get();
        $data['blogs'] = Blog::orderBy('created_at','DESC')->limit(4)->get();
        // dd($data['feature_products']);
        $data['best_selling_products'] = Product::orderBy('created_at','ASC')->get();
        return view('frontend.index',$data);
    }

    public function about_us()
    {
        $about_us_section = Settings::where('name', 'about_us_section')->first();
    
        if (!$about_us_section) {
            return view('frontend.error')->with('message', 'About section data not found');
        }
    
        $data['about_us_section_data'] = json_decode($about_us_section->value);
    
        return view('frontend.abouts', $data);
    }
    

    public function services(){
      return view('frontend.services');
    }

    public function blog_details($url){
     $data['blog']= Blog::where('url', $url)->firstOrFail();
      return view('frontend.blog_details',$data);
    }
    public function all_product(){
    $data['products'] = Product::get();
      return view('frontend.all_products',$data);
    }

    public function search_product(Request $request){
      $request->validate([
        'name'=>'required'
      ]);
      $searchTerm = $request->name;
      $data['products'] = $product = Product::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
      $data['total_product'] = $product->count();
      return view('frontend.searched_product',$data);
    }
    
}
