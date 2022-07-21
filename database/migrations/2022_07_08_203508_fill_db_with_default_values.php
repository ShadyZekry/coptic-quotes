<?php

use App\Models\Author;
use App\Models\Source;
use App\Models\Tag;
use Database\Seeders\DefaultDBValues;
use Database\Seeders\FillWithDefaultValues;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Artisan;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Artisan::call('db:seed', ['--class' => FillWithDefaultValues::class]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Author::truncate();
        Tag::truncate();
        Source::truncate();
    }
};
