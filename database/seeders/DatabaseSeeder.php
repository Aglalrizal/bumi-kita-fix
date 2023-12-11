<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Student;
use App\Models\Campaign;
use App\Models\Category;
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
        $this->call([
            ProvinsiSeeder::class,
            KotaSeeder::class
        ]);
        User::create([
            'name' => 'Aglalrizal',
            'username' => 'Aglalrizal',
            'dob'=>fake()->dateTime(),
            'email' => 'aglalrizal@upi.edu',
            'address' => 'Purwakarta',
            'noHp' => '0812345678',
            'account-type'=> 'personal',
            'password' => bcrypt('12345678')
        ]);

        // User::create([
        //     'name' => 'Rizal Aglal Faozi',
        //     'email' => 'rizalaglalfaoji017@gmail.com',
        //     'password' => bcrypt('123456')
        // ]);
        User::factory(4)->create();

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
        Campaign::factory(40)->create();
        Post::factory(30)->create();
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
