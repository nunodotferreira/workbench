<?php 

namespace App\Bot\Facebook\States\Workflow\Test\Templates\Handlers;

use \App\Bot\Facebook\Templates\QuickReplies\Templates\Options as QuickReply;

/**
 * Class Message
 * @package  App\Bot\Facebook\States\Workflow\Test\Templates\Handlers
 */
class Message extends \Botomatic\Engine\Facebook\Abstracts\States\Message\Handler
{

    /**
     * @return bool
     */
    public function isButtonTemplate() : bool
    {
        return $this->message()->postback()->getPayload() == QuickReply::PAYLOAD_BUTTON;
    }

    /**
     * @return bool
     */
    public function isGenericTemplate() : bool
    {
        return $this->message()->postback()->getPayload() == QuickReply::PAYLOAD_GENERIC;
    }

    /**
     * @return bool
     */
    public function isListTemplate() : bool
    {
        return $this->message()->postback()->getPayload() == QuickReply::PAYLOAD_LIST;
    }
}
