<?php 

namespace App\Bot\Facebook\States\Workflow\Test\Background;

/**
 * Class Background
 * @package  App\Bot\Facebook\States\Workflow\Test\Background
 */
class Background extends \Botomatic\Engine\Facebook\Abstracts\States\Workflow
{

    /**
     * @var  \App\Bot\Facebook\States\Workflow\Test\Background\Handlers\Responses
     */
    protected $response;

    /**
     * @var  \App\Bot\Facebook\States\Workflow\Test\Background\Handlers\Message
     */
    protected $message;

    /**
     * Logic specific to the state
     *
     * @return  \Botomatic\Engine\Facebook\Entities\Response
     */
    protected function process(): \Botomatic\Engine\Facebook\Entities\Response
    {
        return $this->response->responseDefault();
    }
}