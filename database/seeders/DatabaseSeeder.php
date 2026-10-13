<?php

namespace Database\Seeders;

use App\Models\Airline;
use App\Models\Flight;
use App\Models\Travel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory(10)->create();
        Airline::factory(10)->create();
        Flight::factory(10)->create();

        // összetett kulcs (flight_id, user_id) miatt egyedi párok kellenek
        $pairs = Flight::all()->pluck('id')
            ->crossJoin(User::all()->pluck('id'))
            ->shuffle()
            ->take(10);

        foreach ($pairs as [$flightId, $userId]) {
            Travel::factory()->create([
                'flight_id' => $flightId,
                'user_id' => $userId,
                'evaluation' => fake()->randomElement(['foglalva', 'lemondva', 'fizetve']),
            ]);
        }
        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */
    }
}
