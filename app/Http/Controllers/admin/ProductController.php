<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ImageUpload;
use App\Models\Product;
use App\Models\product_color;
use App\Models\product_size;
use App\Models\ProductColorSize;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

use function PHPSTORM_META\type;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::paginate(8);
        
        $collapsed = 'display-products';
        return view('admin2.products.index',compact('products','collapsed'));
    }

    public function create()
    {
        $categories = Category::all();

        $collapsed = 'create-product';

        return view('admin2.products.create',compact('collapsed','categories'));

    }


    public function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'category_id' =>'required'
            ]);


        $product = new Product();
         if($req->file()) {
            $fileName = time().'_'.$req->file('image')->getClientOriginalName();
            $filePath = $req->file('image')->move(public_path('uploads/'),$fileName);
            $product->name = $req->name;
            $product->price = $req->price;
            $product->description = $req->description;
            $product->category_id = $req->category_id;
            $product->image = $fileName;
            $product->save();

        };

        if(isset($req->qte_1)){
            $reversed =  array_reverse($req->all());
            $num_products =  $reversed;
            $second = array_slice($num_products, 1, 1, true);
            $number = explode('_',array_key_first($second) );
            $number = (int)$number[1];


            for ($i=1; $i <= $number ; $i++) {
                $custom_product_color = new product_color();
                $custom_product_size = new product_size();

                $existed_color = product_color::where('color',$req->{'color_' . $i})->where('product_id',$product->id)->first();// RED // BLUE
                if(!$existed_color){ // TRUE // TRUE
                    $custom_product_color->product_id = $product->id;
                    $custom_product_color->color = $req->{'color_' . $i};
                    $custom_product_color->save(); // RED - PRD-1 , BLUE - PRD-1
                }else{
                    $custom_product_color->id = $existed_color->id;
                }

                $existed_size = product_size::where('size',$req->{'size_' . $i})->where('product_id',$product->id)->first(); // XL // XL
                if(!$existed_size){ // TRUE // FALSE
                $custom_product_size->product_id = $product->id;
                $custom_product_size->size = $req->{'size_' . $i};
                $custom_product_size->save(); // XL - PROD-1
                }else{
                    $custom_product_size->id = $existed_size->id;
                }

                $product_color_size = new ProductColorSize();
                $product_color_size->product_size_id = $custom_product_size->id;
                $product_color_size->product_color_id = $custom_product_color->id;
                $product_color_size->quantity = $req->{'qte_' . $i};
                $product_color_size->status = 'pending';
                $product_color_size->save();
            }

                // RED XL , BLUE , XL
            return to_route('admin.products.index');

        }
        else{
            return to_route('admin.products.index');
        }


    }
    public function storeImages(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('uploads'),$imageName);

        $imageUpload = new ImageUpload();
        $imageUpload->image_path = $imageName;
        $imageUpload->product_id =
        $imageUpload->save();
        return response()->json(['success'=>$imageName]);


    }

    public function show(string $id)
    {
        $product = Product::find($id);
        $product_colors = $product->product_colors;
        $product_sizes = $product->product_sizes;
        $product_sizes_colors = $product->product_colors_sizes;
        $collapsed = 'display-products';

        return view('admin2.products.show',compact('product','product_colors','product_sizes','product_sizes_colors','collapsed'));

    }

    public function edit(string $id)
    {
        return view('admin.products.edit');

    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        $product = Product::find($id);
        if($product){
            $product->delete();
            }
        return redirect()->back();
    }
}
