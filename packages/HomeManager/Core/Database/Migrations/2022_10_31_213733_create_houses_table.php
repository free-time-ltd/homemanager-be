<?php

use App\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Country::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('city');
            $table->string('address');
            $table->string('zip_code')->nullable();
            $table->decimal('lat', 10, 8)->default(0)->nullable();
            $table->decimal('lng', 11, 8)->default(0)->nullable();
            $table->integer('apartments_total')->nullable();
            $table->text('notes')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
