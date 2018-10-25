<?php

use Illuminate\Database\Seeder;
use App\Organization;

class OrganizationTableSeeder extends Seeder
{
    public function run()
    {
        Organization::create([
            'name' => 'Евросеть',
            'inn' => '007714617793',
            'address' => '125284, г. Москва, ул. Беговая, д. 2',
            'owner' => 'Евгений Александрович Чичваркин'
        ]);
        Organization::create([
            'name' => 'ЮКОС',
            'inn' => '008604010486',
            'address' => '115054, г. Москва, ул. Дубининская, д. 31А',
            'owner' => 'Михаил Борисович Ходорковский'
        ]);
    }
}