<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipBindInfoV2 {
	
	static $_TSPEC;
	public $type = null;
	public $account = null;
	public $nick_name = null;
	public $figure_url = null;
	public $bind_time = null;
	public $days = null;
	public $third_acct_type = null;
	public $status = null;
	public $valid_time = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'account'
			),
			3 => array(
			'var' => 'nick_name'
			),
			4 => array(
			'var' => 'figure_url'
			),
			5 => array(
			'var' => 'bind_time'
			),
			6 => array(
			'var' => 'days'
			),
			7 => array(
			'var' => 'third_acct_type'
			),
			8 => array(
			'var' => 'status'
			),
			9 => array(
			'var' => 'valid_time'
			),
			10 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['account'])){
				
				$this->account = $vals['account'];
			}
			
			
			if (isset($vals['nick_name'])){
				
				$this->nick_name = $vals['nick_name'];
			}
			
			
			if (isset($vals['figure_url'])){
				
				$this->figure_url = $vals['figure_url'];
			}
			
			
			if (isset($vals['bind_time'])){
				
				$this->bind_time = $vals['bind_time'];
			}
			
			
			if (isset($vals['days'])){
				
				$this->days = $vals['days'];
			}
			
			
			if (isset($vals['third_acct_type'])){
				
				$this->third_acct_type = $vals['third_acct_type'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['valid_time'])){
				
				$this->valid_time = $vals['valid_time'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipBindInfoV2';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->type); 
				
			}
			
			
			
			
			if ("account" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->account);
				
			}
			
			
			
			
			if ("nick_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->nick_name);
				
			}
			
			
			
			
			if ("figure_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->figure_url);
				
			}
			
			
			
			
			if ("bind_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bind_time);
				
			}
			
			
			
			
			if ("days" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->days); 
				
			}
			
			
			
			
			if ("third_acct_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->third_acct_type); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("valid_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->valid_time);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeI32($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->account !== null) {
			
			$xfer += $output->writeFieldBegin('account');
			$xfer += $output->writeString($this->account);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->nick_name !== null) {
			
			$xfer += $output->writeFieldBegin('nick_name');
			$xfer += $output->writeString($this->nick_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->figure_url !== null) {
			
			$xfer += $output->writeFieldBegin('figure_url');
			$xfer += $output->writeString($this->figure_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bind_time !== null) {
			
			$xfer += $output->writeFieldBegin('bind_time');
			$xfer += $output->writeI64($this->bind_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('days');
		$xfer += $output->writeI32($this->days);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('third_acct_type');
		$xfer += $output->writeI32($this->third_acct_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->valid_time !== null) {
			
			$xfer += $output->writeFieldBegin('valid_time');
			$xfer += $output->writeI64($this->valid_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>