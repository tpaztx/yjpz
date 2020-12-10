<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class ActualReceivedDetail {
	
	static $_TSPEC;
	public $dataId = null;
	public $receiptNo = null;
	public $barcode = null;
	public $quantity = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'dataId'
			),
			2 => array(
			'var' => 'receiptNo'
			),
			3 => array(
			'var' => 'barcode'
			),
			4 => array(
			'var' => 'quantity'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['dataId'])){
				
				$this->dataId = $vals['dataId'];
			}
			
			
			if (isset($vals['receiptNo'])){
				
				$this->receiptNo = $vals['receiptNo'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActualReceivedDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("dataId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->dataId); 
				
			}
			
			
			
			
			if ("receiptNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiptNo);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
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
		
		$xfer += $output->writeFieldBegin('dataId');
		$xfer += $output->writeI64($this->dataId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiptNo');
		$xfer += $output->writeString($this->receiptNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>