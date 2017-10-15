<?php 

namespace App\Bot\Facebook\Templates\QuickReplies\Templates;
/**
 * Class Options
 * @package  App\Bot\Facebook\Templates\QuickReplies\Templates
 */
class Options extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Templates\QuickReplies
{

    const PAYLOAD_BUTTON = 'payload_button_template';
    const PAYLOAD_GENERIC = 'payload_button_generic';
    const PAYLOAD_LIST = 'payload_button_list';


    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;

        $this->buttons = [
            [
                'content_type' => 'text',
                'title' => localizator()->translate('test_templates', 'quick_reply_button'),
                'payload' => self::PAYLOAD_BUTTON,
            ],
            [
                'content_type' => 'text',
                'title' => localizator()->translate('test_templates', 'quick_reply_generic'),
                'payload' => self::PAYLOAD_GENERIC,
            ],
            [
                'content_type' => 'text',
                'title' => localizator()->translate('test_templates', 'quick_reply_list'),
                'payload' => self::PAYLOAD_LIST,
            ],
        ];
    }

}
