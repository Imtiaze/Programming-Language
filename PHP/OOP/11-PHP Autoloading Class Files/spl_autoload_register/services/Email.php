<?php

class Email
{
	public static function send(Contact $contact)
	{
		return 'Sending an email to ' . $contact->getEmail();
	}
}