<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\pay;

class PayResponse {
	
	static $_TSPEC;
	public $code = null;
	public $message = null;
	public $pay_result = null;
	public $pay_message = null;
	public $vip_order_sn = null;
	public $auth_code = null;
	public $device = null;
	public $amount = null;
	public $pay_type = null;
	public $pay_sn = null;
	public $trade_no = null;
	public $success_pay_time = null;
	public $pre_pay_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'code'
			),
			2 => array(
			'var' => 'message'
			),
			3 => array(
			'var' => 'pay_result'
			),
			4 => array(
			'var' => 'pay_message'
			),
			5 => array(
			'var' => 'vip_order_sn'
			),
			6 => array(
			'var' => 'auth_code'
			),
			7 => array(
			'var' => 'device'
			),
			8 => array(
			'var' => 'amount'
			),
			9 => array(
			'var' => 'pay_type'
			),
			10 => array(
			'var' => 'pay_sn'
			),
			11 => array(
			'var' => 'trade_no'
			),
			12 => array(
			'var' => 'success_pay_time'
			),
			13 => array(
			'var' => 'pre_pay_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['code'])){
				
				$this->code = $vals['code'];
			}
			
			
			if (isset($vals['message'])){
				
				$this->message = $vals['message'];
			}
			
			
			if (isset($vals['pay_result'])){
				
				$this->pay_result = $vals['pay_result'];
			}
			
			
			if (isset($vals['pay_message'])){
				
				$this->pay_message = $vals['pay_message'];
			}
			
			
			if (isset($vals['vip_order_sn'])){
				
				$this->vip_order_sn = $vals['vip_order_sn'];
			}
			
			
			if (isset($vals['auth_code'])){
				
				$this->auth_code = $vals['auth_code'];
			}
			
			
			if (isset($vals['device'])){
				
				$this->device = $vals['device'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['pay_sn'])){
				
				$this->pay_sn = $vals['pay_sn'];
			}
			
			
			if (isset($vals['trade_no'])){
				
				$this->trade_no = $vals['trade_no'];
			}
			
			
			if (isset($vals['success_pay_time'])){
				
				$this->success_pay_time = $vals['success_pay_time'];
			}
			
			
			if (isset($vals['pre_pay_id'])){
				
				$this->pre_pay_id = $vals['pre_pay_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PayResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->code);
				
			}
			
			
			
			
			if ("message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->message);
				
			}
			
			
			
			
			if ("pay_result" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_result);
				
			}
			
			
			
			
			if ("pay_message" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_message);
				
			}
			
			
			
			
			if ("vip_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vip_order_sn);
				
			}
			
			
			
			
			if ("auth_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auth_code);
				
			}
			
			
			
			
			if ("device" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->device);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->amount);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pay_type); 
				
			}
			
			
			
			
			if ("pay_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_sn);
				
			}
			
			
			
			
			if ("trade_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_no);
				
			}
			
			
			
			
			if ("success_pay_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->success_pay_time);
				
			}
			
			
			
			
			if ("pre_pay_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pre_pay_id);
				
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
		
		if($this->code !== null) {
			
			$xfer += $output->writeFieldBegin('code');
			$xfer += $output->writeString($this->code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->message !== null) {
			
			$xfer += $output->writeFieldBegin('message');
			$xfer += $output->writeString($this->message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_result !== null) {
			
			$xfer += $output->writeFieldBegin('pay_result');
			$xfer += $output->writeString($this->pay_result);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_message !== null) {
			
			$xfer += $output->writeFieldBegin('pay_message');
			$xfer += $output->writeString($this->pay_message);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vip_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('vip_order_sn');
			$xfer += $output->writeString($this->vip_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auth_code !== null) {
			
			$xfer += $output->writeFieldBegin('auth_code');
			$xfer += $output->writeString($this->auth_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->device !== null) {
			
			$xfer += $output->writeFieldBegin('device');
			$xfer += $output->writeString($this->device);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeString($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeI32($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_sn !== null) {
			
			$xfer += $output->writeFieldBegin('pay_sn');
			$xfer += $output->writeString($this->pay_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trade_no !== null) {
			
			$xfer += $output->writeFieldBegin('trade_no');
			$xfer += $output->writeString($this->trade_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->success_pay_time !== null) {
			
			$xfer += $output->writeFieldBegin('success_pay_time');
			$xfer += $output->writeString($this->success_pay_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pre_pay_id !== null) {
			
			$xfer += $output->writeFieldBegin('pre_pay_id');
			$xfer += $output->writeString($this->pre_pay_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>