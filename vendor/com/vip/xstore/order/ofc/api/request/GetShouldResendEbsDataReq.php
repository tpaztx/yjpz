<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class GetShouldResendEbsDataReq {
	
	static $_TSPEC;
	public $service = null;
	public $maxRetryCount = null;
	public $lastSyncTimeRange = null;
	public $isMaster = null;
	public $scenarioCodes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'service'
			),
			2 => array(
			'var' => 'maxRetryCount'
			),
			3 => array(
			'var' => 'lastSyncTimeRange'
			),
			4 => array(
			'var' => 'isMaster'
			),
			5 => array(
			'var' => 'scenarioCodes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['service'])){
				
				$this->service = $vals['service'];
			}
			
			
			if (isset($vals['maxRetryCount'])){
				
				$this->maxRetryCount = $vals['maxRetryCount'];
			}
			
			
			if (isset($vals['lastSyncTimeRange'])){
				
				$this->lastSyncTimeRange = $vals['lastSyncTimeRange'];
			}
			
			
			if (isset($vals['isMaster'])){
				
				$this->isMaster = $vals['isMaster'];
			}
			
			
			if (isset($vals['scenarioCodes'])){
				
				$this->scenarioCodes = $vals['scenarioCodes'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetShouldResendEbsDataReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("service" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->service);
				
			}
			
			
			
			
			if ("maxRetryCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->maxRetryCount); 
				
			}
			
			
			
			
			if ("lastSyncTimeRange" == $schemeField){
				
				$needSkip = false;
				
				$this->lastSyncTimeRange = new \com\vip\xstore\order\common\pojo\vo\RangeParam();
				$this->lastSyncTimeRange->read($input);
				
			}
			
			
			
			
			if ("isMaster" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isMaster); 
				
			}
			
			
			
			
			if ("scenarioCodes" == $schemeField){
				
				$needSkip = false;
				
				$this->scenarioCodes = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI32($elem0); 
						
						$this->scenarioCodes[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
		
		if($this->service !== null) {
			
			$xfer += $output->writeFieldBegin('service');
			$xfer += $output->writeString($this->service);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxRetryCount !== null) {
			
			$xfer += $output->writeFieldBegin('maxRetryCount');
			$xfer += $output->writeI32($this->maxRetryCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastSyncTimeRange !== null) {
			
			$xfer += $output->writeFieldBegin('lastSyncTimeRange');
			
			if (!is_object($this->lastSyncTimeRange)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->lastSyncTimeRange->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isMaster !== null) {
			
			$xfer += $output->writeFieldBegin('isMaster');
			$xfer += $output->writeI32($this->isMaster);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scenarioCodes !== null) {
			
			$xfer += $output->writeFieldBegin('scenarioCodes');
			
			if (!is_array($this->scenarioCodes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->scenarioCodes as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>