<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->nullable()->constrained('customers')->nullOnDelete();
            $table->decimal('total', 12, 2)->default(0);
            $table->string('status')->default('PENDING');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('orders');
    }
};
