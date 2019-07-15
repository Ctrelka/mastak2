<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit();
	}

	add_action( 'wp_ajax_sendForm', 'sendForm' );
	add_action( 'wp_ajax_nopriv_sendForm', 'sendForm' );

	add_filter( 'wp_mail_content_type', 'set_html_content_type' );
	function set_html_content_type() {
		return "text/html";
	}


	function sendForm() {
		$mail_to = carbon_get_theme_option("crb_form_mail");
		$subject = 'question!';
		$headers = 'From: MastakStudio <' . $mail_to .'>' . "\r\n";

		$response           = array();
		$response['status'] = 0;

		$form_name    = empty( $_POST['name'] ) ? '' : esc_attr( $_POST['name'] );
		$form_email   = empty( $_POST['email'] ) ? '' : esc_attr( $_POST['email'] );
		$form_message = empty( $_POST['message'] ) ? '' : esc_attr( $_POST['message'] );

		if ( ! filter_var( $form_email, FILTER_VALIDATE_EMAIL ) ) {

			$response['status'] = 2;
			echo json_encode( $response );
			wp_die();
		}


		$msg = "<p><strong>Name: </strong><span>" . $form_name . "</span></p>
			<p><strong>Email: </strong><span>" . $form_email . "</span></p>
			<p><strong>Message: </strong><span>" . $form_message . "</span></p>";


		if ( wp_mail( $mail_to, $subject, $msg, $headers ) ) {
			$response['status'] = 1;
		}

		echo json_encode( $response );
		wp_die();
	}



