<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exceptions\MyCustomException;

class TriggerExceptionController extends Controller
{
    public function trigger(): void
    {
        $t = 8;
        try {
            throw new MyCustomException();

        //This catch will only catch MyCustomException
        } catch (MyCustomException $error) {
            echo 'My error message: ' . $error->getMessage() . '<br>';
            echo 'The error was triggered in this file: ' . $error->getFile(). '<br>';
            echo 'The error was triggered on this line: ' . $error->getLine(). '<br>';
        }
    }
}
