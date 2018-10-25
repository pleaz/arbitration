<?php

use Illuminate\Database\Seeder;
use App\EstateType;
use App\Estate;
use App\Cases;

class EstateTableSeeder extends Seeder
{
    public function run()
    {
        EstateType::create([
            'name' => 'Земля'
        ]);
        EstateType::create([
            'name' => 'Жилье'
        ]);

        $estate = new Estate;

        $case = Cases::find(1);
        $estate_type = EstateType::find(2);

        $estate->cases()->associate($case);
        $estate->estate_type()->associate($estate_type);

        $estate->name = 'Стол';
        $estate->since = '1990';
        $estate->quantity = 1;
        $estate->price = '2000';

        $estate->save();

    }
}
