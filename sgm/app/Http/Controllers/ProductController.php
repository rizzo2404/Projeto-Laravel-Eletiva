<?php namespace App\Http\Controllers;
use App\Models\Product; use App\Models\Supplier; use Illuminate\Http\Request;
class ProductController extends Controller {
    public function index(){ $products=Product::with('supplier')->paginate(15); return view('products.index',compact('products')); }
    public function create(){ $suppliers=Supplier::all(); return view('products.create',compact('suppliers')); }
    public function store(Request $r){ $data=$r->validate(['name'=>'required','price'=>'required|numeric','quantity'=>'required|integer']); Product::create($data); return redirect()->route('products.index')->with('success','Produto criado'); }
    public function show(Product $product){ return view('products.show',compact('product')); }
    public function edit(Product $product){ $suppliers=Supplier::all(); return view('products.edit',compact('product','suppliers')); }
    public function update(Request $r,Product $product){ $data=$r->validate(['name'=>'required','price'=>'required|numeric','quantity'=>'required|integer']); $product->update($data); return redirect()->route('products.index')->with('success','Atualizado'); }
    public function destroy(Product $product){ $product->delete(); return redirect()->route('products.index')->with('success','Removido'); }
}
