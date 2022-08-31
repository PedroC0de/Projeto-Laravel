<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor -> nome='aaaaa';
        $fornecedor -> site='aaaa';
        $fornecedor -> uf='aaaaaaa';
        $fornecedor -> email='aaaaaaaaa';
        $fornecedor->save();
    }
}
