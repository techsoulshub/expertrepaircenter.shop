<?php

function send_smtp_email($to, $subject, $message, $from_email = 'info@expertrepaircenter.shop', $from_name = 'expertrepaircenter')
{
	$CI = &get_instance();
	$config = array(
		'protocol'    => 'smtp',
		'smtp_host'   => 'smtp.hostinger.com',  // Change to your SMTP host
		'smtp_port'   => 465,               // TLS: 587, SSL: 465
		'smtp_user'   => 'info@expertrepaircenter.shop', // Your SMTP username
		'smtp_pass'   => '~b5Vu#1K+&F',    // SMTP password or app password
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
