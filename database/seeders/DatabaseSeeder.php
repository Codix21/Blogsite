<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
   public function run()
{
    Category::truncate(); // همه رکوردهای جدول حذف می‌شوند
    // سه کتگوری
    $c1 = Category::firstOrCreate(
    ['slug' => 'chronograph'], // شرط یکتا
    ['name' => 'CHRONOGRAPH COLLECTION'] // سایر ستون‌ها
);

    $c2 = Category::create([
        'slug' => 'metals',
        'name' => 'PRECIOUS METALS'
    ]);

    $c3 = Category::create([
        'slug' => 'limited',
        'name' => 'LIMITED EDITIONS'
    ]);

    // پست‌های نمونه کتگوری اول
    Post::create([
        'category_id' => $c1->id,
        'title' => 'Chrono Gold',
        'excerpt' => 'مدل طلایی کرنوگراف…',
        'content' => 'متن کامل درباره Chrono Gold...',
        'image' => null,
    ]);

    Post::create([
        'category_id' => $c1->id,
        'title' => 'Steel Chrono',
        'excerpt' => 'مدل استیل کلاسیک…',
        'content' => 'متن کامل درباره Steel Chrono...',
        'image' => null,
    ]);

    Post::create([
        'category_id' => $c1->id,
        'title' => 'Minimal Black',
        'excerpt' => 'مدل مشکی مینیمال…',
        'content' => 'متن کامل درباره Minimal Black...',
        'image' => null,
    ]);

    // سه پست برای کتگوری دوم
    Post::factory()->count(3)->create(['category_id' => $c2->id]);

    // سه پست برای کتگوری سوم
    Post::factory()->count(3)->create(['category_id' => $c3->id]);
}
}
