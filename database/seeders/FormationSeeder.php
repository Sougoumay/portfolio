<?php

namespace Database\Seeders;

use App\Models\Formation;
use Illuminate\Database\Seeder;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Formation::query()->create([
            "title" => "Classe préparatoire intégrée dans une école d'ingénieur",
            "institution" => "École Nationale des Sciences Appliquées",
            "city" => "Tétouan",
            "country" => "Maroc",
            "start_date" => "2019",
            "end_date" => "2021",
        ]);

        Formation::query()->create([
            "title" => "Licence MIAGE(Méthodes Informatiques appliquées à la gestion des entreprises)",
            "institution" => "Collegium Sciences et Techniques | Université d'Orléans",
            "city" => "Orléans",
            "country" => "France",
            "start_date" => "2021",
            "end_date" => "2023",
        ]);

        Formation::query()->create([
            "title" => "Master MIAGE(Méthodes Informatiques appliquées à la gestion des entreprises)",
            "institution" => "Collegium Sciences et Techniques | Université d'Orléans",
            "city" => "Orléans",
            "country" => "France",
            "start_date" => "2023",
            "end_date" => "2025",
        ]);
    }
}
