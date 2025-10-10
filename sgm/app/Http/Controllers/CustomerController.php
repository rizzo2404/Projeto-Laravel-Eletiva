<?php namespace App\Http\Controllers;
use App\Models\Customer; use Illuminate\Http\Request;
class CustomerController extends Controller {
    public function index(){ $customers=Customer::paginate(15); return view('customers.index',compact('customers')); }
    public function create(){ return view('customers.create'); }
    public function store(Request $r){ $data=$r->validate(['name'=>'required']); Customer::create($data); return redirect()->route('customers.index')->with('success','Cliente criado'); }
    public function show(Customer $customer){ return view('customers.show',compact('customer')); }
    public function edit(Customer $customer){ return view('customers.edit',compact('customer')); }
    public function update(Request $r,Customer $customer){ $data=$r->validate(['name'=>'required']); $customer->update($data); return redirect()->route('customers.index')->with('success','Atualizado'); }
    public function destroy(Customer $customer){ $customer->delete(); return redirect()->route('customers.index')->with('success','Removido'); }
}
