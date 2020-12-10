<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class UpdateOfcSyncAfterSaleDataReq {
	
	static $_TSPEC;
	public $syncData = null;
	public $bizCode = null;
	public $newWopBackSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'syncData'
			),
			2 => array(
			'var' => 'bizCode'
			),
			3 => array(
			'var' => 'newWopBackSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['syncData'])){
				
				$this->syncData = $vals['syncData'];
			}
			
			
			if (isset($vals['bizCode'])){
				
				$this->bizCode = $vals['bizCode'];
			}
			
			
			if (isset($vals['newWopBackSn'])){
				
				$this->newWopBackSn = $vals['newWopBackSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateOfcSyncAfterSaleDataReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("syncData" == $schemeField){
				
				$needSkip = false;
				
				$this->syncData = new \com\vip\xstore\order\common\pojo\vo\OfcSyncAfterSaleDataVO();
				$this->syncData->read($input);
				
			}
			
			
			
			
			if ("bizCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizCode); 
				
			}
			
			
			
			
			if ("newWopBackSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newWopBackSn);
				
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
		
		if($this->syncData !== null) {
			
			$xfer += $output->writeFieldBegin('syncData');
			
			if (!is_object($this->syncData)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->syncData->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizCode !== null) {
			
			$xfer += $output->writeFieldBegin('bizCode');
			$xfer += $output->writeI32($this->bizCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newWopBackSn !== null) {
			
			$xfer += $output->writeFieldBegin('newWopBackSn');
			$xfer += $output->writeString($this->newWopBackSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>