<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Student::factory(100)->create();

        // Student::factory(100)->create([
        //     'name' => fake()->name,
        //     'score' => random_int(1, 100),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        // User::create([
        //     'name' => 'Aglalrizal',
        //     'email' => 'aglalrizal@upi.edu',
        //     'password' => bcrypt('123456')
        // ]);

        // User::create([
        //     'name' => 'Rizal Aglal Faozi',
        //     'email' => 'rizalaglalfaoji017@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam accusamus... ',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam accusamus tempora beatae aspernatur facilis obcaecati architecto consequuntur, voluptas rem molestias quas cum eveniet quasi pariatur, alias soluta molestiae tempore nihil consectetur recusandae dolor esse. Autem quisquam unde cum modi eligendi odit ipsum officia harum ullam architecto tempore at sed, tenetur eaque quae omnis. Sint facere nobis nisi perferendis commodi magnam sunt, aperiam praesentium ipsum voluptatum quidem adipisci vel aut cupiditate dolorum asperiores itaque id in ipsam hic soluta nihil? Nulla, delectus. Dolore adipisci recusandae culpa ratione voluptatibus soluta nulla perferendis quos. Exercitationem ipsum ipsam itaque eos. Maiores perspiciatis illo maxime.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam accusamus... ',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam accusamus tempora beatae aspernatur facilis obcaecati architecto consequuntur, voluptas rem molestias quas cum eveniet quasi pariatur, alias soluta molestiae tempore nihil consectetur recusandae dolor esse. Autem quisquam unde cum modi eligendi odit ipsum officia harum ullam architecto tempore at sed, tenetur eaque quae omnis. Sint facere nobis nisi perferendis commodi magnam sunt, aperiam praesentium ipsum voluptatum quidem adipisci vel aut cupiditate dolorum asperiores itaque id in ipsam hic soluta nihil? Nulla, delectus. Dolore adipisci recusandae culpa ratione voluptatibus soluta nulla perferendis quos. Exercitationem ipsum ipsam itaque eos. Maiores perspiciatis illo maxime.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam accusamus... ',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam accusamus tempora beatae aspernatur facilis obcaecati architecto consequuntur, voluptas rem molestias quas cum eveniet quasi pariatur, alias soluta molestiae tempore nihil consectetur recusandae dolor esse. Autem quisquam unde cum modi eligendi odit ipsum officia harum ullam architecto tempore at sed, tenetur eaque quae omnis. Sint facere nobis nisi perferendis commodi magnam sunt, aperiam praesentium ipsum voluptatum quidem adipisci vel aut cupiditate dolorum asperiores itaque id in ipsam hic soluta nihil? Nulla, delectus. Dolore adipisci recusandae culpa ratione voluptatibus soluta nulla perferendis quos. Exercitationem ipsum ipsam itaque eos. Maiores perspiciatis illo maxime.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam accusamus... ',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam accusamus tempora beatae aspernatur facilis obcaecati architecto consequuntur, voluptas rem molestias quas cum eveniet quasi pariatur, alias soluta molestiae tempore nihil consectetur recusandae dolor esse. Autem quisquam unde cum modi eligendi odit ipsum officia harum ullam architecto tempore at sed, tenetur eaque quae omnis. Sint facere nobis nisi perferendis commodi magnam sunt, aperiam praesentium ipsum voluptatum quidem adipisci vel aut cupiditate dolorum asperiores itaque id in ipsam hic soluta nihil? Nulla, delectus. Dolore adipisci recusandae culpa ratione voluptatibus soluta nulla perferendis quos. Exercitationem ipsum ipsam itaque eos. Maiores perspiciatis illo maxime.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
