<?php
namespace TestApp\Controller\Component;

use Cake\Controller\Component;

/**
 * @property \TestApp\Controller\Component\RequestHandlerComponent $RequestHandler
 * @property \Cake\Controller\Component\SecurityComponent Security
 * @property \Cake\Controller\Component\FlashComponent $Flash
 */
class MyOtherComponent extends Component {

	/**
	 * @var array
	 */
	protected $components = ['Flash', 'RequestHandler', 'SomeInvalidOneWillBeIgnored', 'Security'];

}
