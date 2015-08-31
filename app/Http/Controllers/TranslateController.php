<?php

namespace App\Http\Controllers;

use App\Russian_Word;
use Response;
use App\English_Word;
use App\Translations;
use App\User;
use App\Languages;
use Illuminate\Database\Eloquent\Model;



class TranslateController extends Controller {

    public function Index($word, $from, $to)
    {

        //Create object for called language
        switch ($from) {
            case 'english':
                $sWord = new English_Word();
                break;
            case 'russian':
                $sWord = new Russian_Word();
                break;
        }

        switch ($to) {
            case 'english':
                $tWord = new English_Word();
                break;
            case 'russian':
                $tWord = new Russian_Word();
                break;
        }


        //Get  sourse language id
        $sourseLang = Languages::where('name', $from)->take(1)->get();

        //Get  target language id
        $targetLang = Languages::where('name', $to)->take(1)->get();

        //Get sourse word id
        $sWord = $sWord->where('word', $word)->take(1)->get();

        //Get id's from objects
        $sLangId = $sourseLang[0]['id'];
        $tLangId = $targetLang[0]['id'];
        $sWordId = $sWord[0]['id'];

        //Get result word
        $tWordId = Translations::where('sLangId', $sLangId)->
                                    where('tLangId', $tLangId)->
                                        where('sWordId', $sWordId)->
                                            take(5)->
                                                get();

        $tWord = $tWord->where('id', $tWordId[0]['id'])->take(2)->get();

        $result = $tWord[0]['word'];

        $data = array(
            'word' => $word,
            'sourse' =>$from,
            'target' =>$to,
            'result' =>$result
        );

        return Response::json(array(
            'error' => false,
            'data' => $data),
            200
        );




    }

}