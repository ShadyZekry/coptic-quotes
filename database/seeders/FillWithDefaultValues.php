<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Source;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class FillWithDefaultValues extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::insert(
            [
                ['name' => 'أبونا بيشوى كامل', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'الأنبا أنطونيوس', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'الأنبا باخوميوس أب الشركة', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'الأنبا بولا أول السواح', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'الأنبا شنودة رئيس المتوحدين', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'الأنبا مكاريوس الكبير', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'الأنبا موسى الأسود', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'البابا أثناسيوس الرسولى', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'البابا شنودة الثالث', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'البابا كيرلس السادس', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'الشهيد الأنبا كبريانوس أسقف قرطاجنة', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'الشيخ الروحانى (القديس يوحنا سابا)', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'القديس أغسطينوس', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'القديس إكليمندس الإسكندرى', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'القديس ثيوفان الناسك', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'القديس ماراسحق السريانى', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'القديس مارافرام السريانى', 'created_at' => now(), 'updated_at' => now()],
            ]
        );

        Tag::create(['name' => 'المحبة']);
        Source::create(['name' => 'كتاب بستان الرهبان']);
    }
}
