<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserStudyGuideController extends Controller
{
    /**
     *  Add the study guide to the disk
     *
     *  @param Request $request
     *  @return Response
     */

    public function update(Request $request)
    {
        $request->file('studyGuide')->store('studyGuides');

        redirect('/demo');
    }
}
