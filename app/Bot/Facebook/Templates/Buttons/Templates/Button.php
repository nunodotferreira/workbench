<?php 

namespace App\Bot\Facebook\Templates\Buttons\Templates;

/**
 * Class Button
 * @package  App\Bot\Facebook\Templates\Buttons\Templates
 */
class Button extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Templates\Button
{
    /**
     * @var  string
     */
    public $title = 'Title';

    /**
     * @var  array
     */
    public $buttons = [
        [
            'type' => 'postback',
            'title' => 'Title',
            'payload' => 'payload',
        ]
    ];
}

