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
        // \App\Models\User::factory(10)->create();

        $this->call(Metodo_pagoSeeder::class);
        $this->call(DestinoSeeder::class);
        $this->call(ServiciosSeeder::class);

        $this->call(UnidadesSeeder::class);
        $this->call(q_ViajeSeeder::class);
        $this->call(PasajeroSeeder::class);
        $this->call(ReservaSeeder::class);
    }
}
