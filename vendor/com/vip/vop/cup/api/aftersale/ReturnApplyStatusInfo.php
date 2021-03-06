<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\aftersale;

class ReturnApplyStatusInfo {
	
	static $_TSPEC;
	public $apply_id = null;
	public $order_sn = null;
	public $user_code = null;
	public $scenario_code = null;
	public $return_status = null;
	public $extra_data = null;
	public $update_time = null;
	public $biz_update_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'apply_id'
			),
			2 => array(
			'var' => 'order_sn'
			),
			3 => array(
			'var' => 'user_code'
			),
			4 => array(
			'var' => 'scenario_code'
			),
			5 => array(
			'var' => 'return_status'
			),
			6 => array(
			'var' => 'extra_data'
			),
			7 => array(
			'var' => 'update_time'
			),
			8 => array(
			'var' => 'biz_update_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['apply_id'])){
				
				$this->apply_id = $vals['apply_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['user_code'])){
				
				$this->user_code = $vals['user_code'];
			}
			
			
			if (isset($vals['scenario_code'])){
				
				$this->scenario_code = $vals['scenario_code'];
			}
			
			
			if (isset($vals['return_status'])){
				
				$this->return_status = $vals['return_status'];
			}
			
			
			if (isset($vals['extra_data'])){
				
				$this->extra_data = $vals['extra_data'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['biz_update_time'])){
				
				$this->biz_update_time = $vals['biz_update_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnApplyStatusInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("apply_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->apply_id);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("user_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->user_code);
				
			}
			
			
			
			
			if ("scenario_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->scenario_code);
				
			}
			
			
			
			
			if ("return_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->return_status); 
				
			}
			
			
			
			
			if ("extra_data" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extra_data);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
			}
			
			
			
			
			if ("biz_update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->biz_update_time);
				
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
		
		if($this->apply_id !== null) {
			
			$xfer += $output->writeFieldBegin('apply_id');
			$xfer += $output->writeString($this->apply_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->user_code !== null) {
			
			$xfer += $output->writeFieldBegin('user_code');
			$xfer += $output->writeString($this->user_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->scenario_code !== null) {
			
			$xfer += $output->writeFieldBegin('scenario_code');
			$xfer += $output->writeString($this->scenario_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->return_status !== null) {
			
			$xfer += $output->writeFieldBegin('return_status');
			$xfer += $output->writeI32($this->return_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extra_data !== null) {
			
			$xfer += $output->writeFieldBegin('extra_data');
			$xfer += $output->writeString($this->extra_data);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeString($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->biz_update_time !== null) {
			
			$xfer += $output->writeFieldBegin('biz_update_time');
			$xfer += $output->writeString($this->biz_update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>