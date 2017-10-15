<?php 

namespace App\Bot\Facebook\States\Workflow\Test\Background\Handlers;

/**
 * Class Responses
 * @package  App\Bot\Facebook\States\Workflow\Test\Background\Handlers
 */
class Responses extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Handler
{

    /**
     * @return  \Botomatic\Engine\Facebook\Entities\Response
     */
    public function responseDefault() : \Botomatic\Engine\Facebook\Entities\Response
    {
          return $this->response->addMessage('Message from a background state')
              ->setStatusActive()
              ->sendResponse();
    }

}
