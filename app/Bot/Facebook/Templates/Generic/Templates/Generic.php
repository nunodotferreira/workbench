<?php 

namespace App\Bot\Facebook\Templates\Generic\Templates;

/**
 * Class Generic
 * @package  App\Bot\Facebook\Templates\Generic\Templates
 */
class Generic extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Templates\Generic
{

    /**
     * @var  array
     */
    public $payloads_templates = [

        [
            'title' => 'Title 1',
            'subtitle' => 'Subtitle',
            'image_url' => 'image url',
            'buttons' => [
                [
                    'type' => 'postback',
                    'title' => 'Title',
                    'payload' => 'payload',
                ]
            ]
        ],
        [
            'title' => 'Title 2',
            'subtitle' => 'Subtitle',
            'image_url' => 'image url',
            'buttons' => [
                [
                    'type' => 'postback',
                    'title' => 'Title',
                    'payload' => 'payload',
                ]
            ]
        ],
    ];

}