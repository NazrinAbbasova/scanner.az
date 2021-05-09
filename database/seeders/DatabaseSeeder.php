<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $c = new User;
        $c->company = 'ESPORT MMC';
        $c->email = 'info@esport.az';
        $c->phone = '0556000125';
        $c->password = Hash::make('esport125');
        $c->remember_token = Str::random(32);
        $c->type = 'company';
        $c->premium = 0;
        $c->email_verified_at = now();
        $c->save();


        $a = new User;
        $a->firstname = 'Ismayil';
        $a->lastname = 'Mirzayev';
        $a->email = 'ismayil.mirzayev@esport.az';
        $a->phone = '0773293345';
        $a->password = Hash::make('holamigo');
        $a->remember_token = Str::random(32);
        $a->type = 'applicant';
        $a->premium = null;
        $a->email_verified_at = now();
        $a->save();
 
    }
}
