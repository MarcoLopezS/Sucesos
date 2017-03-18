<?php

use Illuminate\Database\Seeder;

class DataUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_profiles')->where('user_id', 1)->update(
            [
                'imagen' => 'icon-users.png',
                'imagen_carpeta' => 'carpeta/'
            ]
        );
    }
}
