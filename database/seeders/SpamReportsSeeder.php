<?php

namespace Database\Seeders;

use App\Models\SpamReport;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpamReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('spam_reports')->delete();

        $jsonFile = base_path('data/reports.json');
        $data = json_decode(file_get_contents($jsonFile), true);

        foreach ($data['elements'] as $element) {
            SpamReport::create([
                'id' => $element['id'],
                'sourceIdentityId' => $element['sourceIdentityId'],
                'referenceId' => $element['reference']['referenceId'],
                'state' => $element['state'],
                'reportType' => $element['payload']['reportType'],
                'message' => $element['payload']['message'] ?? null,
                'referenceResourceId' => $element['payload']['referenceResourceId'],
                'referenceResourceType' => $element['payload']['referenceResourceType']
            ]);
        }
    }
}
