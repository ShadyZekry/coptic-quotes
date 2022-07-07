<?php

use App\Models\Author;
use App\Models\Quote;
use App\Models\Tag;
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
        Author::create(['name' => 'القديس الأنبا أنطونيوس']);
        Tag::create(['name' => 'المحبة']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Author::where('name', 'القديس الأنبا أنطونيوس')->delete();
        Tag::where('name', 'المحبة')->delete();
    }
};
