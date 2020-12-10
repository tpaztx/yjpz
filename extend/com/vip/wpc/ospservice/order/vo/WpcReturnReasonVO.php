<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\order\vo;

class WpcReturnReasonVO {
	
	static $_TSPEC;
	public $reasonId = null;
	public $reasonInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reasonId'
			),
			2 => array(
			'var' => 'reasonInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reasonId'])){
				
				$this->reasonId = $vals['reasonId'];
			}
			
			
			if (isset($vals['reasonInfo'])){
				
				$this->reasonInfo = $vals['reasonInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcReturnReasonVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("reasonId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->reasonId); 
				
			}
			
			
			
			
			if ("reasonInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonInfo);
				
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
		
		if($this->reasonId !== null) {
			
			$xfer += $output->writeFieldBegin('reasonId');
			$xfer += $output->writeI32($this->reasonId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonInfo !== null) {
			
			$xfer += $output->writeFieldBegin('reasonInfo');
			$xfer += $output->writeString($this->reasonInfo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>