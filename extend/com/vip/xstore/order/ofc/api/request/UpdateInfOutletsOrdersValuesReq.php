<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class UpdateInfOutletsOrdersValuesReq {
	
	static $_TSPEC;
	public $procStatus = null;
	public $procTime = null;
	public $errorCount = null;
	public $errorMsg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'procStatus'
			),
			2 => array(
			'var' => 'procTime'
			),
			3 => array(
			'var' => 'errorCount'
			),
			4 => array(
			'var' => 'errorMsg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['procStatus'])){
				
				$this->procStatus = $vals['procStatus'];
			}
			
			
			if (isset($vals['procTime'])){
				
				$this->procTime = $vals['procTime'];
			}
			
			
			if (isset($vals['errorCount'])){
				
				$this->errorCount = $vals['errorCount'];
			}
			
			
			if (isset($vals['errorMsg'])){
				
				$this->errorMsg = $vals['errorMsg'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateInfOutletsOrdersValuesReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("procStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->procStatus); 
				
			}
			
			
			
			
			if ("procTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->procTime); 
				
			}
			
			
			
			
			if ("errorCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->errorCount); 
				
			}
			
			
			
			
			if ("errorMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMsg);
				
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
		
		if($this->procStatus !== null) {
			
			$xfer += $output->writeFieldBegin('procStatus');
			$xfer += $output->writeI32($this->procStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procTime !== null) {
			
			$xfer += $output->writeFieldBegin('procTime');
			$xfer += $output->writeI64($this->procTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorCount !== null) {
			
			$xfer += $output->writeFieldBegin('errorCount');
			$xfer += $output->writeI32($this->errorCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errorMsg');
			$xfer += $output->writeString($this->errorMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>