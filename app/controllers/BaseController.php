<?php

include storage_path().'\goutte.phar';
use Goutte\Client;

class BaseController extends Controller {

	/**
	 * Message bag.
	 *
	 * @var Illuminate\Support\MessageBag
	 */
	protected $messageBag = null;

	public $oppd;

	/**
	 * Initializer.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// CSRF Protection
		$this->beforeFilter('csrf', array('on' => 'post'));

		//
		$this->messageBag = new Illuminate\Support\MessageBag;


				$client = new Client();
		$crawler = $client->request('GET', 'https://myaccount.xxxx.com/SingleSignOn/logon.aspx');

		$form = $crawler->selectButton('Login')->form();
		$crawler = $client->submit($form, array('ctl00$contentMain$username' => 'xxxx', 'ctl00$contentMain$password' => 'xxxx'));

		$link = $crawler->selectLink('View Account Summary')->link();
		$crawler = $client->click($link);

		$this->oppd = str_replace('$', '', $crawler->filter('#ctl00_contentMain_gdvAccts_ctl02_Label1')->eq(2)->text());
	}

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
