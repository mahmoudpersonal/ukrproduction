<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            ['name' => 'Dr Heriberto Busquier', 'position' => 'Consultant Neuroradiology', 'bio' => '', 'image' => 'img/team/dr_heriberto.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Zoltan Nagi', 'position' => 'Cross sectional/Head of Body imaging', 'bio' => '', 'image' => 'img/team/dr_zoltan.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Harish Nagraj', 'position' => 'MSK consultant/cross sectional', 'bio' => '', 'image' => 'img/team/dr_harish.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Prof Fernando R Santiago', 'position' => 'Head of MSK sección HVN Granada', 'bio' => '', 'image' => 'img/team/prof_fernando.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Nameet Hattangadi', 'position' => 'Cross sectional Radiologist', 'bio' => '', 'image' => 'img/team/dr_hattangadi.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Khalid Hussein', 'position' => 'Cross sectional/Prostate and Pelvic imaging', 'bio' => '', 'image' => 'img/team/dr_khalid.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Ali Mteirek', 'position' => 'Cross sectional/CT Colonography', 'bio' => '', 'image' => 'img/team/dr_ali.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Krishna Bellam-Premnath', 'position' => 'Cross sectional/Vascular Imaging', 'bio' => '', 'image' => 'img/team/dr_krishna.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Elie Sleiman', 'position' => 'Cross sectional/MSK', 'bio' => '', 'image' => 'img/team/dr_elie.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Seetharaman Cannane', 'position' => 'Consultant Radiologist', 'bio' => '', 'image' => 'img/team/unnamed2.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Michael Siafakas', 'position' => 'Consultant Breast Radiologist', 'bio' => '', 'image' => 'img/team/dr_siafakas.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Hashim Samir', 'position' => 'Cross sectional/Oncology', 'bio' => '', 'image' => 'img/team/dr_samir.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Mar Rodriguez Vazquez Del Rey', 'position' => 'Consultant Paediatrician', 'bio' => '', 'image' => 'img/team/dra_rodriguez.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr José Miguel Rosales Zábal', 'position' => 'Consultant Gastroenterologist', 'bio' => '', 'image' => 'img/team/dr_rosales.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Dr Ibrahim Hamad', 'position' => 'Consultant pneumologist', 'bio' => '', 'image' => 'img/team/dr_hamad.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
            ['name' => 'Prof Majed J. Katati', 'position' => 'Prof of Neurosurgery', 'bio' => '', 'image' => 'img/team/prof_katati.jpg', 'email' => '', 'linkedin' => '', 'twitter' => ''],
        ]);
    }
}
