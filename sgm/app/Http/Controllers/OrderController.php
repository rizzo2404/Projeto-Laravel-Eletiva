<?php namespace App\Http\Controllers;
use App\Models\Order; use App\Models\Customer; use App\Models\Product; use Illuminate\Http\Request; use Illuminate\Support\Facades\DB;
class OrderController extends Controller {
    public function index(){ $orders=Order::with('customer')->paginate(15); return view('orders.index',compact('orders')); }
    public function create(){ $customers=Customer::all(); $products=Product::all(); return view('orders.create',compact('customers','products')); }
    public function store(Request $r){
        $r->validate(['items'=>'required|array|min:1','items.*.product_id'=>'required|exists:products,id','items.*.quantity'=>'required|integer|min:1']);
        DB::transaction(function() use($r){
            $order = Order::create(['customer_id'=>$r->customer_id,'total'=>0,'status'=>'OPEN']);
            $total=0;
            foreach($r->items as $it){
                $p = Product::find($it['product_id']);
                if($p->quantity < $it['quantity']) throw new \Exception('Estoque insuficiente para '.$p->name);
                $unit = $p->price;
                $order->items()->create(['product_id'=>$p->id,'quantity'=>$it['quantity'],'unit_price'=>$unit,'subtotal'=>$unit*$it['quantity']]);
                $p->decrement('quantity',$it['quantity']);
                $total += $unit*$it['quantity'];
            }
            $order->update(['total'=>$total]);
        });
        return redirect()->route('orders.index')->with('success','Ordem criada');
    }
    public function show(Order $order){ $order->load('items.product','customer'); return view('orders.show',compact('order')); }
    public function edit(Order $order){ $customers=Customer::all(); $products=Product::all(); return view('orders.edit',compact('order','customers','products')); }
    public function update(Request $r, Order $order){ $data=$r->validate(['status'=>'required']); $order->update($data); return redirect()->route('orders.index')->with('success','Atualizado'); }
    public function destroy(Order $order){ $order->delete(); return redirect()->route('orders.index')->with('success','Removido'); }
}
