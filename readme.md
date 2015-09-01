Example Api Version 1.0 01/09/2015
----------------------------------

This api is using for translate words.
At start api have some test data.
--------------------------------
For install api you must use files:

-App/Http/routs.php
-App/Controllers/TranslateController.php
-App/Translate.php


For use api with default databes architecture you must:
-Configure your database in files .env and config/database.php
-Add files English_Word, French_Word, Russian_Word, Languages, Translate in folder app/
-For create your database use file database/migration and command 'php artisan migrate'
-For create test data use file database/seeds and command 'php artisan db:seed'


If you want to add new languages you must:
-Create your new migration called like 'php make:migration create_language_table',
but if you want to use seeds you must use command create_language_word_table
-Configure migration( add fields ) and use 'php artisan migrate'
-Then you must add file with your language to app/ called Language.php, if you use seeds call it Language_Word.php. 
For example, if you want to add Spanish you must use command create_spanish_table, if you need seeds, use create_spanish_word_table

If you didn use seeds call all your tables by Language name, but if you use seeds you must call it Language__Word, like Spanish__Word 
with two '_'

Then add your data to tables, (language) and (translations)

Last what you need to do is open App/Translate.php and add your new languages to switch fields and call class.
For example: 

switch (strtolower($from)) {
            
            case 'spanish':
                $sWord = new Spanish_Word();
                break;
        }

        switch (strtolower($to)) {
            case 'spanish':
                $tWord = new Spanish_Word();
                break;
        }


e-mail: valentinemurnik@gmail.com
