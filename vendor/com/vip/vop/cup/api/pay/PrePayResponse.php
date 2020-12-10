<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\pay;

class PrePayResponse {
	
	static $_TSPEC;
	public $code = null;
	public $message = null;
	public $vip_order_sn = null;
	public $pre_pay_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'message'
			),
			3 => array(
			'var' => 'vip_order_sn'
			),
			4 => array(
			'var' => 'pre_pay_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['message'])){
				
				$this->message = $vals['message'];
			}
			
			
			if (isset($vals['vip_order_sn'])){
				
				$this->vip_order_sn = $vals['vip_order_sn'];
			}
			
			
			if (isset($vals['pre_pay_id'])){
				
				$this->pre_pay_id = $vals['pre_pay_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrePayResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->message);
				
			}
			
			
			
			
			if ("vip_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_order_sn);
				
			}
			
			
			
			
			if ("pre_pay_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pre_pay_id);
				
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
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->message !== null) {
			
			$xfer += $output->writeFieldBegin('message');
			$xfer += $output->writeString($this->message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('vip_order_sn');
			$xfer += $output->writeString($this->vip_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_pay_id !== null) {
			
			$xfer += $output->writeFieldBegin('pre_pay_id');
			$xfer += $output->writeString($this->pre_pay_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>