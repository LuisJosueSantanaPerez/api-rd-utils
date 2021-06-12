<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AcademicOffer;
use App\Models\Announcement;
use App\Models\AnnouncementDetail;
use App\Models\Aplication;
use App\Models\AplicationDetail;
use App\Models\Province;
use App\Models\Municipality;
use App\Models\Campus;
use App\Models\User;
use App\Models\Institution;
use App\Models\Evaluator;
use App\Models\Offerer;
use App\Models\Candidate;
use App\Models\Coordinator;
use App\Models\EducationLevel;
use App\Models\Evaluation;
use App\Models\EvaluationAnswer;
use App\Models\EvaluationRequirement;
use App\Models\EvaluationResult;
use App\Models\Scholarship;
use App\Models\ScholarshipDetail;
use App\Models\InstitutionOffer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Countries
        $this->call(CountriesSeeder::class);
        $this->call(ProvincesSeeder::class);
        $this->call(MunicipalitiesSeeder::class);
        $this->call(SectorsSeeder::class);

    }
}