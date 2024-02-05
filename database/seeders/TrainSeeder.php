<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        $trains= [
            [
                'id' => 1,
                'azienda' => 'orientexspress',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Istanbul',
                'orario_di_partenza' => '10:00:00',
                'orario_di_arrivo' => '19:00:00',
                'codice_treno' => '48748',
                'numero_carrozze' => 9,
                'cancellato' => 'false',
            ],
            [
                'id' => 2,
                'azienda' => 'frecciarossa',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Parigi',
                'orario_di_partenza' => '12:00:00',
                'orario_di_arrivo' => '22:00:00',
                'codice_treno' => '53427',
                'numero_carrozze' => 14,
                'cancellato' => 'false',
            ],
            [
                'id' => 3,
                'azienda' => 'burunditrain',
                'stazione_di_partenza' => 'Madrid',
                'stazione_di_arrivo' => 'Londra',
                'orario_di_partenza' => '09:00:00',
                'orario_di_arrivo' => '08:00:00',
                'codice_treno' => '90738',
                'numero_carrozze' => 23,
                'cancellato' => 'false',
            ],
            [
                'id' => 4,
                'azienda' => 'trenitalia',
                'stazione_di_partenza' => 'Udine',
                'stazione_di_arrivo' => 'Belgrado',
                'orario_di_partenza' => '15:00:00',
                'orario_di_arrivo' => '15:00:00',
                'codice_treno' => '65738',
                'numero_carrozze' => 16,
                'cancellato' => 'false',
            ],
            [
                'id' => 5,
                'azienda' => 'italomarocchino',
                'stazione_di_partenza' => 'Rabat',
                'stazione_di_arrivo' => 'Marrakesh',
                'orario_di_partenza' => '07:00:00',
                'orario_di_arrivo' => '11:00:00',
                'codice_treno' => '90374',
                'numero_carrozze' => 18,
                'cancellato' => 'false',
            ],
            [
                'id' => 6,
                'azienda' => 'trenoamico',
                'stazione_di_partenza' => 'Mosca',
                'stazione_di_arrivo' => 'Los Angeles',
                'orario_di_partenza' => '08:00:00',
                'orario_di_arrivo' => '19:00:00',
                'codice_treno' => '65783',
                'numero_carrozze' => 6,
                'cancellato' => 'false',
            ],
            
        ];
            
        foreach ($trains as $train) {
            $newTrain = new Train();

            $newTrain->id = $train['id'];
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
            
        }
    }
}