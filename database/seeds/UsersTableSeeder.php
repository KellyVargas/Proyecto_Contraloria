<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table((new \App\User)->getTable())->delete();

        $user = factory(App\User::class)->create([
            'email' => 'admin@admin.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
        ]);

        Model::reguard();
    }
}
