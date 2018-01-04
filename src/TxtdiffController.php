<?php

namespace Petar\txtdiff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Petar\txtdiff\TextDiff;

class TxtdiffController extends Controller
{
    public function findDifference(Request $request)
    {
        $text1 = $request->input('text1');
        $text2 = $request->input('text2');

        $diff = TextDiff::render($text1, $text2);
//        echo $diff;
        var_dump($diff);
    }
}
