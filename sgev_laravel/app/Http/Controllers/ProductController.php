<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with(['category','supplier'])->paginate(15);
        return view('products.index', compact('products'));
    }
    public function create(){
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.create', compact('categories','suppliers'));
    }
    public function store(Request $r){
        $data = $r->validate([
            'name'=>'required',
            'sku'=>'required|unique:products,sku',
            'price'=>'required|numeric',
            'stock'=>'required|integer'
        ]);
        Product::create($data);
        return redirect()->route('products.index')->with('success','Produto criado.');
    }
    public function show(Product $product){
        return view('products.show', compact('product'));
    }
    public function edit(Product $product){
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('products.edit', compact('product','categories','suppliers'));
    }
    public function update(Request $r, Product $product){
        $data = $r->validate([
            'name'=>'required',
            'sku'=>'required|unique:products,sku,'.$product->id,
            'price'=>'required|numeric',
            'stock'=>'required|integer'
        ]);
        $product->update($data);
        return redirect()->route('products.index')->with('success','Produto atualizado.');
    }
    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('products.index')->with('success','Produto removido.');
    }
}
