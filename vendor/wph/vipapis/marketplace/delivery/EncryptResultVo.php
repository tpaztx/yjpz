<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\marketplace\delivery;

class EncryptResultVo {
	
	static $_TSPEC;
	public $cipher_sign = null;
	public $success = null;
	public $message = null;
	public $encrypt_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cipher_sign'
			),
			2 => array(
			'var' => 'success'
			),
			3 => array(
			'var' => 'message'
			),
			4 => array(
			'var' => 'encrypt_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cipher_sign'])){
				
				$this->cipher_sign = $vals['cipher_sign'];
			}
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
			if (isset($vals['message'])){
				
				$this->message = $vals['message'];
			}
			
			
			if (isset($vals['encrypt_code'])){
				
				$this->encrypt_code = $vals['encrypt_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EncryptResultVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cipher_sign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cipher_sign);
				
			}
			
			
			
			
			if ("success" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->success); 
				
			}
			
			
			
			
			if ("message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->message);
				
			}
			
			
			
			
			if ("encrypt_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->encrypt_code);
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->cipher_sign !== null) {
			
			$xfer += $output->writeFieldBegin('cipher_sign');
			$xfer += $output->writeString($this->cipher_sign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeI32($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->message !== null) {
			
			$xfer += $output->writeFieldBegin('message');
			$xfer += $output->writeString($this->message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->encrypt_code !== null) {
			
			$xfer += $output->writeFieldBegin('encrypt_code');
			$xfer += $output->writeString($this->encrypt_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>