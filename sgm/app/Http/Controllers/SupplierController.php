<?php namespace App\Http\Controllers;
use App\Models\Supplier; use Illuminate\Http\Request;
class SupplierController extends Controller {
    public function index(){ $suppliers=Supplier::paginate(15); return view('suppliers.index',compact('suppliers')); }
    public function create(){ return view('suppliers.create'); }
    public function store(Request $r){ $data=$r->validate(['name'=>'required']); Supplier::create($data); return redirect()->route('suppliers.index')->with('success','Fornecedor criado'); }
    public function show(Supplier $supplier){ return view('suppliers.show',compact('supplier')); }
    public function edit(Supplier $supplier){ return view('suppliers.edit',compact('supplier')); }
    public function update(Request $r,Supplier $supplier){ $data=$r->validate(['name'=>'required']); $supplier->update($data); return redirect()->route('suppliers.index')->with('success','Atualizado'); }
    public function destroy(Supplier $supplier){ $supplier->delete(); return redirect()->route('suppliers.index')->with('success','Removido'); }
}
