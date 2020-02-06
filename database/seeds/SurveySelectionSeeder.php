<?php

use Illuminate\Database\Seeder;
use App\Survey;
use App\Selection;
use App\SurveySelection;

class SurveySelectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // survey selection data
        $surveys = Survey::pluck('id');
        $selections = Selection::pluck('id');

        $selection_data = array();
        foreach ($selections as $selection_id) {
            foreach ($surveys as $survey_id) {
                $selection_data[] = [
                    'survey_id' => $survey_id,
                    'selection_id' => $selection_id,
                    'choice' => rand(0, 1),
                ];
            }
        }

        SurveySelection::insert($selection_data);
    }
}
