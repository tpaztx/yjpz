<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\product\change\service;

class BarcodeChangeInfo {
	
	static $_TSPEC;
	public $serialId = null;
	public $barcode = null;
	public $vendorId = null;
	public $skuId = null;
	public $actionType = null;
	public $actionTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'serialId'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'vendorId'
			),
			4 => array(
			'var' => 'skuId'
			),
			5 => array(
			'var' => 'actionType'
			),
			6 => array(
			'var' => 'actionTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['serialId'])){
				
				$this->serialId = $vals['serialId'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['actionType'])){
				
				$this->actionType = $vals['actionType'];
			}
			
			
			if (isset($vals['actionTime'])){
				
				$this->actionTime = $vals['actionTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BarcodeChangeInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("serialId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->serialId); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->skuId); 
				
			}
			
			
			
			
			if ("actionType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actionType);
				
			}
			
			
			
			
			if ("actionTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actionTime);
				
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
		
		$xfer += $output->writeFieldBegin('serialId');
		$xfer += $output->writeI64($this->serialId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actionType !== null) {
			
			$xfer += $output->writeFieldBegin('actionType');
			$xfer += $output->writeString($this->actionType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actionTime !== null) {
			
			$xfer += $output->writeFieldBegin('actionTime');
			$xfer += $output->writeString($this->actionTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>