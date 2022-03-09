<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dipendente;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dipendente = new Dipendente([
            "id" => 10002,
            "birthDate" => "1964-06-01",
            "firstName" => "Bezalel",
            "lastName" => "Simmel",
            "gender" => "F",
            "hireDate" => "1985-11-20",
        ]);
        $dipendente->save();

        $dipendente = new Dipendente([
            "id" => 10003,
            "birthDate" => "1959-12-02",
            "firstName" => "Parto",
            "lastName" => "Bamford",
            "gender" => "M",
            "hireDate" => "1986-08-27",
        ]);
        $dipendente->save();

        $dipendente = new Dipendente([
            "id" => 10004,
            "birthDate" => "1954-04-30",
            "firstName" => "Chirstian",
            "lastName" => "Koblick",
            "gender" => "M",
            "hireDate" => "1986-11-30",
        ]);
        $dipendente->save();
        
        $dipendente = new Dipendente([
            "id" => 10005,
            "birthDate" => "1955-01-20",
            "firstName" => "Kyoichi",
            "lastName" => "Maliniak",
            "gender" => "M",
            "hireDate" => "1989-09-11",
        ]);
        $dipendente->save();

        $dipendente = new Dipendente([
            "id" => 10001,
            "birthDate" => "1953-09-01",
            "firstName" => "Georgi",
            "lastName" => "Facello",
            "gender" => "M",
            "hireDate" => "1986-06-25",
        ]);
        $dipendente->save();
    }
}
