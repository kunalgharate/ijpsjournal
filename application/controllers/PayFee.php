<?php defined('BASEPATH') OR exit('No direct script access allowed'); 

class PayFee extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('includes/header');
		$this->load->view('payfee');
		$this->load->view('includes/footer');
     
	}
 	public function start(){
		$this->load->view('includes/header');
		$this->load->view('start');
		$this->load->view('includes/footer');
     
 	}

 	public function request(){
	
	$mode = "TEST"; 

	$secretKey= "4bfd99ebe022955fd6065fb9491fe9fcfa55dfc4";
	$orderId = rand(0000,9999); 
	$returnUrl= base_url('payfee/status');
	$notifyUrl= base_url('payfee/status');
  	$postData = array( 
  	'appId' => '989853f876114554d501f5a1158989', 
  	'orderId' => $orderId, 
  	'orderAmount' => $this->input->post('orderAmount'), 
  	'orderCurrency' => $this->input->post('orderCurrency'), 
  	'customerName' =>  $this->input->post('customerName'), 
  	'customerPhone' =>  $this->input->post('customerPhone'), 
  	'customerEmail' => $this->input->post('customerEmail'),
	"orderNote" =>  $this->input->post('orderNote'), 
  	'returnUrl'=> $returnUrl, 
  	'notifyUrl' => $notifyUrl,
	);
	#print_r($postData);exit;
	
		ksort($postData);
	 	$signatureData = '';
		foreach ($postData as $key => $value){
   	 	$signatureData .= $key.$value;
		}
		$signature = hash_hmac('sha256', $signatureData, $secretKey,true);
		$signature = base64_encode($signature);
 		if ($mode == 'PROD') {
 			$url = 'https://www.cashfree.com/checkout/post/submit';
		}
		else {
  			$url = 'https://test.cashfree.com/billpay/checkout/post/submit';
		}
		$this->load->view('includes/header');
		$this->load->view('request',[ 'postData'=>$postData, 'signature'=>$signature, 'url'=>$url]);
		$this->load->view('includes/footer');
	}	

	public function status(){
		$secretkey = "4bfd99ebe022955fd6065fb9491fe9fcfa55dfc4";
		$orderId = $_POST["orderId"];
		$orderAmount = $_POST["orderAmount"];
		$referenceId = $_POST["referenceId"];
		$txStatus = $_POST["txStatus"];
		$paymentMode = $_POST["paymentMode"];
		$txMsg = $_POST["txMsg"];
		$txTime = $_POST["txTime"];
		$signature = $_POST["signature"];
		$details = $_POST["txcustomerName"];
		$data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime.$details;
		$hash_hmac = hash_hmac('sha256', $data, $secretkey, true) ;
		$computedSignature = base64_encode($hash_hmac);
		print_r($data);
		exit;
		if ($signature == $computedSignature) {
			$this->session->set_flashdata('paystatus',$txStatus);
			$this->load->view('includes/header');
			$this->load->view('start');
			$this->load->view('includes/footer');
			

		}
	}
}