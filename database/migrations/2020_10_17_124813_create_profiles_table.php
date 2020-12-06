<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('logo_thumbnail')->nullable();
            $table->string('title_company');
            $table->string('slug');
            $table->longText('desc_company');
            $table->string('about_title');
            $table->longText('about_desc');
            $table->longText('about_visi');
            $table->longText('about_misi');
            $table->string('company_body');
            $table->string('company_news');
            $table->string('company_galery');
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
        Schema::dropIfExists('profiles');
    }
}
