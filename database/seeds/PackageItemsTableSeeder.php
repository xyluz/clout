<?php

use Illuminate\Database\Seeder;
use App\Models\CloutPackagesItems;

class PackageItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        CloutPackagesItems::create([
            'clout_package_id'=>1,
            'package_item_name'=>'Radio Plays',
            'package_item_description'=>'30+ nation wide radio plays for 30 days',
            'package_item_available_count'=>30
        ]);

        CloutPackagesItems::create([
            'clout_package_id'=>1,
            'package_item_name'=>'Radio Interviews',
            'package_item_description'=>'10 or more Radio interviews across the CoolFM, Wazobia FM & Nigeria info FM stations in all Geopolitical zones across the country',
            'package_item_available_count'=>10
        ]);

        CloutPackagesItems::create([
            'clout_package_id'=>1,
            'package_item_name'=>'Music Distribution',
            'package_item_description'=>'get music distributed by clout team and a fair and flexible rate',
            'package_item_available_count'=>1
        ]);
        CloutPackagesItems::create([
            'clout_package_id'=>1,
            'package_item_name'=>'Radio play-listing',
            'package_item_description'=>'Radio play-listing on the biggest show segments of the biggest OAPs across the country ',
            'package_item_available_count'=>1
        ]);

        CloutPackagesItems::create([
            'clout_package_id'=>1,
            'package_item_name'=>'Published Articles',
            'package_item_description'=>'Editorial features on published articles via the cool fm, Wazobia fm, and Nigeria info websites',
            'package_item_available_count'=>10
        ]);

        CloutPackagesItems::create([
            'clout_package_id'=>2,
            'package_item_name'=>'Radio Plays',
            'package_item_description'=>'103 nation wide radio plays for 30 days',
            'package_item_available_count'=>103
        ]);

        CloutPackagesItems::create([
            'clout_package_id'=>2,
            'package_item_name'=>'Personalization',
            'package_item_description'=>'Short url codes for new music and personal web profile ',
            'package_item_available_count'=>1
        ]);

        CloutPackagesItems::create([
            'clout_package_id'=>2,
            'package_item_name'=>'Spotlight Documentary',
            'package_item_description'=>'Spotlight documentary aired across digital platforms of 3 radio stations worth 8 million follower-ship on Instagram, Twitter & Facebook',
            'package_item_available_count'=>1
        ]);

        CloutPackagesItems::create([
            'clout_package_id'=>2,
            'package_item_name'=>'Radio Interview',
            'package_item_description'=>'10 or more Radio interviews across the CoolFM, Wazobia FM & Nigeria info FM stations in all Geopolitical zones across the country',
            'package_item_available_count'=>10
        ]);
        CloutPackagesItems::create([
            'clout_package_id'=>2,
            'package_item_name'=>'Music Distribution',
            'package_item_description'=>'get music distributed by clout team and a fair and flexible rate',
            'package_item_available_count'=>1
        ]);
        CloutPackagesItems::create([
            'clout_package_id'=>2,
            'package_item_name'=>'Radio play-listing',
            'package_item_description'=>'Radio play-listing on the biggest show segments of the biggest OAPs across the country ',
            'package_item_available_count'=>1
        ]);
        CloutPackagesItems::create([
            'clout_package_id'=>2,
            'package_item_name'=>'Editorial Features',
            'package_item_description'=>'Editorial features on published articles via the cool fm, Wazobia fm, and Nigeria info websites',
            'package_item_available_count'=>1
        ]);
        

    }
}
