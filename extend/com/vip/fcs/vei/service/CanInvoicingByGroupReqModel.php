<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class CanInvoicingByGroupReqModel {
	
	static $_TSPEC;
	public $warehouse = null;
	public $province = null;
	public $city = null;
	public $sourceSystem = null;
	public $userId = null;
	public $canInvoicingByGroupModelList = null;
	public $needSummary = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'province'
			),
			3 => array(
			'var' => 'city'
			),
			4 => array(
			'var' => 'sourceSystem'
			),
			5 => array(
			'var' => 'userId'
			),
			6 => array(
			'var' => 'canInvoicingByGroupModelList'
			),
			7 => array(
			'var' => 'needSummary'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['sourceSystem'])){
				
				$this->sourceSystem = $vals['sourceSystem'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['canInvoicingByGroupModelList'])){
				
				$this->canInvoicingByGroupModelList = $vals['canInvoicingByGroupModelList'];
			}
			
			
			if (isset($vals['needSummary'])){
				
				$this->needSummary = $vals['needSummary'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CanInvoicingByGroupReqModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("sourceSystem" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sourceSystem); 
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("canInvoicingByGroupModelList" == $schemeField){
				
				$needSkip = false;
				
				$this->canInvoicingByGroupModelList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\vei\service\CanInvoicingGroupModel();
						$elem0->read($input);
						
						$this->canInvoicingByGroupModelList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("needSummary" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->needSummary);
				
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
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceSystem !== null) {
			
			$xfer += $output->writeFieldBegin('sourceSystem');
			$xfer += $output->writeI32($this->sourceSystem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->canInvoicingByGroupModelList !== null) {
			
			$xfer += $output->writeFieldBegin('canInvoicingByGroupModelList');
			
			if (!is_array($this->canInvoicingByGroupModelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->canInvoicingByGroupModelList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('needSummary');
		$xfer += $output->writeBool($this->needSummary);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>