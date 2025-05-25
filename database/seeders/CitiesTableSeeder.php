<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class CitiesTableSeeder extends Seeder
{
    public function run(): void
    {
        // Primeiro, vamos carregar todos os estados para fazer o mapeamento
        $states = State::all()->keyBy('uf');

        // Lê o arquivo JSON
        $json = File::get(database_path('data/municipios.json'));
        $data = json_decode($json, true);
        $cities = $data['data'];

        // Prepara os dados para inserção em lote
        $citiesToInsert = [];
        foreach ($cities as $city) {
            // Encontra o estado correspondente
            $state = $states->get($city['Uf']);
            if (!$state) {
                continue; // Pula se não encontrar o estado
            }

            $citiesToInsert[] = [
                'code' => $city['Codigo'],
                'name' => $city['Nome'],
                'uf' => $city['Uf'],
                'state_id' => $state->id,
                'created_at' => now(),
                'updated_at' => now(),
            ];

            // Insere em lotes de 1000 para melhor performance
            if (count($citiesToInsert) >= 1000) {
                City::insert($citiesToInsert);
                $citiesToInsert = [];
            }
        }

        // Insere as cidades restantes
        if (!empty($citiesToInsert)) {
            City::insert($citiesToInsert);
        }
    }
}
