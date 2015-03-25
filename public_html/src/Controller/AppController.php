<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
	public $helpers = [
		'Html' => [
			'className' => 'Bootstrap3.BootstrapHtml'
		],
		'Form' => [
			'className' => 'Bootstrap3.BootstrapForm'
		],
		'Paginator' => [
			'className' => 'Bootstrap3.BootstrapPaginator'
		],
		'Modal' => [
			'className' => 'Bootstrap3.BootstrapModal'
		],
	];

	public function beforeFilter(Event $event)
    {		
        $this->Auth->allow(['add','index', 'view', 'display']);	// REMOVE THIS AFTER!!!
		
		// $this->set('logged_in', $this->Auth->loggedIn());
		// ...
    }

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadComponent('Flash');
		$this->loadComponent('Auth', [
			'authorize' => ['Controller'],	// Added this Line.
            'loginRedirect' => [
                'controller' => 'Pages',
                'action' => 'display',
				'dashboard'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);
		
		$names = array();
		$users = TableRegistry::get('Users')->find('all');
	
		foreach($users as $user){
			$names[$user->id] = $user->first_name . " " . $user->last_name;
		}
		
		$header_messages = TableRegistry::get('Messages')->find('all', [
			'order' => ['Messages.id DESC'],
		
		])->limit(3);

		$this->set('header_messages', $header_messages);
		$this->set('names', $names);
    }
	
	public function isAuthorized() 
	{		
		$this->set('logged_in', $this->Auth->identify());
		
		// Admin can access every action
		if(1 == 1) {
			error_log('USER IS AUTHORIZED');
			return true;
		} 
		
		error_log('USER NOT AUTHORIZED');
		return false;
	}
}
