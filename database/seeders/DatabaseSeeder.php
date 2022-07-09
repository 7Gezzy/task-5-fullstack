<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Articles;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



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
            'name' => 'Georger',
            'email' => 'george@mail.com',
            'password' => bcrypt('12345678')
        ]);

        User::create([
            'name' => 'Shrek',
            'email' => 'shrekk@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        Category::create([
            'name' => 'Health',
            'slug' => 'health'
        ]);

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        Articles::create([
            'title' => 'Controlling SARS-CoV-2 in schools using repetitive testing strategies',
            'slug' => 'controlling-sars-cov2',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam quisque id diam vel quam elementum pulvinar etiam non. Faucibus pulvinar elementum integer enim. Iaculis urna id volutpat lacus laoreet non curabitur.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam quisque id diam vel quam elementum pulvinar etiam non. Faucibus pulvinar elementum integer enim. Iaculis urna id volutpat lacus laoreet non curabitur.
            Cras fermentum odio eu feugiat pretium nibh ipsum consequat. Donec massa sapien faucibus et molestie. Sit amet cursus sit amet dictum sit. Neque egestas congue quisque egestas diam in. Tempus urna et pharetra pharetra massa. Posuere sollicitudin aliquam ultrices sagittis. Molestie nunc non blandit massa enim nec dui nunc mattis.
            Tortor posuere ac ut consequat semper viverra. Est placerat in egestas erat imperdiet sed. Eget felis eget nunc lobortis mattis. In vitae turpis massa sed elementum tempus egestas sed sed. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Vivamus arcu felis bibendum ut tristique et egestas. Sem viverra aliquet
            eget sit amet tellus. Lacus viverra vitae congue eu consequat ac felis donec. Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor. Mauris ultrices eros in cursus turpis massa tincidunt. Tristique senectus et netus et malesuada fames ac turpis egestas. Pretium lectus quam id leo in vitae. Eget nulla facilisi etiam dignissim
            diam quis enim. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Fringilla est ullamcorper eget nulla facilisi etiam. Massa id neque aliquam vestibulum morbi blandit cursus risus at.',
            'category_id' => 1,
            'user_id' => 2
        ]);

        Articles::create([
            'title' => 'How do video games provide effective learning Part 1',
            'slug' => 'how-do-video-games-pt1',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam quisque id diam vel quam elementum pulvinar etiam non. Faucibus pulvinar elementum integer enim. Iaculis urna id volutpat lacus laoreet non curabitur.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam quisque id diam vel quam elementum pulvinar etiam non. Faucibus pulvinar elementum integer enim. Iaculis urna id volutpat lacus laoreet non curabitur.
            Cras fermentum odio eu feugiat pretium nibh ipsum consequat. Donec massa sapien faucibus et molestie. Sit amet cursus sit amet dictum sit. Neque egestas congue quisque egestas diam in. Tempus urna et pharetra pharetra massa. Posuere sollicitudin aliquam ultrices sagittis. Molestie nunc non blandit massa enim nec dui nunc mattis.
            Tortor posuere ac ut consequat semper viverra. Est placerat in egestas erat imperdiet sed. Eget felis eget nunc lobortis mattis. In vitae turpis massa sed elementum tempus egestas sed sed. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Vivamus arcu felis bibendum ut tristique et egestas. Sem viverra aliquet
            eget sit amet tellus. Lacus viverra vitae congue eu consequat ac felis donec. Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor. Mauris ultrices eros in cursus turpis massa tincidunt. Tristique senectus et netus et malesuada fames ac turpis egestas. Pretium lectus quam id leo in vitae. Eget nulla facilisi etiam dignissim
            diam quis enim. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Fringilla est ullamcorper eget nulla facilisi etiam. Massa id neque aliquam vestibulum morbi blandit cursus risus at.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Articles::create([
            'title' => 'How do video games provide effective learning Part 2',
            'slug' => 'how-do-games-pt2',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam quisque id diam vel quam elementum pulvinar etiam non. Faucibus pulvinar elementum integer enim. Iaculis urna id volutpat lacus laoreet non curabitur.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quam quisque id diam vel quam elementum pulvinar etiam non. Faucibus pulvinar elementum integer enim. Iaculis urna id volutpat lacus laoreet non curabitur.
            Cras fermentum odio eu feugiat pretium nibh ipsum consequat. Donec massa sapien faucibus et molestie. Sit amet cursus sit amet dictum sit. Neque egestas congue quisque egestas diam in. Tempus urna et pharetra pharetra massa. Posuere sollicitudin aliquam ultrices sagittis. Molestie nunc non blandit massa enim nec dui nunc mattis.
            Tortor posuere ac ut consequat semper viverra. Est placerat in egestas erat imperdiet sed. Eget felis eget nunc lobortis mattis. In vitae turpis massa sed elementum tempus egestas sed sed. Tellus pellentesque eu tincidunt tortor aliquam nulla facilisi cras. Vivamus arcu felis bibendum ut tristique et egestas. Sem viverra aliquet
            eget sit amet tellus. Lacus viverra vitae congue eu consequat ac felis donec. Et pharetra pharetra massa massa ultricies mi quis hendrerit dolor. Mauris ultrices eros in cursus turpis massa tincidunt. Tristique senectus et netus et malesuada fames ac turpis egestas. Pretium lectus quam id leo in vitae. Eget nulla facilisi etiam dignissim
            diam quis enim. Rutrum tellus pellentesque eu tincidunt tortor aliquam. Fringilla est ullamcorper eget nulla facilisi etiam. Massa id neque aliquam vestibulum morbi blandit cursus risus at.',
            'category_id' => 2,
            'user_id' => 1
        ]);
    }
}
