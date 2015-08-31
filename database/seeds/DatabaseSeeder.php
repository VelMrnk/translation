<?php

use Illuminate\Database\Seeder;

use App\Languages;
use App\English_Word;
use App\Russian_Word;
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

        Languages::truncate();
        English_Word::truncate();

        Languages::create([
            'name' => 'English'
        ]);

        Languages::create([
            'name' => 'Russian'
        ]);

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
    }
}

