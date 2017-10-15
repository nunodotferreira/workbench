<?php 

namespace App\Bot\Facebook\States\Workflow\Test\FlowState\Handlers;

/**
 * Class Responses
 * @package  App\Bot\Facebook\States\Workflow\Test\FlowState\Handlers
 */
class Responses extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Handler
{

    /**
     * @return  \Botomatic\Engine\Facebook\Entities\Response
     */
    public function responseDefault() : \Botomatic\Engine\Facebook\Entities\Response
    {
          return $this->response->addMessage(
              localizator()->translate('flow', 'default')
          )
              ->setStatusActive()
              ->sendResponse();
    }

}
