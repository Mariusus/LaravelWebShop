<?php

namespace App\Http\Controllers;


use App\Models\Product;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class createProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('CreateProduct');
    }



    public function store(Request $request)
    {

        Product::create([

            'itemname' => $request->itemname,
            'category' => $request->category,
            'image' => $request->image -> move('storage\productimages'),
            'description' => $request->description,
            'quantity' => $request->quantity,
            'price' => $request->price,
        ]);


     //   $filename = $request -> image ->getClientOriginalName();
      //  dd($filename);
      // $imageurl = Request('image') ->store('productimages', 'public');
     //   $image = $request -> image;
    //    $file_name = $image->getClientOriginalName(); //Get file original name
    //    $destinationPath = 'storage\productimages';
    //  $wowzers => $image->move($destinationPath , $file_name);

   //     $request -> image -> getClientOriginalName() -> move($destinationPath);
      return redirect('/products');

      //  $file = $request->file('image');
     //   $file->storeAs('productimages', "public" . $file->getClientOriginalExtension());
      //  $image = Image::make(public_path("storage/{$imageurl}"))->fit(1200, 1200);

      //  Product::create($data);
      //  dd(Product::all());

    }

    public function showProduct(\App\Models\Product $Product) {

        return view('productShow' , compact('Product'));
    }

    public function update(Product $Product)
    {
        $data = request()->validate([
        'itemname'=>'nullable',
            'description'=>'nullable',
            'image' => 'nullable',
        'quantity'=>'nullable',
            'price'=>'nullable',
            'category'=>'',
    ]);
        if (request('image')) {
            $imgurl = request('image') ->move('storage\productimages');
            $image = Image::make($imgurl);

            $imageArray = ['image' => $imgurl];
        }
        $Product->update(array_merge(
            $data,
            $imageArray ?? []
        ));
       $image->stream();
       return redirect('/products');
    }

    public function delete(Product $Product)
    {
        $Product = Product::find($Product -> id);

        $Product->delete();
        return redirect('/products');
    }
}
