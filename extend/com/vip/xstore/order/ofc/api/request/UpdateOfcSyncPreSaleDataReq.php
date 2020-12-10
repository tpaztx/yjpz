<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class UpdateOfcSyncPreSaleDataReq {
	
	static $_TSPEC;
	public $bizCode = null;
	public $syncData = null;
	public $newAckSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bizCode'
			),
			2 => array(
			'var' => 'syncData'
			),
			3 => array(
			'var' => 'newAckSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bizCode'])){
				
				$this->bizCode = $vals['bizCode'];
			}
			
			
			if (isset($vals['syncData'])){
				
				$this->syncData = $vals['syncData'];
			}
			
			
			if (isset($vals['newAckSn'])){
				
				$this->newAckSn = $vals['newAckSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateOfcSyncPreSaleDataReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("bizCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizCode); 
				
			}
			
			
			
			
			if ("syncData" == $schemeField){
				
				$needSkip = false;
				
				$this->syncData = new \com\vip\xstore\order\common\pojo\vo\OfcSyncPreSaleDataVO();
				$this->syncData->read($input);
				
			}
			
			
			
			
			if ("newAckSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newAckSn);
				
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
		
		if($this->bizCode !== null) {
			
			$xfer += $output->writeFieldBegin('bizCode');
			$xfer += $output->writeI32($this->bizCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->syncData !== null) {
			
			$xfer += $output->writeFieldBegin('syncData');
			
			if (!is_object($this->syncData)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->syncData->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newAckSn !== null) {
			
			$xfer += $output->writeFieldBegin('newAckSn');
			$xfer += $output->writeString($this->newAckSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>