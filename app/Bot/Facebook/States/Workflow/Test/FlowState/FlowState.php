<?php 

namespace App\Bot\Facebook\States\Workflow\Test\FlowState;

/**
 * Class FlowState
 * @package  App\Bot\Facebook\States\Workflow\Test\FlowState
 */
class FlowState extends \Botomatic\Engine\Facebook\Abstracts\States\Workflow
{

    /**
     * @var  \App\Bot\Facebook\States\Workflow\Test\FlowState\Handlers\Responses
     */
    protected $response;

    /**
     * @var  \App\Bot\Facebook\States\Workflow\Test\FlowState\Handlers\Message
     */
    protected $message;

    /**
     * Logic specific to the state
     *
     * @return  \Botomatic\Engine\Facebook\Entities\Response
     */
    protected function process(): \Botomatic\Engine\Facebook\Entities\Response
    {
        /**
         * When we reach this state we already have a message in the response object to which we attach another one
         */
        return $this->response->responseDefault();
    }
}