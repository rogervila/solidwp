<?php 

namespace App\Contracts;

interface MailerContract
{
	public function send($data);
}