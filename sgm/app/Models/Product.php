<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model {
    protected $table='products';
    protected $fillable=['name','sku','category','quantity','price','supplier_id'];
    public function supplier(){ return $this->belongsTo(Supplier::class); }
    public function items(){ return $this->hasMany(OrderItem::class); }
}
