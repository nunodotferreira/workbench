<?php

namespace App\Bot\Facebook\States\Listener\Handlers;

use \App\Bot\Facebook\Templates\QuickReplies\General\Options;

/**
 * Class Message
 * @package App\Bot\Facebook\States\Listener\Handlers
 */
class Message extends \Botomatic\Engine\Facebook\Abstracts\States\Message\Handler
{
    /*
     * Traits
     */
    use \Botomatic\Engine\Facebook\Abstracts\States\Message\Traits\Normalize;

    /**
     * @return bool
     */
    public function saysHi(): bool
    {
        return $this->normalizeMessage() == 'hi';
    }

    /**
     * Quick replies are coming as messages instead of postbacks (they are also sent together with a message)
     *
     * @return bool
     */
    public function wantsConversations() : bool
    {
        return $this->message()->getQuickReply() == Options::PAYLOAD_CONVERSATION;
    }

    /**
     * Quick replies are coming as messages instead of postbacks (they are also sent together with a message)
     *
     * @return bool
     */
    public function wantsTemplates() : bool
    {
        return $this->message()->getQuickReply() == Options::PAYLOAD_TEMPLATES;
    }

}
