<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run()
    {
        // find categories
        $limited     = Category::where('slug', 'limited-editions')->first();
        $precious    = Category::where('slug', 'precious-metals')->first();
        $chrono      = Category::where('slug', 'chronograph-collection')->first();

        // Limited Editions
        $limitedPosts = [
            [
                'title' => 'Shadow Phantom',
                'excerpt' => 'Black-on-black limited design. Only 250 pieces.',
                'content' => 'Black-on-black limited design. Only 250 pieces worldwide. Premium stealth design.',
                'image' => '/Card4_1.jpg'
            ],
            [
                'title' => 'Crimson Royal',
                'excerpt' => 'Deep crimson dial with golden bezel.',
                'content' => 'Deep crimson dial paired with golden bezel. Exclusive design for elite collectors.',
                'image' => '/Card4_2.jpg'
            ],
            [
                'title' => 'Artisan Skeleton',
                'excerpt' => 'Handcrafted open-heart movement.',
                'content' => 'Handcrafted open-heart movement. Transparent design reveals inner mechanics. 100 pieces only.',
                'image' => '/Card4_3.jpeg'
            ],
        ];

        foreach ($limitedPosts as $p) {
            Post::create([
                'category_id' => $limited->id,
                'title' => $p['title'],
                'slug' => Str::slug($p['title']),
                'excerpt' => $p['excerpt'],
                'content' => $p['content'],
                'image' => $p['image'],
            ]);
        }

        // Precious Metals
        $preciousPosts = [
            [
                'title' => 'Gold Masterpiece',
                'excerpt' => '18K gold casing with Swiss movement.',
                'content' => 'Pure 18K gold casing with Swiss automatic movement. A symbol of prestige and timeless class.',
                'image' => '/Card3_1.jpg'
            ],
            [
                'title' => 'Silver Elegance',
                'excerpt' => 'Polished silver, minimalist design.',
                'content' => 'Crafted from polished silver with minimalist dial. Versatile luxury for all occasions.',
                'image' => '/Card3_2.webp'
            ],
            [
                'title' => 'Platinum Heritage',
                'excerpt' => 'Rare platinum, heritage detailing.',
                'content' => 'Rare platinum case with heritage detailing. Limited availability for true collectors.',
                'image' => '/card3_3.png'
            ],
        ];

        foreach ($preciousPosts as $p) {
            Post::create([
                'category_id' => $precious->id,
                'title' => $p['title'],
                'slug' => Str::slug($p['title']),
                'excerpt' => $p['excerpt'],
                'content' => $p['content'],
                'image' => $p['image'],
            ]);
        }
    }
}
