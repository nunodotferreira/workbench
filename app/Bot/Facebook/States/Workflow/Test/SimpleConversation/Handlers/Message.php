<?php 

namespace App\Bot\Facebook\States\Workflow\Test\SimpleConversation\Handlers;

/**
 * Class Message
 * @package  App\Bot\Facebook\States\Workflow\Test\SimpleConversation\Handlers
 */
class Message extends \Botomatic\Engine\Facebook\Abstracts\States\Message\Handler
{

    /**
     * @return bool
     */
    public function userSentAge() : bool
    {
        return is_numeric($this->message()->getMessage());
    }

    /**
     * @return int
     */
    public function extractAge() : int
    {
        return $this->message()->getMessage();
    }
}
