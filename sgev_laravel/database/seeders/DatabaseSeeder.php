<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Customer;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $c1 = Category::create(['name'=>'Eletrônicos','description'=>'Produtos eletrônicos']);
        $c2 = Category::create(['name'=>'Papelaria','description'=>'Material de escritório']);

        $s1 = Supplier::create(['name'=>'Fornec A','email'=>'a@ex.com']);
        $s2 = Supplier::create(['name'=>'Fornec B','email'=>'b@ex.com']);

        Product::create(['name'=>'Mouse USB','sku'=>'MOUSE-001','price'=>25.00,'stock'=>50,'category_id'=>$c1->id,'supplier_id'=>$s1->id]);
        Product::create(['name'=>'Caderno 100f','sku'=>'CAD-100','price'=>12.50,'stock'=>100,'category_id'=>$c2->id,'supplier_id'=>$s2->id]);

        Customer::create(['name'=>'Cliente Teste','email'=>'cli@ex.com']);
    }
}
