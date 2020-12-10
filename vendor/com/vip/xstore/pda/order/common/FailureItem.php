<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\order\common;

class FailureItem {
	
	static $_TSPEC;
	public $error_code = null;
	public $error_message = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			21 => array(
			'var' => 'error_code'
			),
			22 => array(
			'var' => 'error_message'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['error_code'])){
				
				$this->error_code = $vals['error_code'];
			}
			
			
			if (isset($vals['error_message'])){
				
				$this->error_message = $vals['error_message'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FailureItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("error_code" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->error_code); 
				
			}
			
			
			
			
			if ("error_message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->error_message);
				
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
		
		$xfer += $output->writeFieldBegin('error_code');
		$xfer += $output->writeI32($this->error_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->error_message !== null) {
			
			$xfer += $output->writeFieldBegin('error_message');
			$xfer += $output->writeString($this->error_message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>