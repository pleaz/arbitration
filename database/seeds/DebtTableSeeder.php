<?php

use Illuminate\Database\Seeder;
use App\Cases;
use App\ObligationType;
use App\Obligation;
use App\LoanType;
use App\LenderType;
use App\Loan;

class DebtTableSeeder extends Seeder
{
    public function run()
    {
        ObligationType::create([
            'name' => 'Налог на прибыль организаций'
        ]);
        ObligationType::create([
            'name' => 'Налог на имущество организаций'
        ]);
        ObligationType::create([
            'name' => 'Налог на доходы физических лиц'
        ]);
        ObligationType::create([
            'name' => 'Транспортный налог'
        ]);
        ObligationType::create([
            'name' => 'Акцизы'
        ]);

        $obligation = new Obligation;

        $obligation->kind = '1'; // 1 или 2 (1 - фл, 2 - ип)
        $obligation->arrears = '1000'; // недоимка
        $obligation->fine = '200'; // пени, штрафы

        $case = Cases::find(1);
        $obligation_type = ObligationType::find(3);

        $obligation->cases()->associate($case);
        $obligation->obligation_type()->associate($obligation_type);

        $obligation->save();


        LoanType::create([
        'name' => 'кредит'
    ]);
        LoanType::create([
            'name' => 'ценные бумаги'
        ]);
        LoanType::create([
            'name' => 'гарантия'
        ]);
        LoanType::create([
            'name' => 'иные'
        ]);

        LenderType::create([
            'name' => 'Сбербанк России'
        ]);
        LenderType::create([
            'name' => 'ВТБ 24'
        ]);
        LenderType::create([
            'name' => 'Восточный'
        ]);
        LenderType::create([
            'name' => 'Совкомбанк'
        ]);

        $loan = new Loan;

        $loan->kind = '1'; // 1 или 2 (1 - фл, 2 - ип)
        $loan->contract = '1234'; // договор
        $loan->arrears = '30000'; // общая задолженность
        $loan->debt = '10000'; // основной долг
        $loan->fine = '5000'; // пени
        $loan->account = '2137837782881373'; // № счета

        $case = Cases::find(1);
        $loan_type = LoanType::find(1);
        $lender_type = LenderType::find(2);

        $loan->cases()->associate($case);
        $loan->loan_type()->associate($loan_type);
        $loan->lender_type()->associate($lender_type);

        $loan->save();

    }
}
