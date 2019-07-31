<?php

use Illuminate\Database\Seeder;
use App\Models\CloutPackages;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        CloutPackages::create([
            'package_name'=>'Clout',
            'package_description'=>'Ideal for music artistes that want to promote their music with the Lagos crowd specifically.',
            'package_location'=>'Lagos',
            'package_price'=>'200000'
        ]);

        CloutPackages::create([
            'package_name'=>'More Clout',
            'package_description'=>'If you are looking to gain clout with your music with audiences from Lagos, Port-harcourt, Onitsha, Abuja & Kano',
            'package_location'=>'Nation Wide',
            'package_price'=>'250000'
        ]);

        CloutPackages::create([
            'package_name'=>'Music Production',
            'package_description'=>'Record · Mix · Master',
            'package_location'=>'Nation Wide',
            'package_price'=>'30000'
        ]);

        CloutPackages::create([
            'package_name'=>'Branding',
            'package_description'=>'Photoshoot · Graphics · Moodboard',
            'package_location'=>'Nation Wide',
            'package_price'=>'100000'
        ]);
    }
}
