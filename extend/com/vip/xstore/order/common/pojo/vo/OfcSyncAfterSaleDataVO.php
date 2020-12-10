<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class OfcSyncAfterSaleDataVO {
	
	static $_TSPEC;
	public $id = null;
	public $orderId = null;
	public $applyId = null;
	public $userId = null;
	public $flag = null;
	public $wmsFlag = null;
	public $warehouse = null;
	public $createTime = null;
	public $retryCount = null;
	public $updateTime = null;
	public $exportTime = null;
	public $nextTime = null;
	public $orderSn = null;
	public $wopBackSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'orderId'
			),
			3 => array(
			'var' => 'applyId'
			),
			4 => array(
			'var' => 'userId'
			),
			5 => array(
			'var' => 'flag'
			),
			6 => array(
			'var' => 'wmsFlag'
			),
			7 => array(
			'var' => 'warehouse'
			),
			8 => array(
			'var' => 'createTime'
			),
			9 => array(
			'var' => 'retryCount'
			),
			10 => array(
			'var' => 'updateTime'
			),
			11 => array(
			'var' => 'exportTime'
			),
			12 => array(
			'var' => 'nextTime'
			),
			13 => array(
			'var' => 'orderSn'
			),
			14 => array(
			'var' => 'wopBackSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['orderId'])){
				
				$this->orderId = $vals['orderId'];
			}
			
			
			if (isset($vals['applyId'])){
				
				$this->applyId = $vals['applyId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['flag'])){
				
				$this->flag = $vals['flag'];
			}
			
			
			if (isset($vals['wmsFlag'])){
				
				$this->wmsFlag = $vals['wmsFlag'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['retryCount'])){
				
				$this->retryCount = $vals['retryCount'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['exportTime'])){
				
				$this->exportTime = $vals['exportTime'];
			}
			
			
			if (isset($vals['nextTime'])){
				
				$this->nextTime = $vals['nextTime'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['wopBackSn'])){
				
				$this->wopBackSn = $vals['wopBackSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OfcSyncAfterSaleDataVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("orderId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderId); 
				
			}
			
			
			
			
			if ("applyId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->applyId); 
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->flag); 
				
			}
			
			
			
			
			if ("wmsFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->wmsFlag); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("retryCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->retryCount); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("exportTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->exportTime); 
				
			}
			
			
			
			
			if ("nextTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->nextTime); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("wopBackSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wopBackSn);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderId !== null) {
			
			$xfer += $output->writeFieldBegin('orderId');
			$xfer += $output->writeI64($this->orderId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyId !== null) {
			
			$xfer += $output->writeFieldBegin('applyId');
			$xfer += $output->writeI64($this->applyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flag !== null) {
			
			$xfer += $output->writeFieldBegin('flag');
			$xfer += $output->writeI32($this->flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wmsFlag !== null) {
			
			$xfer += $output->writeFieldBegin('wmsFlag');
			$xfer += $output->writeI32($this->wmsFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retryCount !== null) {
			
			$xfer += $output->writeFieldBegin('retryCount');
			$xfer += $output->writeI32($this->retryCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->exportTime !== null) {
			
			$xfer += $output->writeFieldBegin('exportTime');
			$xfer += $output->writeI64($this->exportTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nextTime !== null) {
			
			$xfer += $output->writeFieldBegin('nextTime');
			$xfer += $output->writeI64($this->nextTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wopBackSn !== null) {
			
			$xfer += $output->writeFieldBegin('wopBackSn');
			$xfer += $output->writeString($this->wopBackSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>