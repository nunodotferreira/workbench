<?php 

namespace App\Bot\Facebook\States\States\Fallback\Handlers;

/**
 * Class Responses
 * @package  App\Bot\Facebook\States\States\Fallback\Handlers
 */
class Responses extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Handler
{

    /**
     * @return  \Botomatic\Engine\Facebook\Entities\Response
     */
    public function responseDefault() : \Botomatic\Engine\Facebook\Entities\Response
    {
          return $this->response->addMessage('Fallback!')
              ->setStatusActive()
              ->sendResponse();
    }

}
