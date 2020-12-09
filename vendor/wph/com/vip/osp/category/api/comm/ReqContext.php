<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class ReqContext {
	
	static $_TSPEC;
	public $appId = null;
	public $operator = null;
	public $scenario = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'appId'
			),
			2 => array(
			'var' => 'operator'
			),
			3 => array(
			'var' => 'scenario'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['scenario'])){
				
				$this->scenario = $vals['scenario'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReqContext';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("appId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->appId);
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("scenario" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scenario);
				
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
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scenario !== null) {
			
			$xfer += $output->writeFieldBegin('scenario');
			$xfer += $output->writeString($this->scenario);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>