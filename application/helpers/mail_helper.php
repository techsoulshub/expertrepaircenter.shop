<?php

function send_smtp_email($to, $subject, $message, $from_email = 'support@homerepaircenter.shop', $from_name = 'homerepaircenter')
{
	$CI = &get_instance();
	$config = array(
		'protocol'    => 'smtp',
		'smtp_host'   => 'smtp.hostinger.com',  // Change to your SMTP host
		'smtp_port'   => 465,               // TLS: 587, SSL: 465
		'smtp_user'   => 'support@homerepaircenter.shop', // Your SMTP username
		'smtp_pass'   => '2pbK@|iK:',    // SMTP password or app password
		'smtp_crypto' => 'ssl',             // ssl or tls
		'mailtype'    => 'html',
		'charset'     => 'utf-8',
		'newline'     => "\r\n",
		'wordwrap'    => TRUE
	);
	$CI->email->initialize($config);
	$CI->email->from($from_email, $from_name);
	$CI->email->to($to);
	$CI->email->subject($subject);
	$CI->email->message($message);
	if ($CI->email->send()) {
		return true;
	} else {
		log_message('error', 'Email could not be sent. Debug info: ' . $CI->email->print_debugger());
		return false;
	}
}
