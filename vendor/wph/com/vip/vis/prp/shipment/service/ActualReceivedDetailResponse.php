<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class ActualReceivedDetailResponse {
	
	static $_TSPEC;
	public $requestId = null;
	public $requestTime = null;
	public $vendor_id = null;
	public $warehouseCode = null;
	public $channelCode = null;
	public $successList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'requestId'
			),
			2 => array(
			'var' => 'requestTime'
			),
			3 => array(
			'var' => 'vendor_id'
			),
			4 => array(
			'var' => 'warehouseCode'
			),
			5 => array(
			'var' => 'channelCode'
			),
			6 => array(
			'var' => 'successList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['requestTime'])){
				
				$this->requestTime = $vals['requestTime'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['channelCode'])){
				
				$this->channelCode = $vals['channelCode'];
			}
			
			
			if (isset($vals['successList'])){
				
				$this->successList = $vals['successList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActualReceivedDetailResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("requestTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->requestTime); 
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_id);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("channelCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channelCode);
				
			}
			
			
			
			
			if ("successList" == $schemeField){
				
				$needSkip = false;
				
				$this->successList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI64($elem1); 
						
						$this->successList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestTime !== null) {
			
			$xfer += $output->writeFieldBegin('requestTime');
			$xfer += $output->writeI64($this->requestTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeString($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channelCode !== null) {
			
			$xfer += $output->writeFieldBegin('channelCode');
			$xfer += $output->writeString($this->channelCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->successList !== null) {
			
			$xfer += $output->writeFieldBegin('successList');
			
			if (!is_array($this->successList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->successList as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>