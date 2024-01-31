<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\event;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>'admin',
            'role'=>'admin'
        ]);

        User::create([
            'name'=>'kasir',
            'email'=>'kasir@gmail.com',
            'password'=>'kasir',
            'role'=>'kasir'
        ]);

        User::create([
            'name'=>'owner',
            'email'=>'owner@gmail.com',
            'password'=>'owner',
            'role'=>'owner'
        ]);

        User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>'user',
            'role'=>'user'
        ]);

        event::create([
            'name'=>'Concer dewa 19',
            'image'=>'img/dewa19.jpg',
            'deskripsi'=>'dewa 19 ahmad dani and kawan kawan',
            'date'=>date('Y-m-d', strtotime('2024-5-31')),
            'stock'=>5000,
            'time'=> date('H:i:s', strtotime('19:00')),
            'location'=>'dijalan jalan mana aja ',
            'venue'=>'dimana aja yang kosong',
            'price'=>50.000,
            'status'=>'active'
        ]);

        event::create([
            'name'=>'Concer Jkt 48',
            'image'=>'img/jkt48.jpg',
            'deskripsi'=>'member jkt cuyy',
            'date'=>date('Y-m-d', strtotime('2024-04-08')),
            'stock'=>1000,
            'time'=> date('H:i:s', strtotime('19:00')),
            'location'=>'kec cikembar ',
            'venue'=>'Rumah fazril',
            'price'=>100.000,
            'status'=>'active'
        ]);
        event::create([
            'name'=>'kangen band',
            'image'=>'img/kangenband.jpg',
            'deskripsi'=>'kangen band broww',
            'date'=>date('Y-m-d', strtotime('2024-03-17')),
            'stock'=>5000,
            'time'=> date('H:i:s', strtotime('19:00')),
            'location'=>'dijalan jalan mana aja ',
            'venue'=>'dimana aja yang kosong',
            'price'=>80.000,
            'status'=>'active'
        ]);

        
    }
}
