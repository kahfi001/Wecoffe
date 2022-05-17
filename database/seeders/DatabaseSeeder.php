<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Bagas Dwi Sulistyo',
            'username' => 'bagas12dwi_',
            'email' => 'bag12dwi.s@gmail.com',
            'password' => bcrypt('12345678'),
            'level' => 'admin'
        ]);

        User::create([
            'name' => 'Amirul',
            'username' => 'AmirulGod',
            'email' => 'amirul@gmail.com',
            'password' => bcrypt('12345678'),
            'level' => 'user'
        ]);

        Product::create([
            'nama' => 'Black Coffee',
            'kategori' => 'Bubuk Kopi',
            'harga' => '20000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'black-coffee.png'
        ]);
        Product::create([
            'nama' => 'Boba Fresh Milk',
            'kategori' => 'Bubuk Kopi',
            'harga' => '20000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'boba-fresh-milk.png'
        ]);
        Product::create([
            'nama' => 'Brown Sugar Boba',
            'kategori' => 'Bubuk Kopi',
            'harga' => '20000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'brown-sugar-boba.png'
        ]);
        Product::create([
            'nama' => 'Choco Matcha',
            'kategori' => 'Bubuk Kopi',
            'harga' => '20000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'cocho-matcha.png'
        ]);
        Product::create([
            'nama' => 'Choco Soya',
            'kategori' => 'Bubuk Kopi',
            'harga' => '23000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'cocho-soya.png'
        ]);
        Product::create([
            'nama' => 'Kopi Gula Aren',
            'kategori' => 'Bubuk Kopi',
            'harga' => '18000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'gula-aren.png'
        ]);
        Product::create([
            'nama' => 'Jasmine Tea',
            'kategori' => 'Bubuk Kopi',
            'harga' => '18000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'jasmine-tea.png'
        ]);
        Product::create([
            'nama' => 'Kopi Susu',
            'kategori' => 'Bubuk Kopi',
            'harga' => '15000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'kopi-susu.png'
        ]);
        Product::create([
            'nama' => 'Lemon Tea',
            'kategori' => 'Bubuk Kopi',
            'harga' => '18000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'lemon-tea.png'
        ]);
        Product::create([
            'nama' => 'Mango Tea',
            'kategori' => 'Bubuk Kopi',
            'harga' => '23000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'mango-tea.png'
        ]);
        Product::create([
            'nama' => 'Matcha',
            'kategori' => 'Bubuk Kopi',
            'harga' => '20000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'matcha.png'
        ]);
        Product::create([
            'nama' => 'Oreo Cheese Milkshake',
            'kategori' => 'Bubuk Kopi',
            'harga' => '25000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'oreo-cheese-milkshake.png'
        ]);
        Product::create([
            'nama' => 'Oreo Milkshake',
            'kategori' => 'Bubuk Kopi',
            'harga' => '23000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'oreo-milkshake.png'
        ]);
        Product::create([
            'nama' => 'Red Velvet',
            'kategori' => 'Bubuk Kopi',
            'harga' => '20000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'red-velvet.png'
        ]);
        Product::create([
            'nama' => 'Strawberry Tea',
            'kategori' => 'Bubuk Kopi',
            'harga' => '18000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'strawberry-tea.png'
        ]);
        Product::create([
            'nama' => 'Taro',
            'kategori' => 'Bubuk Kopi',
            'harga' => '20000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'taro.png'
        ]);
        Product::create([
            'nama' => 'Thaitea Cheese',
            'kategori' => 'Bubuk Kopi',
            'harga' => '20000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'thaitea-cheese.png'
        ]);
        Product::create([
            'nama' => 'Yuzu',
            'kategori' => 'Bubuk Kopi',
            'harga' => '24000',
            'penjelasan_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, blanditiis?',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repudiandae ullam veniam doloribus nostrum delectus, eius facilis eum reiciendis. Fugit, autem corrupti ab voluptatem nihil enim quod. Sapiente, dignissimos esse. Quia officiis quasi a architecto officia ab maiores beatae molestias eos optio, alias in nobis, tempore rem! Officiis expedita quis aperiam in quam voluptatem at ipsam, sit nam maiores amet illum sint vero modi esse totam voluptates dolorum, magni dolore corporis doloremque molestias nobis laborum? Reprehenderit iusto dignissimos distinctio ratione.',
            'gambar' => 'yuzu.png'
        ]);
        
    }
}
