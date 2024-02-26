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
            'name'=>'JKT48 Christmas Concert',
            'image'=>'img/jkt48.jpg',
            'deskripsi'=>'Konser JKT48 adalah sebuah acara musik yang menampilkan penampilan dari grup idola populer JKT48, yang berbasis di Jakarta, Indonesia. Konser ini biasanya menampilkan serangkaian lagu-lagu dari repertoar JKT48, dengan tarian, koreografi yang energik, dan interaksi langsung antara anggota grup dan penggemar',
            'date'=>date('Y-m-d', strtotime('2024-04-08')),
            'stock'=>1000,
            'time'=> date('H:i:s', strtotime('19:00')),
            'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.0415102062543!2d106.85745967506843!3d-6.125116360058773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1fa3823b7263%3A0x9fc9c0986c6adaf9!2sJakarta%20International%20Stadium%20(JIS)!5e0!3m2!1sid!2sid!4v1707972345339!5m2!1sid!2sid ',
            'venue'=>'Jakarta Intermational Stadium (JIS)',
            'price'=>100000,
            'status'=>'active'
        ]);
        
        event::create([
            'name'=>'Kangen Band: Special Performance',
            'image'=>'img/kangenband.jpg',
            'deskripsi'=>'
            Konser Kangen Band adalah sebuah acara musik yang menampilkan penampilan dari grup musik populer Kangen Band. Kangen Band dikenal dengan lagu-lagu romantis dan sentuhan pop rock yang khas. Konser ini biasanya menyajikan pengalaman live yang memukau bagi para penggemar dengan energi panggung yang menggebu dan penyampaian lagu-lagu yang penuh emosi.',
            'date'=>date('Y-m-d', strtotime('2024-03-17')),
            'stock'=>5000,
            'time'=> date('H:i:s', strtotime('19:00')),
            'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126919.01153274733!2d106.73542055677852!3d-6.234822592761187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5e5f1d2d2c9%3A0xef492dbaf253d7e0!2sJakarta%20Concert%20Hall!5e0!3m2!1sid!2sid!4v1708909715007!5m2!1sid!2sid ',
            'venue'=>'Jakarta Concert Hall',
            'price'=>150000,
            'status'=>'active'
        ]);
        event::create([
            'name'=>'Rizki Febian: Live in Concert',
            'image'=>'img/iki.jpg',
            'deskripsi'=>'Konser Rizki Febian adalah sebuah acara musik yang menampilkan penampilan dari Rizki Febian, seorang penyanyi dan musisi populer asal Indonesia. Rizki Febian dikenal dengan gaya musiknya yang segar dan penampilannya yang karismatik di atas panggung. Konser ini biasanya menyajikan campuran dari lagu-lagu hits Rizki Febian, yang mencakup berbagai genre seperti pop, R&B, dan balada.',
            'date'=>date('Y-m-d', strtotime('2024-06-25')),
            'stock'=>5000,
            'time'=> date('H:i:s', strtotime('19:00')),
            'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31736.462562049932!2d106.81979041063968!3d-6.12292083617562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1e17cf58f74f%3A0x504262ac57884abe!2sAncol%2C%20Kec.%20Pademangan%2C%20Jkt%20Utara%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1708910135089!5m2!1sid!2sid ',
            'venue'=>'Ancol',
            'price'=>100000,
            'status'=>'active'
        ]);
        event::create([
            'name'=>'Tulus Monokrom Concert',
            'image'=>'img/tulus.jpg',
            'deskripsi'=>'
            Konser Tulus adalah sebuah pengalaman musik yang memukau yang menampilkan penampilan dari Tulus, seorang penyanyi dan musisi terkenal dari Indonesia. Konser ini memanjakan para penonton dengan musik yang penuh emosi, lirik yang mendalam, dan suara merdu dari Tulus. ',
            'date'=>date('Y-m-d', strtotime('2024-04-28')),
            'stock'=>5000,
            'time'=> date('H:i:s', strtotime('19:00')),
            'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7035864344857!2d107.63384717507873!3d-6.925991167792484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7d88aeed35f%3A0xdf443774b81b3d40!2sTrans%20Convention%20Center%2C%20Cibangkong%2C%20Kec.%20Batununggal%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1708910500643!5m2!1sid!2sid ',
            'venue'=>'Trans Convention Center ',
            'price'=>100000,
            'status'=>'active'
        ]);
        event::create([
            'name'=>'NDX A.K.A: Hip-Hop Dangdut Experience',
            'image'=>'img/ndx.jpeg',
            'deskripsi'=>'Konser dari NDX A.K.A adalah sebuah acara musik yang menampilkan penampilan dari grup musik yang terkenal dengan genre dangdut rap ini. Konser ini biasanya menyuguhkan pengalaman panggung yang energik dan penuh semangat, dengan lagu-lagu yang memadukan elemen-elemen dari dangdut tradisional dengan rap modern.',
            'date'=>date('Y-m-d', strtotime('2024-12-09')),
            'stock'=>5000,
            'time'=> date('H:i:s', strtotime('17:00')),
            'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7919293943505!2d110.36062412509102!3d-7.811837427564849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5739525ede4d%3A0x1759713f6a304135!2sAlun-Alun%20Kidul%20Yogyakarta!5e0!3m2!1sid!2sid!4v1708910774831!5m2!1sid!2sid',
            'venue'=>'Alun-Alun Kidul Yogyakarta ',
            'price'=>100000,
            'status'=>'active'
        ]);
        event::create([
            'name'=>'Last Child: Our Biggest Concert',
            'image'=>'img/lastChild.jpeg',
            'deskripsi'=>'Last Child dikenal dengan lagu-lagu yang penuh emosi dan lirik yang kuat, dan konser mereka menjadi wadah bagi para penggemar untuk merasakan secara langsung kekuatan musik mereka. Dengan penampilan yang intens dan interaksi yang hangat antara band dan penonton, konser Last Child seringkali menjadi momen yang tak terlupakan bagi para penggemar dan pencinta musik rock di Indonesia.',
            'date'=>date('Y-m-d', strtotime('2024-13-17')),
            'stock'=>5000,
            'time'=> date('H:i:s', strtotime('16:00')),
            'location'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6934978550503!2d117.15189787913857!3d-0.45321953407981275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df678bee0de7005%3A0x240a525cac51f3fb!2sStadion%20Sempaja!5e0!3m2!1sid!2sid!4v1708911021135!5m2!1sid!2sid',
            'venue'=>'Stadion Sempaja ',
            'price'=>100000,
            'status'=>'active'
        ]);

        
    }
}
