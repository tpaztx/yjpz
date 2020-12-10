<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class WxCodeGenRequest {
	
	static $_TSPEC;
	public $targetValue = null;
	public $targetType = null;
	public $chanTag = null;
	public $requestId = null;
	public $statParam = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'targetValue'
			),
			2 => array(
			'var' => 'targetType'
			),
			3 => array(
			'var' => 'chanTag'
			),
			4 => array(
			'var' => 'requestId'
			),
			5 => array(
			'var' => 'statParam'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['targetValue'])){
				
				$this->targetValue = $vals['targetValue'];
			}
			
			
			if (isset($vals['targetType'])){
				
				$this->targetType = $vals['targetType'];
			}
			
			
			if (isset($vals['chanTag'])){
				
				$this->chanTag = $vals['chanTag'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['statParam'])){
				
				$this->statParam = $vals['statParam'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WxCodeGenRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("targetValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->targetValue);
				
			}
			
			
			
			
			if ("targetType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->targetType);
				
			}
			
			
			
			
			if ("chanTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chanTag);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->requestId);
				
			}
			
			
			
			
			if ("statParam" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->statParam);
				
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
		
		if($this->targetValue !== null) {
			
			$xfer += $output->writeFieldBegin('targetValue');
			$xfer += $output->writeString($this->targetValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->targetType !== null) {
			
			$xfer += $output->writeFieldBegin('targetType');
			$xfer += $output->writeString($this->targetType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chanTag !== null) {
			
			$xfer += $output->writeFieldBegin('chanTag');
			$xfer += $output->writeString($this->chanTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeString($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->statParam !== null) {
			
			$xfer += $output->writeFieldBegin('statParam');
			$xfer += $output->writeString($this->statParam);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>