<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class AttrOpts {
	
	static $_TSPEC;
	public $optId = null;
	public $optName = null;
	public $operationType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'optId'
			),
			2 => array(
			'var' => 'optName'
			),
			3 => array(
			'var' => 'operationType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['optId'])){
				
				$this->optId = $vals['optId'];
			}
			
			
			if (isset($vals['optName'])){
				
				$this->optName = $vals['optName'];
			}
			
			
			if (isset($vals['operationType'])){
				
				$this->operationType = $vals['operationType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AttrOpts';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("optId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->optId); 
				
			}
			
			
			
			
			if ("optName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->optName);
				
			}
			
			
			
			
			if ("operationType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\OperationType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->operationType = $k;
						break;
					}
					
				}
				
				
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
		
		if($this->optId !== null) {
			
			$xfer += $output->writeFieldBegin('optId');
			$xfer += $output->writeI32($this->optId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->optName !== null) {
			
			$xfer += $output->writeFieldBegin('optName');
			$xfer += $output->writeString($this->optName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operationType !== null) {
			
			$xfer += $output->writeFieldBegin('operationType');
			
			$em = new \com\vip\category\service\OperationType; 
			$output->writeString($em::$__names[$this->operationType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>