<?php

namespace App\Http\Controllers;

use App\Translate;
use Mockery\CountValidator\Exception;
use Response;

class TranslateController extends Controller {

    public function Index($word, $from, $to)
    {

        $data = Translate::getTranslate($word, $from, $to);

        return Response::json(array(
            'error' => false,
            'data' => $data ),
            200
        );
    }

}