<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Selection;
use App\SurveySelection;

class SurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surveys = Survey::orderBy('kode')->get(['id', 'kode', 'tanggal', 'nama_gedung', 'latitude', 'longitude']);
        return view('survey.index', compact('surveys'));
    }
    /**
     * Get all data from database
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        $surveys = Survey::all();
        return response()->json(['status' => '200', 'message' => 'Sukses', 'surveys' => $surveys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selections = Selection::all();
        return view('survey.create', compact('selections'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $survey = Survey::find($id);
        $selections = Selection::all();
        $survey_selections = [];
        foreach ($selections as $selection) {
            $survey_selections[] = SurveySelection::where([
                'survey_id' => $id,
                'selection_id' => $selection->id
            ])->get(['choice', 'description']);
        }
        return view('survey.show', ['survey' => $survey, 'selections' => $selections, 'survey_selections' => $survey_selections]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
