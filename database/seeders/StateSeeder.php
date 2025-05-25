<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        $states = [
            ['uf_code' => 12, 'name' => 'Acre', 'uf' => 'AC', 'region' => 1],
            ['uf_code' => 27, 'name' => 'Alagoas', 'uf' => 'AL', 'region' => 2],
            ['uf_code' => 16, 'name' => 'Amapá', 'uf' => 'AP', 'region' => 1],
            ['uf_code' => 13, 'name' => 'Amazonas', 'uf' => 'AM', 'region' => 1],
            ['uf_code' => 29, 'name' => 'Bahia', 'uf' => 'BA', 'region' => 2],
            ['uf_code' => 23, 'name' => 'Ceará', 'uf' => 'CE', 'region' => 2],
            ['uf_code' => 53, 'name' => 'Distrito Federal', 'uf' => 'DF', 'region' => 5],
            ['uf_code' => 32, 'name' => 'Espírito Santo', 'uf' => 'ES', 'region' => 3],
            ['uf_code' => 52, 'name' => 'Goiás', 'uf' => 'GO', 'region' => 5],
            ['uf_code' => 21, 'name' => 'Maranhão', 'uf' => 'MA', 'region' => 2],
            ['uf_code' => 51, 'name' => 'Mato Grosso', 'uf' => 'MT', 'region' => 5],
            ['uf_code' => 50, 'name' => 'Mato Grosso do Sul', 'uf' => 'MS', 'region' => 5],
            ['uf_code' => 31, 'name' => 'Minas Gerais', 'uf' => 'MG', 'region' => 3],
            ['uf_code' => 15, 'name' => 'Pará', 'uf' => 'PA', 'region' => 1],
            ['uf_code' => 25, 'name' => 'Paraíba', 'uf' => 'PB', 'region' => 2],
            ['uf_code' => 41, 'name' => 'Paraná', 'uf' => 'PR', 'region' => 4],
            ['uf_code' => 26, 'name' => 'Pernambuco', 'uf' => 'PE', 'region' => 2],
            ['uf_code' => 22, 'name' => 'Piauí', 'uf' => 'PI', 'region' => 2],
            ['uf_code' => 33, 'name' => 'Rio de Janeiro', 'uf' => 'RJ', 'region' => 3],
            ['uf_code' => 24, 'name' => 'Rio Grande do Norte', 'uf' => 'RN', 'region' => 2],
            ['uf_code' => 43, 'name' => 'Rio Grande do Sul', 'uf' => 'RS', 'region' => 4],
            ['uf_code' => 11, 'name' => 'Rondônia', 'uf' => 'RO', 'region' => 1],
            ['uf_code' => 14, 'name' => 'Roraima', 'uf' => 'RR', 'region' => 1],
            ['uf_code' => 42, 'name' => 'Santa Catarina', 'uf' => 'SC', 'region' => 4],
            ['uf_code' => 35, 'name' => 'São Paulo', 'uf' => 'SP', 'region' => 3],
            ['uf_code' => 28, 'name' => 'Sergipe', 'uf' => 'SE', 'region' => 2],
            ['uf_code' => 17, 'name' => 'Tocantins', 'uf' => 'TO', 'region' => 1]
        ];

        foreach ($states as $state) {
            State::create($state);
        }
    }
} 