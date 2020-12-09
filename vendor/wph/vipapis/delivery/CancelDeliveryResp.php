<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\delivery;

class CancelDeliveryResp {
	
	static $_TSPEC;
	public $return_code = null;
	public $return_msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_code'
			),
			2 => array(
			'var' => 'return_msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_code'])){
				
				$this->return_code = $vals['return_code'];
			}
			
			
			if (isset($vals['return_msg'])){
				
				$this->return_msg = $vals['return_msg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CancelDeliveryResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_code);
				
			}
			
			
			
			
			if ("return_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_msg);
				
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
		
		if($this->return_code !== null) {
			
			$xfer += $output->writeFieldBegin('return_code');
			$xfer += $output->writeString($this->return_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_msg !== null) {
			
			$xfer += $output->writeFieldBegin('return_msg');
			$xfer += $output->writeString($this->return_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>