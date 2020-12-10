<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcVopApplyPayResultVO {
	
	static $_TSPEC;
	public $applySuccess = null;
	public $failReason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'applySuccess'
			),
			12002 => array(
			'var' => 'failReason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['applySuccess'])){
				
				$this->applySuccess = $vals['applySuccess'];
			}
			
			
			if (isset($vals['failReason'])){
				
				$this->failReason = $vals['failReason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcVopApplyPayResultVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("applySuccess" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->applySuccess);
				
			}
			
			
			
			
			if ("failReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->failReason);
				
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
		
		if($this->applySuccess !== null) {
			
			$xfer += $output->writeFieldBegin('applySuccess');
			$xfer += $output->writeBool($this->applySuccess);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failReason !== null) {
			
			$xfer += $output->writeFieldBegin('failReason');
			$xfer += $output->writeString($this->failReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>