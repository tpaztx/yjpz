<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class FixOrderPayTypeReq {
	
	static $_TSPEC;
	public $bizType = null;
	public $afterSaleApplyId = null;
	public $orderSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'bizType'
			),
			2 => array(
			'var' => 'afterSaleApplyId'
			),
			3 => array(
			'var' => 'orderSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['bizType'])){
				
				$this->bizType = $vals['bizType'];
			}
			
			
			if (isset($vals['afterSaleApplyId'])){
				
				$this->afterSaleApplyId = $vals['afterSaleApplyId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FixOrderPayTypeReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("bizType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bizType); 
				
			}
			
			
			
			
			if ("afterSaleApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->afterSaleApplyId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
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
		
		if($this->bizType !== null) {
			
			$xfer += $output->writeFieldBegin('bizType');
			$xfer += $output->writeI32($this->bizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->afterSaleApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('afterSaleApplyId');
			$xfer += $output->writeI64($this->afterSaleApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>