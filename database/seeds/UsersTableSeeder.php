<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,9)->create();
        factory(App\User::class)->create([
        'email' => 'conexionfutbolperu@gmail.com',
        'password' => bcrypt('Aa05200065$')	,
        'type' => 'local'
        ]);
        
        /*
        factory(App\User::class, 50)->create()->each(function ($u) {
        $u->posts()->save(factory(App\Post::class)->make());
        */
    }
}
