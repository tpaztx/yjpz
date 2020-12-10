<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\response;

class OfcSyncAfterSaleDataResp {
	
	static $_TSPEC;
	public $result = null;
	public $bizCode = null;
	public $wopBackSn = null;
	public $newAfterSaleSyncData = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'result'
			),
			2 => array(
			'var' => 'bizCode'
			),
			3 => array(
			'var' => 'wopBackSn'
			),
			4 => array(
			'var' => 'newAfterSaleSyncData'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['result'])){
				
				$this->result = $vals['result'];
			}
			
			
			if (isset($vals['bizCode'])){
				
				$this->bizCode = $vals['bizCode'];
			}
			
			
			if (isset($vals['wopBackSn'])){
				
				$this->wopBackSn = $vals['wopBackSn'];
			}
			
			
			if (isset($vals['newAfterSaleSyncData'])){
				
				$this->newAfterSaleSyncData = $vals['newAfterSaleSyncData'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OfcSyncAfterSaleDataResp';
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
			
			
			
			
			if ("bizCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizCode); 
				
			}
			
			
			
			
			if ("wopBackSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wopBackSn);
				
			}
			
			
			
			
			if ("newAfterSaleSyncData" == $schemeField){
				
				$needSkip = false;
				
				$this->newAfterSaleSyncData = new \com\vip\xstore\order\common\pojo\vo\OfcSyncAfterSaleDataVO();
				$this->newAfterSaleSyncData->read($input);
				
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
		
		
		if($this->bizCode !== null) {
			
			$xfer += $output->writeFieldBegin('bizCode');
			$xfer += $output->writeI32($this->bizCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wopBackSn !== null) {
			
			$xfer += $output->writeFieldBegin('wopBackSn');
			$xfer += $output->writeString($this->wopBackSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newAfterSaleSyncData !== null) {
			
			$xfer += $output->writeFieldBegin('newAfterSaleSyncData');
			
			if (!is_object($this->newAfterSaleSyncData)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->newAfterSaleSyncData->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>