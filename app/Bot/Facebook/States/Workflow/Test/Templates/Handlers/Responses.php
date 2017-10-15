<?php 

namespace App\Bot\Facebook\States\Workflow\Test\Templates\Handlers;

/**
 * Class Responses
 * @package  App\Bot\Facebook\States\Workflow\Test\Templates\Handlers
 */
class Responses extends \Botomatic\Engine\Facebook\Abstracts\States\Response\Handler
{

  /**
   * @return  \Botomatic\Engine\Facebook\Entities\Response
   */
  public function buttonTemplate() : \Botomatic\Engine\Facebook\Entities\Response
  {
      return $this->response

          ->addMessage(
              localizator()->translate('test_templates', 'button')
         )

          ->addButtonTemplate(new \App\Bot\Facebook\Templates\Buttons\Templates\Button())
          ->sendResponse()
          ->setStatusActive();
  }

  /**
   * @return  \Botomatic\Engine\Facebook\Entities\Response
   */
  public function genericTemplate() : \Botomatic\Engine\Facebook\Entities\Response
  {
      return $this->response

          ->addMessage(
              localizator()->translate('test_templates', 'generic')
         )

          ->addGenericTemplate(new \App\Bot\Facebook\Templates\Generic\Templates\Generic())
          ->sendResponse()
          ->setStatusActive();
  }

  /**
   * @return  \Botomatic\Engine\Facebook\Entities\Response
   */
  public function responseDefault() : \Botomatic\Engine\Facebook\Entities\Response
  {
      return $this->response

          ->addMessage(
              localizator()->translate('test_templates', 'options_1')
         )

          ->addQuickReplies(new \App\Bot\Facebook\Templates\QuickReplies\Templates\Options(
              localizator()->translate('test_templates', 'options_2')
          ))
          ->sendResponse()
          ->setStatusActive();
  }

}
