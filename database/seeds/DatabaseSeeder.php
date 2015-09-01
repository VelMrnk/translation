<?php

use Illuminate\Database\Seeder;

use App\Languages;
use App\English_Word;
use App\Russian_Word;
use App\French_Word;
use App\Translations;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('LanguageSeeder');
        $this->call('EnglishSeeder');
        $this->call('RussianSeeder');
        $this->call('FrenchSeeder');
        $this->call('TranslationSeeder');
    }
}


class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Languages::truncate();

        Languages::create([
            'name' => 'English'
        ]);

        Languages::create([
            'name' => 'Russian'
        ]);

        Languages::create([
            'name' => 'French'
        ]);

    }
}

class EnglishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        English_Word::truncate();

        English_Word::create([
            'word' => 'bird'
        ]);

        English_Word::create([
            'word' => 'cup'
        ]);

        English_Word::create([
            'word' => 'pullover'
        ]);

    }
}

class RussianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Russian_Word::truncate();

        Russian_Word::create([
            'word' => 'Птица'
        ]);

        Russian_Word::create([
            'word' => 'Чашка'
        ]);

        Russian_Word::create([
            'word' => 'Свитер'
        ]);
    }
}

class FrenchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        French_Word::truncate();

        French_Word::create([
            'word' => 'oiseau'
        ]);

        French_Word::create([
            'word' => 'cuo'
        ]);

        French_Word::create([
            'word' => 'arrêtez-vous'
        ]);

    }
}


class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Translations::truncate();

        Translations::create([
            'sLangId' => '1',
            'tLangId' => '2',
            'sWordId' => '1',
            'tWordId' => '1'
        ]);

        Translations::create([
            'sLangId' => '1',
            'tLangId' => '2',
            'sWordId' => '2',
            'tWordId' => '2'
        ]);

        Translations::create([
            'sLangId' => '1',
            'tLangId' => '2',
            'sWordId' => '3',
            'tWordId' => '3'
        ]);


        Translations::create([
            'sLangId' => '1',
            'tLangId' => '3',
            'sWordId' => '2',
            'tWordId' => '1'
        ]);

        Translations::create([
            'sLangId' => '2',
            'tLangId' => '3',
            'sWordId' => '2',
            'tWordId' => '2'
        ]);

        Translations::create([
            'sLangId' => '3',
            'tLangId' => '2',
            'sWordId' => '3',
            'tWordId' => '3'
        ]);
    }
}

