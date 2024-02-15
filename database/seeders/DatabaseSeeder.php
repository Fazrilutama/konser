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
            'price'=>50000,
            'status'=>'active'
        ]);

        event::create([
            'name'=>'Concer Jkt 48',
            'image'=>'img/jkt48.jpg',
            'deskripsi'=>'member jkt cuyy',
            'date'=>date('Y-m-d', strtotime('2024-04-08')),
            'stock'=>1000,
            'time'=> date('H:i:s', strtotime('19:00')),
            'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0415102062543!2d106.85745967506843!3d-6.125116360058773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1fa3823b7263%3A0x9fc9c0986c6adaf9!2sJakarta%20International%20Stadium%20(JIS)!5e0!3m2!1sid!2sid!4v1707972345339!5m2!1sid!2sid ',
            'venue'=>'Jakarta Intermational Stadium (JIS)',
            'price'=>100000,
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
