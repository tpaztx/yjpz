<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class AsynCmdVO {
	
	static $_TSPEC;
	public $id = null;
	public $userId = null;
	public $orderSn = null;
	public $sourceTransId = null;
	public $sourceTransTime = null;
	public $sourceFunc = null;
	public $msgCategory = null;
	public $msgType = null;
	public $msgContent = null;
	public $procIndex = null;
	public $isProc = null;
	public $procTime = null;
	public $procTimes = null;
	public $errCode = null;
	public $errMessage = null;
	public $isDeleted = null;
	public $createTime = null;
	public $updateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'userId'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'sourceTransId'
			),
			5 => array(
			'var' => 'sourceTransTime'
			),
			6 => array(
			'var' => 'sourceFunc'
			),
			7 => array(
			'var' => 'msgCategory'
			),
			8 => array(
			'var' => 'msgType'
			),
			9 => array(
			'var' => 'msgContent'
			),
			10 => array(
			'var' => 'procIndex'
			),
			11 => array(
			'var' => 'isProc'
			),
			12 => array(
			'var' => 'procTime'
			),
			13 => array(
			'var' => 'procTimes'
			),
			14 => array(
			'var' => 'errCode'
			),
			15 => array(
			'var' => 'errMessage'
			),
			16 => array(
			'var' => 'isDeleted'
			),
			17 => array(
			'var' => 'createTime'
			),
			18 => array(
			'var' => 'updateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['sourceTransId'])){
				
				$this->sourceTransId = $vals['sourceTransId'];
			}
			
			
			if (isset($vals['sourceTransTime'])){
				
				$this->sourceTransTime = $vals['sourceTransTime'];
			}
			
			
			if (isset($vals['sourceFunc'])){
				
				$this->sourceFunc = $vals['sourceFunc'];
			}
			
			
			if (isset($vals['msgCategory'])){
				
				$this->msgCategory = $vals['msgCategory'];
			}
			
			
			if (isset($vals['msgType'])){
				
				$this->msgType = $vals['msgType'];
			}
			
			
			if (isset($vals['msgContent'])){
				
				$this->msgContent = $vals['msgContent'];
			}
			
			
			if (isset($vals['procIndex'])){
				
				$this->procIndex = $vals['procIndex'];
			}
			
			
			if (isset($vals['isProc'])){
				
				$this->isProc = $vals['isProc'];
			}
			
			
			if (isset($vals['procTime'])){
				
				$this->procTime = $vals['procTime'];
			}
			
			
			if (isset($vals['procTimes'])){
				
				$this->procTimes = $vals['procTimes'];
			}
			
			
			if (isset($vals['errCode'])){
				
				$this->errCode = $vals['errCode'];
			}
			
			
			if (isset($vals['errMessage'])){
				
				$this->errMessage = $vals['errMessage'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AsynCmdVO';
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
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("sourceTransId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceTransId);
				
			}
			
			
			
			
			if ("sourceTransTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sourceTransTime); 
				
			}
			
			
			
			
			if ("sourceFunc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceFunc);
				
			}
			
			
			
			
			if ("msgCategory" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->msgCategory); 
				
			}
			
			
			
			
			if ("msgType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->msgType); 
				
			}
			
			
			
			
			if ("msgContent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msgContent);
				
			}
			
			
			
			
			if ("procIndex" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->procIndex); 
				
			}
			
			
			
			
			if ("isProc" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isProc); 
				
			}
			
			
			
			
			if ("procTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->procTime); 
				
			}
			
			
			
			
			if ("procTimes" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->procTimes); 
				
			}
			
			
			
			
			if ("errCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errCode);
				
			}
			
			
			
			
			if ("errMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errMessage);
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDeleted); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->updateTime); 
				
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
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceTransId !== null) {
			
			$xfer += $output->writeFieldBegin('sourceTransId');
			$xfer += $output->writeString($this->sourceTransId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceTransTime !== null) {
			
			$xfer += $output->writeFieldBegin('sourceTransTime');
			$xfer += $output->writeI32($this->sourceTransTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceFunc !== null) {
			
			$xfer += $output->writeFieldBegin('sourceFunc');
			$xfer += $output->writeString($this->sourceFunc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msgCategory !== null) {
			
			$xfer += $output->writeFieldBegin('msgCategory');
			$xfer += $output->writeI32($this->msgCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msgType !== null) {
			
			$xfer += $output->writeFieldBegin('msgType');
			$xfer += $output->writeI32($this->msgType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msgContent !== null) {
			
			$xfer += $output->writeFieldBegin('msgContent');
			$xfer += $output->writeString($this->msgContent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procIndex !== null) {
			
			$xfer += $output->writeFieldBegin('procIndex');
			$xfer += $output->writeI32($this->procIndex);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isProc !== null) {
			
			$xfer += $output->writeFieldBegin('isProc');
			$xfer += $output->writeI32($this->isProc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procTime !== null) {
			
			$xfer += $output->writeFieldBegin('procTime');
			$xfer += $output->writeI32($this->procTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procTimes !== null) {
			
			$xfer += $output->writeFieldBegin('procTimes');
			$xfer += $output->writeI32($this->procTimes);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errCode !== null) {
			
			$xfer += $output->writeFieldBegin('errCode');
			$xfer += $output->writeString($this->errCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errMessage !== null) {
			
			$xfer += $output->writeFieldBegin('errMessage');
			$xfer += $output->writeString($this->errMessage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI32($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI32($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI32($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>