<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nome'              => 'Eu',
            'matricula'         => '1234',
            'foto'              => 'olkdjnmdçl',
            'patente'           => 'patente',
            'dataNascimento'    => 'lçkjhg',
            'sexo'              => 'sexo',
            'cidade'            => 'co´polkjn',
            'estado'            => 'lkjhg',
            'pelotao'           => 'çlkjh',
            'rg'                =>  'çlkjhnb',
            'cpf'               => 'jkhg',
            'password'             => bcrypt('0909'),
        ]);
    }
}
