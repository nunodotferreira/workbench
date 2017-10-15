<?php 

namespace App\Bot\Facebook\States\Workflow\Test\Templates;

/**
 * Class Templates
 * @package  App\Bot\Facebook\States\Workflow\Test\Templates
 */
class Templates extends \Botomatic\Engine\Facebook\Abstracts\States\Workflow
{

    /**
     * @var  \App\Bot\Facebook\States\Workflow\Test\Templates\Handlers\Responses
     */
    protected $response;

    /**
     * @var  \App\Bot\Facebook\States\Workflow\Test\Templates\Handlers\Message
     */
    protected $message;

    /**
     * Logic specific to the state
     *
     * @return  \Botomatic\Engine\Facebook\Entities\Response
     */
    protected function process(): \Botomatic\Engine\Facebook\Entities\Response
    {
        /*--------------------------------------------------------------------------------------------------------------
         *
         * Example of simple decision tree
         *
         -------------------------------------------------------------------------------------------------------------*/
        if ($this->message->isButtonTemplate())
        {
            return $this->response->buttonTemplate();
        }
        elseif ($this->message->isGenericTemplate())
        {
            return $this->response->genericTemplate();
        }
        else
        {
            return $this->response->responseDefault();
        }
    }
}