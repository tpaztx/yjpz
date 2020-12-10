<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class InfOnlineInPreSaleVO {
	
	static $_TSPEC;
	public $scenarioCode = null;
	public $orderSn = null;
	public $userId = null;
	public $bizTime = null;
	public $channel = null;
	public $id = null;
	public $createTime = null;
	public $updateTime = null;
	public $procTime = null;
	public $procStatus = null;
	public $errorCount = null;
	public $errorMsg = null;
	public $isDeleted = null;
	public $extraData = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'scenarioCode'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'userId'
			),
			4 => array(
			'var' => 'bizTime'
			),
			5 => array(
			'var' => 'channel'
			),
			6 => array(
			'var' => 'id'
			),
			7 => array(
			'var' => 'createTime'
			),
			8 => array(
			'var' => 'updateTime'
			),
			9 => array(
			'var' => 'procTime'
			),
			10 => array(
			'var' => 'procStatus'
			),
			11 => array(
			'var' => 'errorCount'
			),
			12 => array(
			'var' => 'errorMsg'
			),
			13 => array(
			'var' => 'isDeleted'
			),
			14 => array(
			'var' => 'extraData'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['scenarioCode'])){
				
				$this->scenarioCode = $vals['scenarioCode'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['bizTime'])){
				
				$this->bizTime = $vals['bizTime'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['procTime'])){
				
				$this->procTime = $vals['procTime'];
			}
			
			
			if (isset($vals['procStatus'])){
				
				$this->procStatus = $vals['procStatus'];
			}
			
			
			if (isset($vals['errorCount'])){
				
				$this->errorCount = $vals['errorCount'];
			}
			
			
			if (isset($vals['errorMsg'])){
				
				$this->errorMsg = $vals['errorMsg'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['extraData'])){
				
				$this->extraData = $vals['extraData'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InfOnlineInPreSaleVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("scenarioCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->scenarioCode); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("bizTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bizTime); 
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("procTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->procTime); 
				
			}
			
			
			
			
			if ("procStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->procStatus); 
				
			}
			
			
			
			
			if ("errorCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->errorCount); 
				
			}
			
			
			
			
			if ("errorMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMsg);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDeleted); 
				
			}
			
			
			
			
			if ("extraData" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extraData);
				
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
		
		if($this->scenarioCode !== null) {
			
			$xfer += $output->writeFieldBegin('scenarioCode');
			$xfer += $output->writeI32($this->scenarioCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizTime !== null) {
			
			$xfer += $output->writeFieldBegin('bizTime');
			$xfer += $output->writeI64($this->bizTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procTime !== null) {
			
			$xfer += $output->writeFieldBegin('procTime');
			$xfer += $output->writeI64($this->procTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procStatus !== null) {
			
			$xfer += $output->writeFieldBegin('procStatus');
			$xfer += $output->writeI32($this->procStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorCount !== null) {
			
			$xfer += $output->writeFieldBegin('errorCount');
			$xfer += $output->writeI32($this->errorCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errorMsg');
			$xfer += $output->writeString($this->errorMsg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI32($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extraData !== null) {
			
			$xfer += $output->writeFieldBegin('extraData');
			$xfer += $output->writeString($this->extraData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>