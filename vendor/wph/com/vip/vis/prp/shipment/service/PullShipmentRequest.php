<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class PullShipmentRequest {
	
	static $_TSPEC;
	public $appSource = null;
	public $warehouseCode = null;
	public $vendorId = null;
	public $vendor_id = null;
	public $syncUpdateTime = null;
	public $lastMaxId = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appSource'
			),
			2 => array(
			'var' => 'warehouseCode'
			),
			3 => array(
			'var' => 'vendorId'
			),
			4 => array(
			'var' => 'vendor_id'
			),
			5 => array(
			'var' => 'syncUpdateTime'
			),
			6 => array(
			'var' => 'lastMaxId'
			),
			7 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appSource'])){
				
				$this->appSource = $vals['appSource'];
			}
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['syncUpdateTime'])){
				
				$this->syncUpdateTime = $vals['syncUpdateTime'];
			}
			
			
			if (isset($vals['lastMaxId'])){
				
				$this->lastMaxId = $vals['lastMaxId'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PullShipmentRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appSource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appSource);
				
			}
			
			
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorId);
				
			}
			
			
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_id);
				
			}
			
			
			
			
			if ("syncUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->syncUpdateTime); 
				
			}
			
			
			
			
			if ("lastMaxId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastMaxId); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
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
		
		if($this->appSource !== null) {
			
			$xfer += $output->writeFieldBegin('appSource');
			$xfer += $output->writeString($this->appSource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouseCode');
		$xfer += $output->writeString($this->warehouseCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeString($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeString($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('syncUpdateTime');
		$xfer += $output->writeI64($this->syncUpdateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('lastMaxId');
		$xfer += $output->writeI64($this->lastMaxId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>