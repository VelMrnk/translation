<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Translate extends Model
{

    public static function getTranslate($word, $from, $to)
    {

        //Create path to languages models
        $fromModel = "App\\".ucfirst($from).'_Word';
        $toModel = "App\\".ucfirst($to).'_Word';

        //Create languages models objects
        $sWord = new $fromModel;
        $tWord = new $toModel;

        if (!isset($sWord)) {

            echo 'Not support sourse language';
        } elseif (!isset($tWord)) {

            echo 'Not support target language';
        }

            else

        {
            //Get  sourse language id
            $sourseLang = Languages::where('name', $from)->get();

            //Get  target language id
            $targetLang = Languages::where('name', $to)->get();

            //Get sourse word id
            $sWord = $sWord->where('word', $word)->get();

                    //Get id's from objects
            $sLangId = $sourseLang[0]['id'];
            $tLangId = $targetLang[0]['id'];
            $sWordId = $sWord[0]['id'];


            //Get result word
            $tWordId = Translations::where('sLangId', $sLangId)->
            where('tLangId', $tLangId)->
            where('sWordId', $sWordId)->
            get();


            if ((count($tWordId) === 0)) {

                $tWordId = Translations::where('sLangId', $tLangId)->
                where('tLangId', $sLangId)->
                where('tWordId', $sWordId)->
                get();

                $tWordId = $tWordId[0]['sWordId'];

            }
                 else
            {
                $tWordId = $tWordId[0]['tWordId'];
            }

            $tWord = $tWord->where('id', $tWordId)->get();
            $tWord = $tWord[0]['word'];

            mb_strtolower($word) === $word ? $result = $tWord : $result = Str::title($tWord);

            $data = array(
                'word' => $word,
                'sourse' => $from,
                'target' => $to,
                'result' =>$result
            );

            return $data;

        }
    }

}
