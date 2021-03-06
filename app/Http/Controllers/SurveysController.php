<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Survey;
use App\Selection;
use App\SurveySelection;
use Illuminate\Support\Facades\Auth;
use PDF;

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
        $date = to_indo_day(date('N')) .', '. to_indo_date(date('Y-m-d'), 1);

        return view('survey.create', compact('selections', 'date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selections = Selection::all();
        $this->validate($request, [
            'kodeBangunan' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'nama_gedung' => 'required',
        ]);
        //Handle File Upload
        if ($request->hasFile('foto')) {
            // Get filename with the extension
            $filenameWithExtension  = $request->file('foto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('foto')->getClientOriginalExtension();
            //Filename to store;
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
        } else {
            $filenameToStore = 'noImage.jpg';
        }
        //Upload Image
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->storeAs('public/foto', $filenameToStore);
        }
        $survey = new Survey;
        $survey->user_id = auth()->user()->id;
        $survey->kode = $request->kodeBangunan;
        $survey->latitude = $request->latitude;
        $survey->longitude = $request->longitude;
        $survey->tanggal = $request->tanggal;
        $survey->youtube_id = $request->youtube_id;
        $survey->pemilik_gedung = $request->pemilik_gedung;
        $survey->nama_gedung = $request->nama_gedung;
        $survey->fungsi_gedung = $request->fungsi_gedung;
        $survey->klasifikasi_gedung = $request->klasifikasi_gedung;
        $survey->lokasi_gedung = $request->lokasi_gedung;
        $survey->jumlah_lantai = $request->jumlah_lantai;
        $survey->ketinggian = $request->ketinggian;
        $survey->luas_lantai = $request->luas_lantai;
        $survey->luas_lantai_dasar = $request->luas_lantai_dasar;
        $survey->luas_tanah = $request->luas_tanah;
        $survey->surat_bukti = $request->surat_bukti;
        $survey->pptk = $request->pptk;
        $survey->ppk = $request->ppk;
        $survey->tahun_anggaran = $request->tahun_anggaran;
        $survey->cara_pelaksanaan = $request->cara_pelaksanaan;
        $survey->youtube_id = $request->youtube_id;
        $survey->foto = $filenameToStore;
        $survey->save();
        foreach ($selections as $selection) {
            $survey_selection = new SurveySelection;
            $survey_selection->survey_id = $survey->id;
            $survey_selection->selection_id = $selection->id;
            $survey_selection->choice = $request['selection_' . $selection->id];
            $survey_selection->description = $request['selection_' . $selection->id . '_desc'];
            $survey_selection->save();
        }
        return redirect('/gedung')->with('success', 'Data Survey Telah Ditambahkan');
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
        $survey_selections = SurveySelection::where('survey_id', $id)->get();
        return view('survey.show', ['survey' => $survey,  'survey_selections' => $survey_selections]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $selections = Selection::all();
        $survey = Survey::find($id);
        $survey_selections = SurveySelection::where('survey_id', $id)->get();
        return view('survey.edit', ['selections' => $selections, 'survey' => $survey, 'survey_selections' => $survey_selections]);
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
        if ($request->hasFile('foto')) {
            // Get filename with the extension
            $filenameWithExtension  = $request->file('foto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('foto')->getClientOriginalExtension();
            //Filename to store;
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('foto')->storeAs('public/foto', $filenameToStore);
        }
        $survey = Survey::find($id);
        $survey->user_id = auth()->user()->id;
        $survey->kode = $request->kodeBangunan;
        $survey->latitude = $request->latitude;
        $survey->longitude = $request->longitude;
        $survey->tanggal = $request->tanggal;
        $survey->youtube_id = $request->youtube_id;
        $survey->pemilik_gedung = $request->pemilik_gedung;
        $survey->nama_gedung = $request->nama_gedung;
        $survey->fungsi_gedung = $request->fungsi_gedung;
        $survey->klasifikasi_gedung = $request->klasifikasi_gedung;
        $survey->lokasi_gedung = $request->lokasi_gedung;
        $survey->jumlah_lantai = $request->jumlah_lantai;
        $survey->ketinggian = $request->ketinggian;
        $survey->luas_lantai = $request->luas_lantai;
        $survey->luas_lantai_dasar = $request->luas_lantai_dasar;
        $survey->luas_tanah = $request->luas_tanah;
        $survey->surat_bukti = $request->surat_bukti;
        $survey->pptk = $request->pptk;
        $survey->ppk = $request->ppk;
        $survey->tahun_anggaran = $request->tahun_anggaran;
        $survey->cara_pelaksanaan = $request->cara_pelaksanaan;
        $survey->youtube_id = $request->youtube_id;
        if ($request->hasFile('foto')) {
            $survey->foto = $filenameToStore;
        }
        $survey->save();
        $surveys_selections = SurveySelection::where('survey_id', $id)->get();
        foreach ($surveys_selections as $selection) {
            $s_selection = SurveySelection::find($selection->id);
            $s_selection->choice = $request['selection_' . $selection->selection->id];
            $s_selection->description = $request['selection_' . $selection->selection->id . '_desc'];
            $s_selection->save();
        }
        return redirect('/gedung')->with('success', 'Data Survey Telah Diubah');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $survey = Survey::findOrFail($id);
        $survey->selections()->detach();
        $survey->delete();

        return back()->with('success', 'Berhasil menghapus data bangunan');
    }

    public function print($id)
    {
        $data = Survey::findOrFail($id);
        return view('survey.print', compact('data'));

        $pdf  = PDF::loadView('survey.print', $data);
        $kode = str_replace(".", "_", $data->kode);

        return $pdf->download('cetak_siabanggp_' . $kode . '.pdf');
    }
}
