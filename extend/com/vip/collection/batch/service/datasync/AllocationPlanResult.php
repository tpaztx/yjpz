<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\collection\batch\service\datasync;

class AllocationPlanResult {
	
	static $_TSPEC;
	public $success = null;
	public $failMsgs = null;
	public $total = null;
	public $allocationDate = null;
	public $contracts = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'success'
			),
			2 => array(
			'var' => 'failMsgs'
			),
			3 => array(
			'var' => 'total'
			),
			4 => array(
			'var' => 'allocationDate'
			),
			5 => array(
			'var' => 'contracts'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
			if (isset($vals['failMsgs'])){
				
				$this->failMsgs = $vals['failMsgs'];
			}
			
			
			if (isset($vals['total'])){
				
				$this->total = $vals['total'];
			}
			
			
			if (isset($vals['allocationDate'])){
				
				$this->allocationDate = $vals['allocationDate'];
			}
			
			
			if (isset($vals['contracts'])){
				
				$this->contracts = $vals['contracts'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AllocationPlanResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("success" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->success);
				
			}
			
			
			
			
			if ("failMsgs" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->failMsgs);
				
			}
			
			
			
			
			if ("total" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total); 
				
			}
			
			
			
			
			if ("allocationDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->allocationDate);
				
			}
			
			
			
			
			if ("contracts" == $schemeField){
				
				$needSkip = false;
				
				$this->contracts = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\collection\batch\service\datasync\AllocationContract();
						$elem0->read($input);
						
						$this->contracts[$_size0++] = $elem0;
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
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failMsgs !== null) {
			
			$xfer += $output->writeFieldBegin('failMsgs');
			$xfer += $output->writeString($this->failMsgs);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total !== null) {
			
			$xfer += $output->writeFieldBegin('total');
			$xfer += $output->writeI32($this->total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allocationDate !== null) {
			
			$xfer += $output->writeFieldBegin('allocationDate');
			$xfer += $output->writeString($this->allocationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contracts !== null) {
			
			$xfer += $output->writeFieldBegin('contracts');
			
			if (!is_array($this->contracts)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->contracts as $iter0){
				
				
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