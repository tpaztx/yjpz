<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class OdsOrderBizFlags {
	
	static $_TSPEC;
	public $isJitZf = null;
	public $isJitX = null;
	public $thirdCarrierFlag = null;
	public $isStoreDelivery = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'isJitZf'
			),
			2 => array(
			'var' => 'isJitX'
			),
			3 => array(
			'var' => 'thirdCarrierFlag'
			),
			4 => array(
			'var' => 'isStoreDelivery'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['isJitZf'])){
				
				$this->isJitZf = $vals['isJitZf'];
			}
			
			
			if (isset($vals['isJitX'])){
				
				$this->isJitX = $vals['isJitX'];
			}
			
			
			if (isset($vals['thirdCarrierFlag'])){
				
				$this->thirdCarrierFlag = $vals['thirdCarrierFlag'];
			}
			
			
			if (isset($vals['isStoreDelivery'])){
				
				$this->isStoreDelivery = $vals['isStoreDelivery'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OdsOrderBizFlags';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("isJitZf" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isJitZf); 
				
			}
			
			
			
			
			if ("isJitX" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isJitX); 
				
			}
			
			
			
			
			if ("thirdCarrierFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thirdCarrierFlag); 
				
			}
			
			
			
			
			if ("isStoreDelivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isStoreDelivery); 
				
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
		
		if($this->isJitZf !== null) {
			
			$xfer += $output->writeFieldBegin('isJitZf');
			$xfer += $output->writeI32($this->isJitZf);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isJitX !== null) {
			
			$xfer += $output->writeFieldBegin('isJitX');
			$xfer += $output->writeI32($this->isJitX);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdCarrierFlag !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCarrierFlag');
			$xfer += $output->writeI32($this->thirdCarrierFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isStoreDelivery !== null) {
			
			$xfer += $output->writeFieldBegin('isStoreDelivery');
			$xfer += $output->writeI32($this->isStoreDelivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>