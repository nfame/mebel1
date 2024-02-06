<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Catalog;
use App\Models\Item;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alias');
            $table->string('article');
            // $table->text('images');
            $table->text('desc');

            $table->string('color');
            $table->string('size');
            $table->string('material');



            $table->timestamps();
        });

        Schema::create('catalog_item', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->foreignIdFor(Catalog::class)
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->foreignIdFor(Item::class)
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
