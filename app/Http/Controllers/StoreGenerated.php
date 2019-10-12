<?php

namespace App\Http\Controllers;

use App\Models\GeneratedReport;
use Illuminate\Http\Request;

class StoreGenerated extends Controller
{
    public function store(Request $request){
        $generatedReport = new GeneratedReport();

        $generatedReport->user_id = auth()->user()->id;
        $generatedReport->bi_rads = $request->Score;
        $generatedReport->age = $request->Age;
        $generatedReport->shape = $request->Shape;
        $generatedReport->margin = $request->Margin;
        $generatedReport->density = $request->Density;
        $generatedReport->severity = $request->Result;
        $generatedReport->save();

        return $request;
    }
}
