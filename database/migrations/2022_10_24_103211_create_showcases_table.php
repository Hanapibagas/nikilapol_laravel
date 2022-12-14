<?php

use App\Models\Showcase;
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
        Schema::create('showcases', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });
        Showcase::create(['brand' => 'Hello word', 'title' => 'Ini hanya data dumy', 'description' => 'Silahkan menguhubungi pihak admin untuk mengubahnya']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showcases');
    }
};
