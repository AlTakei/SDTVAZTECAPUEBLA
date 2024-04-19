<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Messages\Conversations\Conversation;
use Doctrine\Common\Cache\FilesystemCache;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');
        $botman->hears('{message}', function($botman, $message) {
            if ($message == 'Hola' || $message == 'hola') {
                $this->askName($botman);
            }
            else{
                $botman->reply("Inicia una conversación saludando.");

            }
        });
        $botman->listen();
    }


    public function askName(BotMan $botman)
    {
         // Se define la variable $name dentro de la función
         $name = null;

         // Se solicita el nombre del usuario**
         $question = Question::create('¿Cómo te llamas?');

         $botman->ask($question, function(Answer $answer, $conversation) use (&$name) {

             $name = $answer->getText(); // Se obtiene el nombre del usuario

             // Se agregan los botones antes de la pregunta del área**
             $question = Question::create('¿En qué área trabajas, ' . $name . '?');
             $question->addButtons([
                 Button::create('Ventas')->value('ventas'),
                 Button::create('Administración')->value('administracion'),
                 Button::create('Marketing')->value('marketing'),
                 Button::create('Noticias')->value('noticias'),
                 Button::create('Master')->value('master'),
                 Button::create('Cabina')->value('cabina'),

             ]);


             $conversation->ask($question, function(Answer $answer, $conversation) use (&$name) {
                 $area = $answer->getValue(); // Se obtiene el valor del botón seleccionado
                 switch ($area) {
                     case 'ventas':
                         $this->say('Hola, ' . $name . '. ¿En qué puedo ayudarte con respecto a ventas?');
                         // Pregunta adicional para obtener más información
                         $question = Question::create('¿Qué tipo de problemas tienes?');
                         $question->addButtons([
                             Button::create('Instalación de software')->value('1'),
                             Button::create('Problemas de rendimiento')->value('2'),
                             Button::create('Problemas de internet')->value('3'),
                         ]);

                         $conversation->ask($question, function(Answer $answer, $conversation) {
                             $info = $answer->getValue(); // Se obtiene el valor del botón seleccionado
                             switch ($info) {
                                 case '1':
                                         $this->say('**Software:**');
                                         $question = Question::create('¿Qué software tienes problemas?');
                                         $question->addButtons([
                                             Button::create('Ithik')->value('1'),
                                             Button::create('Teams')->value('2'),
                                             Button::create('Outlook')->value('3'),
                                             Button::create('Otro')->value('4'),
                                         ]);
                                         $conversation->ask($question, function(Answer $answer, $conversation) {

                                             $software = $answer->getValue(); // Se obtiene el valor del botón seleccionado

                                             switch ($software) {
                                                 case '1':
                                                     $this->say('Aquí tienes más información sobre Ithik:');
                                                     $this->say('<a href="https://www.ejemplo.com/areas/problema1" target="_blank">Ithik</a>');
                                                     $this->say('¿Se solucionó tu problema?');
                                                     break;
                                                 case '2':
                                                     $this->say('Aquí tienes más información sobre Teams:');
                                                     $this->say('<a href="https://www.ejemplo.com/areas/problema2" target="_blank">Teams</a>');
                                                     break;
                                                 case '3':
                                                     $this->say('Aquí tienes más información sobre Outlook:');
                                                     $this->say('<a href="https://www.ejemplo.com/areas/problema3" target="_blank">Outlook</a>');
                                                     break;
                                                 case '4':
                                                     $this->say('Por favor, describe tu problema con otro software:');
                                                     $this->say('<a href="https://www.ejemplo.com/areas/problema3" target="_blank">Otro</a>');
                                                     break;
                                             }
                                         });
                                     break;
                                 case 'rendimiento':
                                     $this->say('Aquí tienes más información:');
                                     $this->say('<a href="https://www.ejemplo.com/areas/problema1" target="_blank">Programa travado</a>');
                                     $this->say('<a href="https://www.ejemplo.com/areas/problema2" target="_blank">Calentamiento del equipo</a>');
                                     $this->say('<a href="https://www.ejemplo.com/areas/problema3" target="_blank"></a>');
                                     $this->say('<a href="https://www.ejemplo.com/areas/problema3" target="_blank">Otro</a>');
                                     break;
                                 case 'internet':
                                     $this->say('Aquí tienes más información:');
                                     $this->say('<a href="https://www.ejemplo.com/areas/problema1" target="_blank">Ethernet</a>');
                                     $this->say('<a href="https://www.ejemplo.com/areas/problema2" target="_blank">Wifi</a>');
                                     $this->say('<a href="https://www.ejemplo.com/areas/problema3" target="_blank">Otro</a>');

                                     break;
                             }
                         });

                         break;

                     case 'administracion':
                         $this->say('Hola, ' . $name . '. ¿En qué puedo ayudarte con respecto a administración?');

                         break;

                     case 'marketing':
                         $this->say('Hola, ' . $name . '. ¿En qué puedo ayudarte con respecto a marketing?');
                         // ... código para el área de marketing ...
                         break;

                     case 'noticias':
                         $this->say('Hola, ' . $name . '. ¿Qué tipo de noticias te interesan?');
                         // ... código para el área de noticias ...
                         break;

                     case 'master':
                         $this->say('Hola, ' . $name . '. ¿En qué puedo ayudarte con respecto al área Master?');
                         // ... código para el área Master ...
                         break;

                     case 'cabina':
                         $this->say('Hola, ' . $name . '. ¿En qué puedo ayudarte con respecto a la cabina?');
                         // ... código para el área de cabina ...
                         break;

                     default:
                         $this->say('Lo siento, no entiendo tu respuesta. Por favor, selecciona una de las opciones disponibles.');
                         break;
                 }

                 // ... resto del código para manejar la información del usuario ...
             });
         });
     }


}






