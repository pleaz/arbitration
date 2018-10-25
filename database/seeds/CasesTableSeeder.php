<?php

use Illuminate\Database\Seeder;
use App\Cases;

class CasesTableSeeder extends Seeder
{
    public function run()
    {
        Cases::create([
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patron' => 'Отчество',
            'snils' => '111-111-111-11',
            'inn' => '111111111111',
            'p_serial' => '11 11',
            'p_number' => '111111',
            'p_issuer' => 'ИЧАЛКОВСКИМ РОВД МВД РЕСПУБЛИКИ МОРДОВИЯ',
            'p_date' => '11.11.1969',
            'date_birth' => '11.11.1959',
            'place_birth' => 'с. Ичалки, Ичалковского р-на',
            'index' => '431646',
            'region' => 'Респ. Мордовия',
            'community' => 'с. Кергуды',
            'street' => 'ул. Уличная',
            'house' => 'д. 11',
            'channel' => 'Сарафан',
            'contract' => '11.10.2017',
        ]);
    }
}
