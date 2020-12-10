<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\collection\batch\service\datasync;

class AllocationContract {
	
	static $_TSPEC;
	public $contractNum = null;
	public $queueTag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'contractNum'
			),
			2 => array(
			'var' => 'queueTag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['contractNum'])){
				
				$this->contractNum = $vals['contractNum'];
			}
			
			
			if (isset($vals['queueTag'])){
				
				$this->queueTag = $vals['queueTag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AllocationContract';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("contractNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contractNum);
				
			}
			
			
			
			
			if ("queueTag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->queueTag);
				
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
		
		if($this->contractNum !== null) {
			
			$xfer += $output->writeFieldBegin('contractNum');
			$xfer += $output->writeString($this->contractNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queueTag !== null) {
			
			$xfer += $output->writeFieldBegin('queueTag');
			$xfer += $output->writeString($this->queueTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>