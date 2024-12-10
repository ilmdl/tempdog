<?php

namespace App\Http\Controllers;

use App\Imports\FileImport;
use App\Models\classTable;
use App\Models\subjects;
use Http;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Importer;
use Storage;

class fileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = $request->file('file')->storeAs('files/excel/', '1.xls','public');
        $data = Excel::import(new FileImport,$request->file('file'));
        return response()->json([$data, $path]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $names = [
            "Alvan Mulyungi",
            "Kibali Ratego Wendo",
            "Zanie Hawi Omondi",
            "Nadia Kavwengesi Amaitsa",
            "Eliezer Wachira Kariuki",
            "Nate Travis Kimathi",
            "Nixon Munyaka Mbogo",
            "Bruce Otieno Okumu",
            "Samuel Baraka Ondier",
            "Jasmine Nthenya Makau",
            "William Moturi Achang'a",
            "Aiden Kiprotich Kimutai",
            "Leo Koome Kinoti",
            "Precious Wakesho Mghana",
            "Leila Agnes Ombech",
            "Paul Jilani Mramba",
            "David Troy Okwaro",
            "Fadhili Nangabo Ian",
            "Hawi Ogweno",
            "Marcus Jabali Litiema",
            "Aleena Joy Otieno",
            "Hekima Wanjiru Maina",
            "Nathan Ribiru",
            "Merab Hawi Zalo",
            "Makoi Adeng Chayor",
            "Rehema Gladys Ochieng",
            "Laquisha Mueni Mutua",
            "Ellah Victoria Wavinya Musyoka",
            "Gabriella Gift Obiero",
            "Adora Angel Otieno",
            "Didier Motiri Abuga",
            "Achiek Garang Chol",
            "Daniel Taavi Mwendwa",

        ];
        // $data = classTable::where("name", $names[0])->get(["name", "subjects_id", "id"])->union();
        $data = classTable::select("name","subject", "mark")->join("subjects","subjects.id", "=", 'subjects_id')->where("name",$names[0])->get();
        $response = Http::post('http://127.0.0.1:10000/CalcSingle', [
            response()->json($data)
            ]);
        return $response;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
