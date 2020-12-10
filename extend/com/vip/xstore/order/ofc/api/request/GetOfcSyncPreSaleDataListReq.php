<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class GetOfcSyncPreSaleDataListReq {
	
	static $_TSPEC;
	public $orderIds = null;
	public $flags = null;
	public $wmsFlags = null;
	public $syncDataIds = null;
	public $nextTimeRange = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderIds'
			),
			2 => array(
			'var' => 'flags'
			),
			3 => array(
			'var' => 'wmsFlags'
			),
			4 => array(
			'var' => 'syncDataIds'
			),
			5 => array(
			'var' => 'nextTimeRange'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderIds'])){
				
				$this->orderIds = $vals['orderIds'];
			}
			
			
			if (isset($vals['flags'])){
				
				$this->flags = $vals['flags'];
			}
			
			
			if (isset($vals['wmsFlags'])){
				
				$this->wmsFlags = $vals['wmsFlags'];
			}
			
			
			if (isset($vals['syncDataIds'])){
				
				$this->syncDataIds = $vals['syncDataIds'];
			}
			
			
			if (isset($vals['nextTimeRange'])){
				
				$this->nextTimeRange = $vals['nextTimeRange'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetOfcSyncPreSaleDataListReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderIds" == $schemeField){
				
				$needSkip = false;
				
				$this->orderIds = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI64($elem1); 
						
						$this->orderIds[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("flags" == $schemeField){
				
				$needSkip = false;
				
				$this->flags = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readI32($elem2); 
						
						$this->flags[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("wmsFlags" == $schemeField){
				
				$needSkip = false;
				
				$this->wmsFlags = array();
				$_size3 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readI32($elem3); 
						
						$this->wmsFlags[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("syncDataIds" == $schemeField){
				
				$needSkip = false;
				
				$this->syncDataIds = array();
				$_size4 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readI64($elem4); 
						
						$this->syncDataIds[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("nextTimeRange" == $schemeField){
				
				$needSkip = false;
				
				$this->nextTimeRange = new \com\vip\xstore\order\common\pojo\vo\RangeParam();
				$this->nextTimeRange->read($input);
				
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
		
		if($this->orderIds !== null) {
			
			$xfer += $output->writeFieldBegin('orderIds');
			
			if (!is_array($this->orderIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->orderIds as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flags !== null) {
			
			$xfer += $output->writeFieldBegin('flags');
			
			if (!is_array($this->flags)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->flags as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wmsFlags !== null) {
			
			$xfer += $output->writeFieldBegin('wmsFlags');
			
			if (!is_array($this->wmsFlags)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->wmsFlags as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->syncDataIds !== null) {
			
			$xfer += $output->writeFieldBegin('syncDataIds');
			
			if (!is_array($this->syncDataIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->syncDataIds as $iter0){
				
				$xfer += $output->writeI64($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nextTimeRange !== null) {
			
			$xfer += $output->writeFieldBegin('nextTimeRange');
			
			if (!is_object($this->nextTimeRange)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->nextTimeRange->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>