<?php 

namespace App\Bot\Facebook\Templates\QuickReplies\General;
/**
 * Class Options
 * @package  App\Bot\Facebook\Templates\QuickReplies\General
 */
class Options extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Templates\QuickReplies
{

    const PAYLOAD_TEMPLATES = 'payload_quick_reply_options_templates';
    const PAYLOAD_CONVERSATION = 'payload_quick_reply_options_conversation';

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;

        $this->buttons = [
            [
                'content_type' => 'text',
                'title' => 'Templates',
                'payload' => self::PAYLOAD_TEMPLATES,
            ],
            [
                'content_type' => 'text',
                'title' => 'Conversation',
                'payload' => self::PAYLOAD_CONVERSATION,
            ],
        ];
    }

}