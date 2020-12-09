<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class OrderCancelResponseDTO {
	
	static $_TSPEC;
	public $bizCode = null;
	public $bizMsg = null;
	public $bizDescription = null;
	public $bizTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bizCode'
			),
			2 => array(
			'var' => 'bizMsg'
			),
			3 => array(
			'var' => 'bizDescription'
			),
			4 => array(
			'var' => 'bizTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bizCode'])){
				
				$this->bizCode = $vals['bizCode'];
			}
			
			
			if (isset($vals['bizMsg'])){
				
				$this->bizMsg = $vals['bizMsg'];
			}
			
			
			if (isset($vals['bizDescription'])){
				
				$this->bizDescription = $vals['bizDescription'];
			}
			
			
			if (isset($vals['bizTime'])){
				
				$this->bizTime = $vals['bizTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderCancelResponseDTO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("bizCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizCode);
				
			}
			
			
			
			
			if ("bizMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizMsg);
				
			}
			
			
			
			
			if ("bizDescription" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizDescription);
				
			}
			
			
			
			
			if ("bizTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bizTime);
				
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
		
		$xfer += $output->writeFieldBegin('bizCode');
		$xfer += $output->writeString($this->bizCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->bizMsg !== null) {
			
			$xfer += $output->writeFieldBegin('bizMsg');
			$xfer += $output->writeString($this->bizMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizDescription !== null) {
			
			$xfer += $output->writeFieldBegin('bizDescription');
			$xfer += $output->writeString($this->bizDescription);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizTime !== null) {
			
			$xfer += $output->writeFieldBegin('bizTime');
			$xfer += $output->writeI64($this->bizTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>