<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SqlTestController extends Controller
{
    /**
     * /sql-tests
     *
     * @return void
     */
    public function getData()
    {

        $data = 'test';

        return view('postgres', compact('data'));
    }
}
