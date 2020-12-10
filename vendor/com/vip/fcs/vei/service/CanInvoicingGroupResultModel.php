<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\vei\service;

class CanInvoicingGroupResultModel {
	
	static $_TSPEC;
	public $groupName = null;
	public $canEinvoice = null;
	public $canPaperInvoice = null;
	public $warehouseList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'groupName'
			),
			2 => array(
			'var' => 'canEinvoice'
			),
			3 => array(
			'var' => 'canPaperInvoice'
			),
			4 => array(
			'var' => 'warehouseList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['groupName'])){
				
				$this->groupName = $vals['groupName'];
			}
			
			
			if (isset($vals['canEinvoice'])){
				
				$this->canEinvoice = $vals['canEinvoice'];
			}
			
			
			if (isset($vals['canPaperInvoice'])){
				
				$this->canPaperInvoice = $vals['canPaperInvoice'];
			}
			
			
			if (isset($vals['warehouseList'])){
				
				$this->warehouseList = $vals['warehouseList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CanInvoicingGroupResultModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("groupName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->groupName);
				
			}
			
			
			
			
			if ("canEinvoice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->canEinvoice);
				
			}
			
			
			
			
			if ("canPaperInvoice" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->canPaperInvoice);
				
			}
			
			
			
			
			if ("warehouseList" == $schemeField){
				
				$needSkip = false;
				
				$this->warehouseList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->warehouseList[$_size1++] = $elem1;
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
		
		if($this->groupName !== null) {
			
			$xfer += $output->writeFieldBegin('groupName');
			$xfer += $output->writeString($this->groupName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->canEinvoice !== null) {
			
			$xfer += $output->writeFieldBegin('canEinvoice');
			$xfer += $output->writeBool($this->canEinvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->canPaperInvoice !== null) {
			
			$xfer += $output->writeFieldBegin('canPaperInvoice');
			$xfer += $output->writeBool($this->canPaperInvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouseList !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseList');
			
			if (!is_array($this->warehouseList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->warehouseList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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