<?php

namespace App\Imports;

use App\Models\classTable;
use App\Models\file;
use App\Models\subjects;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\HeadingRowImport;

class FileImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public $headings;
    public function import(Request $request)
   {
    //    $this->headings = HeadingRowImport::class;
       $this->headings = (new HeadingRowImport)->toArray($request->file("file"));
       print_r($this->headings);
    }
    public function model(array $row)
    {
        // $data = [];
        // heading rows
        // row of single student data to be inserted
        // row to insert 
        // 
        $headers = array_keys($row);
        // print_r(array_keys($headers));
        // $currsubjects = subjects::all();
        // print_r("r");
        foreach ($headers as $currsubject) {
            print_r($currsubject);
            print_r("here"."\n");
            // print($subject["subject"]."\n");
            $availableSubject = subjects::where("subject", $currsubject)->first();
            // print($subId["id"]."\n");
            // print_r($row[$subject["subject"]]);
            if($availableSubject){

                classTable::create([
                    "name" => $row["names"],
                    "subjects_id" => $availableSubject->id,
                    "mark" => $row[$currsubject]
                ]);
            }

        }
        // foreach 
        // print_r($data);
    }
    // public function getHeaders(SplFileInfo $file)
    // {
        // return ((((Excel::load($file))->all())->first())->keys())->toArray(); // I wrap in 1 line just for fun :)
    // }
}
