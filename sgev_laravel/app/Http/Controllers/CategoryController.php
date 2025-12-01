<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::paginate(15);
        return view('categories.index', compact('categories'));
    }
    public function create(){ return view('categories.create'); }
    public function store(Request $r){
        $data = $r->validate(['name'=>'required']);
        Category::create($data);
        return redirect()->route('categories.index')->with('success','Categoria criada.');
    }
    public function show(Category $category){ return view('categories.show', compact('category')); }
    public function edit(Category $category){ return view('categories.edit', compact('category')); }
    public function update(Request $r, Category $category){
        $data = $r->validate(['name'=>'required']);
        $category->update($data);
        return redirect()->route('categories.index')->with('success','Categoria atualizada.');
    }
    public function destroy(Category $category){
        $category->delete();
        return redirect()->route('categories.index')->with('success','Categoria removida.');
    }
}
