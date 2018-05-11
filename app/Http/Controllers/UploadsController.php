<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Uploads;

class UploadsController extends Controller
{
    /**
     *  Add the study guide to the disk
     *
     *  @param Request $request
     *  @return Response
     */

    public function create(Request $request)
    {
        //dd($request);
        $path = $request->file('Browse')->store('studyGuides/test');

        $upload = new Uploads;

        $upload->filePath = $path;

        $upload->save();

        //redirect('/demo');
    }
}
