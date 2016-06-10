<?php

namespace App\Services;

use App\Contracts\MailerContract;

/**
* 
*/
class WpMailService implements MailerContract
{

	/**
	 * [send description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function send($data)
	{
		echo 'send wpmail!';
	}

}

?>