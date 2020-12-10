<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class PullShipmentResult {
	
	static $_TSPEC;
	public $warehouseCode = null;
	public $syncUpdateTime = null;
	public $lastMaxId = null;
	public $shipmentList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouseCode'
			),
			2 => array(
			'var' => 'syncUpdateTime'
			),
			3 => array(
			'var' => 'lastMaxId'
			),
			4 => array(
			'var' => 'shipmentList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouseCode'])){
				
				$this->warehouseCode = $vals['warehouseCode'];
			}
			
			
			if (isset($vals['syncUpdateTime'])){
				
				$this->syncUpdateTime = $vals['syncUpdateTime'];
			}
			
			
			if (isset($vals['lastMaxId'])){
				
				$this->lastMaxId = $vals['lastMaxId'];
			}
			
			
			if (isset($vals['shipmentList'])){
				
				$this->shipmentList = $vals['shipmentList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PullShipmentResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouseCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouseCode);
				
			}
			
			
			
			
			if ("syncUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->syncUpdateTime); 
				
			}
			
			
			
			
			if ("lastMaxId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastMaxId); 
				
			}
			
			
			
			
			if ("shipmentList" == $schemeField){
				
				$needSkip = false;
				
				$this->shipmentList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\vis\prp\shipment\service\WmsPullShipmentModel();
						$elem1->read($input);
						
						$this->shipmentList[$_size1++] = $elem1;
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
		
		if($this->warehouseCode !== null) {
			
			$xfer += $output->writeFieldBegin('warehouseCode');
			$xfer += $output->writeString($this->warehouseCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->syncUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('syncUpdateTime');
			$xfer += $output->writeI64($this->syncUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastMaxId !== null) {
			
			$xfer += $output->writeFieldBegin('lastMaxId');
			$xfer += $output->writeI64($this->lastMaxId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipmentList !== null) {
			
			$xfer += $output->writeFieldBegin('shipmentList');
			
			if (!is_array($this->shipmentList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->shipmentList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
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