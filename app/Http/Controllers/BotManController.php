<?php
namespace App\Http\Controllers;
   
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
   
class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');
   
        $botman->hears('{message}', function($botman, $message) {
   
            if ($message == 'hi') {
                $this->askName($botman);
            }
            
    
            if ($message == 'age') {
                $this->askAge($botman);
            }

            if($message == '1') {
                $this->Karibu($botman);
            }
            
   
        });
   
        $botman->listen();
    }
   
    /**
     * Place your BotMan logic here.
     */

    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
   
            $name = $answer->getText();
   
            $this->say('Nice to meet you '.$name .'  press 1 for Swahili and 2 for English..');

            // $this->askAge($botman);
        });
    }
    
    // for asking age..
    public function askAge($botman)
    {
        $botman->ask('Hello! What is your Age ?', function(Answer $answer) {
            $age = $answer->getText();

            $this->say('Nice to know your age which is '.$age );

        });

    }


    // For chosing swahili
    public function Karibu($botman)
    {
        $botman->ask('Habari! Karibu katika tovuti yetu,<br> unahitaji huduma gani ?', function(Answer $answer) {
            $age = $answer->getText();

            $this->say('Nice to know your age which is '.$age );

        });

    }

}
    
