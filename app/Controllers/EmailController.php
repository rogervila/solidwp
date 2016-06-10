<?php  

namespace App\Controllers;

use App\Contracts\MailerContract;

/**
* 
*/
class EmailController extends Controller
{
	public $mailer;

	/*
	function __construct(MailerContract $mailer)
	{
		$this->mailer = $mailer;
	}*/

	/**
	 * [contact description]
	 * @return [type] [description]
	 */
	public function contact(MailerContract $mailer)
	{
		$this->mailer = $mailer;

		//TO DO implement validator with particle-php/Validator

		return $this->mailer->send($_POST);
	}

}

?>