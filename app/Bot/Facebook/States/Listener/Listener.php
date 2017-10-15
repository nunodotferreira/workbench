<?php

namespace App\Bot\Facebook\States\Listener;

/**
 * Class Listener
 * @package App\Bot\Facebook\States\Test\Listener
 */
class Listener extends \Botomatic\Engine\Facebook\Abstracts\States\Workflow
{

    /**
     * @var \App\Bot\Facebook\States\Listener\Handlers\Responses
     */
    protected $response;

    /**
     * @var \App\Bot\Facebook\States\Listener\Handlers\Message
     */
    protected $message;

    /**
     * Logic specific to the state
     *
     * @return \Botomatic\Engine\Facebook\Entities\Response
     */
    protected function process(): \Botomatic\Engine\Facebook\Entities\Response
    {
        if ($this->message->saysHi())
        {
            return $this->response->responseDefault($this->session->getUser()->getName());
        }

        /**
         * Listen for quick reply
         */
        elseif ($this->message->wantsConversations())
        {
            return $this->response->finish();
        }

        /**
         * Return a custom status if match
         */
        elseif ($this->message->wantsTemplates())
        {
            return $this->response->showTemplates();
        }
        /**
         * Show options as quick reply.
         *
         * Showing options at every step is good design as it helps user navigate and reach the desired state easier.
         */
        else
        {
            return $this->response->options();
        }
    }
}