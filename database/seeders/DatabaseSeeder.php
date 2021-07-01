<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Note;

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

        //Factory para el usuario, cuando se ejecute el factory va a tomar solamente los datos estaticos del correo y contraseña
        //Y los demás datos como es nombre, etc, los va a tomar de forma fake (aleatoria)
        User::factory()->create([
            'email' => 'chitorra_garcia_98@live.com',
            'password' => bcrypt('123456')
        ]);

        //Se crearán 30 notas fake
        Note::factory(30)->create();
    }
}
