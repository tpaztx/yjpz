<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\cabinet;

class LockerAction {
	
	static $_TSPEC;
	public $logistics_no = null;
	public $trade_id = null;
	public $locker_code = null;
	public $expired_time = null;
	public $express_cabinet_code = null;
	public $action_code = null;
	public $trace_code = null;
	public $locker_address = null;
	public $remark = null;
	public $reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'logistics_no'
			),
			2 => array(
			'var' => 'trade_id'
			),
			3 => array(
			'var' => 'locker_code'
			),
			4 => array(
			'var' => 'expired_time'
			),
			5 => array(
			'var' => 'express_cabinet_code'
			),
			6 => array(
			'var' => 'action_code'
			),
			7 => array(
			'var' => 'trace_code'
			),
			8 => array(
			'var' => 'locker_address'
			),
			9 => array(
			'var' => 'remark'
			),
			10 => array(
			'var' => 'reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['trade_id'])){
				
				$this->trade_id = $vals['trade_id'];
			}
			
			
			if (isset($vals['locker_code'])){
				
				$this->locker_code = $vals['locker_code'];
			}
			
			
			if (isset($vals['expired_time'])){
				
				$this->expired_time = $vals['expired_time'];
			}
			
			
			if (isset($vals['express_cabinet_code'])){
				
				$this->express_cabinet_code = $vals['express_cabinet_code'];
			}
			
			
			if (isset($vals['action_code'])){
				
				$this->action_code = $vals['action_code'];
			}
			
			
			if (isset($vals['trace_code'])){
				
				$this->trace_code = $vals['trace_code'];
			}
			
			
			if (isset($vals['locker_address'])){
				
				$this->locker_address = $vals['locker_address'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['reason'])){
				
				$this->reason = $vals['reason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'LockerAction';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_id);
				
			}
			
			
			
			
			if ("locker_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->locker_code);
				
			}
			
			
			
			
			if ("expired_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expired_time); 
				
			}
			
			
			
			
			if ("express_cabinet_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->express_cabinet_code);
				
			}
			
			
			
			
			if ("action_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->action_code);
				
			}
			
			
			
			
			if ("trace_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trace_code);
				
			}
			
			
			
			
			if ("locker_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->locker_address);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reason);
				
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
		
		$xfer += $output->writeFieldBegin('logistics_no');
		$xfer += $output->writeString($this->logistics_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('trade_id');
		$xfer += $output->writeString($this->trade_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->locker_code !== null) {
			
			$xfer += $output->writeFieldBegin('locker_code');
			$xfer += $output->writeString($this->locker_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expired_time !== null) {
			
			$xfer += $output->writeFieldBegin('expired_time');
			$xfer += $output->writeI64($this->expired_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->express_cabinet_code !== null) {
			
			$xfer += $output->writeFieldBegin('express_cabinet_code');
			$xfer += $output->writeString($this->express_cabinet_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('action_code');
		$xfer += $output->writeString($this->action_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->trace_code !== null) {
			
			$xfer += $output->writeFieldBegin('trace_code');
			$xfer += $output->writeString($this->trace_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->locker_address !== null) {
			
			$xfer += $output->writeFieldBegin('locker_address');
			$xfer += $output->writeString($this->locker_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reason !== null) {
			
			$xfer += $output->writeFieldBegin('reason');
			$xfer += $output->writeString($this->reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>