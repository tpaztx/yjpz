<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class PidInfo {
	
	static $_TSPEC;
	public $pid = null;
	public $pidName = null;
	public $createTime = null;
	public $ucode = null;
	public $b2cUserId = null;
	public $status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pid'
			),
			2 => array(
			'var' => 'pidName'
			),
			3 => array(
			'var' => 'createTime'
			),
			4 => array(
			'var' => 'ucode'
			),
			5 => array(
			'var' => 'b2cUserId'
			),
			6 => array(
			'var' => 'status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pid'])){
				
				$this->pid = $vals['pid'];
			}
			
			
			if (isset($vals['pidName'])){
				
				$this->pidName = $vals['pidName'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['ucode'])){
				
				$this->ucode = $vals['ucode'];
			}
			
			
			if (isset($vals['b2cUserId'])){
				
				$this->b2cUserId = $vals['b2cUserId'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PidInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pid);
				
			}
			
			
			
			
			if ("pidName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pidName);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("ucode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ucode);
				
			}
			
			
			
			
			if ("b2cUserId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->b2cUserId);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
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
		
		if($this->pid !== null) {
			
			$xfer += $output->writeFieldBegin('pid');
			$xfer += $output->writeString($this->pid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pidName !== null) {
			
			$xfer += $output->writeFieldBegin('pidName');
			$xfer += $output->writeString($this->pidName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ucode !== null) {
			
			$xfer += $output->writeFieldBegin('ucode');
			$xfer += $output->writeString($this->ucode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->b2cUserId !== null) {
			
			$xfer += $output->writeFieldBegin('b2cUserId');
			$xfer += $output->writeString($this->b2cUserId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>