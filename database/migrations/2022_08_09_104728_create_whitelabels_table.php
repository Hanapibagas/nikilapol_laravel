<?php

use App\Models\Whitelabel;
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
        Schema::create('whitelabels', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('bantuan');
            $table->string('favicon');
            $table->string('cta');
            $table->string('title');
            $table->string('font');
            $table->string('color');
            $table->string('hover');
            $table->string('active');
            $table->string('alamat');
            $table->string('email');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('tiktok');
            $table->longText('maps');
            $table->text('footer');
            $table->timestamps();
        });
        Whitelabel::create(['logo' => 'Logo NIKILA_Lamongan POL.png', 'bantuan' => 'home-img.png', 'favicon' => 'favicon.ico', 'cta' => 'cta.png', 'title' => 'NikiLa', 'font' => 'Poppins, sans-serif', 'color' => '#1293e4', 'hover' => '#07476f', 'active' => '#09507c', 'alamat' => 'Kantor Bupati Lamongan Timur No.122', 'email' => 'nikila.id', 'twitter' => 'nikila.id', 'facebook' => 'nikila.id', 'instagram' => 'nikila.id', 'youtube' => 'nikila.id', 'tiktok' => 'nikilapo.id', 'maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506756.1161179887!2d112.0322669738155!3d-7.122271213104099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77f3f4943de897%3A0x3027a76e352bd90!2sKabupaten%20Lamongan%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1655787708690!5m2!1sid!2sid', 'footer' => 'Niki Lamongan atau yang disingkat Nikila adalah Super Apps yang menggabungkan Marketplace dan Delivery Order, yang mempunyai tujuan menjadi wadah jualan produk kearifan lokal Kabupaten Lamongan serta untuk meningkatkan PAD (Pendapatan Asli Daerah) Kabupaten.', 'created_at' => now(),]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('whitelabels');
    }
};
