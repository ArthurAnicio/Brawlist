<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brawler;

class TestPoco extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brawler::factory()->create(
            [
                'nome' => 'Poco',
                'titulo' => 'El Mariachi',
                'imagem' => 'https://www.brawlstarsdicas.com.br/wp-content/uploads/2017/06/poco-brawl-stars-dicas.png',
                'categoria' => 'Suporte',
                'raridade' => 'Raro'
            ]);
    }
}
