<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $path->store();
        return $path;
        //redirect('/demo');
    }
}
