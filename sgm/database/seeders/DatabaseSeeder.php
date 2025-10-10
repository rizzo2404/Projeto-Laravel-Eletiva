<?php namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Supplier; use App\Models\Product; use App\Models\Customer;
class DatabaseSeeder extends Seeder {
    public function run(){
        $s1 = Supplier::create(['name'=>'Auto Peças A','phone'=>'(18)9999-0000','cnpj'=>'00.000.000/0001-00']);
        $s2 = Supplier::create(['name'=>'Fornec B','phone'=>'(18)9999-1111']);
        Product::create(['name'=>'Filtro óleo','sku'=>'FIL-001','category'=>'Manutenção','quantity'=>20,'price'=>35.50,'supplier_id'=>$s1->id]);
        Product::create(['name'=>'Pastilha freio','sku'=>'PST-002','category'=>'Freios','quantity'=>15,'price'=>48.90,'supplier_id'=>$s2->id]);
        Customer::create(['name'=>'Cliente Teste','cpf'=>'00000000000','phone'=>'(18)98888-0000','email'=>'cli@ex.com']);
    }
}
