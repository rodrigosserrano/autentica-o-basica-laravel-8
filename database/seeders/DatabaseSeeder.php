<?php

namespace Database\Seeders;

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
        $this->call(Usuarios::class); // essa função chama uma classe que tenha os seeders montados, ou seja, chama o arquivo em database/seeders/Usuarios.php
        // \App\Models\User::factory(10)->create();
    }
}
