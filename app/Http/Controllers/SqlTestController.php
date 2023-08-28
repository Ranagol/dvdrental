<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SqlTestController extends Controller
{
    /**
     * http://127.0.0.1:8000/get-data
     *
     * @return void
     */
    public function getData()
    {
        // echo '*************';
        $t = 8;
        $data = DB::select(
            DB::raw(
                "select * from actor"
            )
        );

        $t = 9;

        return view('postgres', compact('data'));
    }
}
