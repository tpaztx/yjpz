<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\response;

class GetPjbestOrderTaskStatusResp {
	
	static $_TSPEC;
	public $result = null;
	public $taskStatus = null;
	public $ackSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result'
			),
			2 => array(
			'var' => 'taskStatus'
			),
			3 => array(
			'var' => 'ackSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['taskStatus'])){
				
				$this->taskStatus = $vals['taskStatus'];
			}
			
			
			if (isset($vals['ackSn'])){
				
				$this->ackSn = $vals['ackSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetPjbestOrderTaskStatusResp';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("result" == $schemeField){
				
				$needSkip = false;
				
				$this->result = new \com\vip\xstore\order\common\pojo\vo\Result();
				$this->result->read($input);
				
			}
			
			
			
			
			if ("taskStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->taskStatus); 
				
			}
			
			
			
			
			if ("ackSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ackSn);
				
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
		
		if($this->result !== null) {
			
			$xfer += $output->writeFieldBegin('result');
			
			if (!is_object($this->result)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->result->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taskStatus !== null) {
			
			$xfer += $output->writeFieldBegin('taskStatus');
			$xfer += $output->writeI32($this->taskStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ackSn !== null) {
			
			$xfer += $output->writeFieldBegin('ackSn');
			$xfer += $output->writeString($this->ackSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>