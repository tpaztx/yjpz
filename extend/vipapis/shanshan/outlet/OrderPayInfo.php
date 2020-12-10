<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class OrderPayInfo {
	
	static $_TSPEC;
	public $add_time = null;
	public $deleted = null;
	public $pay_amount = null;
	public $pay_batch = null;
	public $pay_channel = null;
	public $pay_code = null;
	public $pay_name = null;
	public $card_no = null;
	public $pay_source = null;
	public $pay_status = null;
	public $pay_time = null;
	public $mall_code = null;
	public $remark = null;
	public $trace_no = null;
	public $tran_no = null;
	public $is_invoice = null;
	public $update_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			3 => array(
			'var' => 'add_time'
			),
			4 => array(
			'var' => 'deleted'
			),
			6 => array(
			'var' => 'pay_amount'
			),
			7 => array(
			'var' => 'pay_batch'
			),
			8 => array(
			'var' => 'pay_channel'
			),
			9 => array(
			'var' => 'pay_code'
			),
			10 => array(
			'var' => 'pay_name'
			),
			11 => array(
			'var' => 'card_no'
			),
			12 => array(
			'var' => 'pay_source'
			),
			13 => array(
			'var' => 'pay_status'
			),
			14 => array(
			'var' => 'pay_time'
			),
			15 => array(
			'var' => 'mall_code'
			),
			16 => array(
			'var' => 'remark'
			),
			17 => array(
			'var' => 'trace_no'
			),
			18 => array(
			'var' => 'tran_no'
			),
			20 => array(
			'var' => 'is_invoice'
			),
			19 => array(
			'var' => 'update_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['add_time'])){
				
				$this->add_time = $vals['add_time'];
			}
			
			
			if (isset($vals['deleted'])){
				
				$this->deleted = $vals['deleted'];
			}
			
			
			if (isset($vals['pay_amount'])){
				
				$this->pay_amount = $vals['pay_amount'];
			}
			
			
			if (isset($vals['pay_batch'])){
				
				$this->pay_batch = $vals['pay_batch'];
			}
			
			
			if (isset($vals['pay_channel'])){
				
				$this->pay_channel = $vals['pay_channel'];
			}
			
			
			if (isset($vals['pay_code'])){
				
				$this->pay_code = $vals['pay_code'];
			}
			
			
			if (isset($vals['pay_name'])){
				
				$this->pay_name = $vals['pay_name'];
			}
			
			
			if (isset($vals['card_no'])){
				
				$this->card_no = $vals['card_no'];
			}
			
			
			if (isset($vals['pay_source'])){
				
				$this->pay_source = $vals['pay_source'];
			}
			
			
			if (isset($vals['pay_status'])){
				
				$this->pay_status = $vals['pay_status'];
			}
			
			
			if (isset($vals['pay_time'])){
				
				$this->pay_time = $vals['pay_time'];
			}
			
			
			if (isset($vals['mall_code'])){
				
				$this->mall_code = $vals['mall_code'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['trace_no'])){
				
				$this->trace_no = $vals['trace_no'];
			}
			
			
			if (isset($vals['tran_no'])){
				
				$this->tran_no = $vals['tran_no'];
			}
			
			
			if (isset($vals['is_invoice'])){
				
				$this->is_invoice = $vals['is_invoice'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderPayInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("add_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->add_time); 
				
			}
			
			
			
			
			if ("deleted" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deleted);
				
			}
			
			
			
			
			if ("pay_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_amount);
				
			}
			
			
			
			
			if ("pay_batch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_batch);
				
			}
			
			
			
			
			if ("pay_channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_channel);
				
			}
			
			
			
			
			if ("pay_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_code);
				
			}
			
			
			
			
			if ("pay_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_name);
				
			}
			
			
			
			
			if ("card_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->card_no);
				
			}
			
			
			
			
			if ("pay_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_source);
				
			}
			
			
			
			
			if ("pay_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_status);
				
			}
			
			
			
			
			if ("pay_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pay_time); 
				
			}
			
			
			
			
			if ("mall_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mall_code);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("trace_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trace_no);
				
			}
			
			
			
			
			if ("tran_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tran_no);
				
			}
			
			
			
			
			if ("is_invoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_invoice);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time); 
				
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
		
		$xfer += $output->writeFieldBegin('add_time');
		$xfer += $output->writeI64($this->add_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deleted');
		$xfer += $output->writeString($this->deleted);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_amount');
		$xfer += $output->writeString($this->pay_amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pay_batch !== null) {
			
			$xfer += $output->writeFieldBegin('pay_batch');
			$xfer += $output->writeString($this->pay_batch);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pay_channel');
		$xfer += $output->writeString($this->pay_channel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_code');
		$xfer += $output->writeString($this->pay_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_name');
		$xfer += $output->writeString($this->pay_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->card_no !== null) {
			
			$xfer += $output->writeFieldBegin('card_no');
			$xfer += $output->writeString($this->card_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_source !== null) {
			
			$xfer += $output->writeFieldBegin('pay_source');
			$xfer += $output->writeString($this->pay_source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pay_status');
		$xfer += $output->writeString($this->pay_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_time');
		$xfer += $output->writeI64($this->pay_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->mall_code !== null) {
			
			$xfer += $output->writeFieldBegin('mall_code');
			$xfer += $output->writeString($this->mall_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->trace_no !== null) {
			
			$xfer += $output->writeFieldBegin('trace_no');
			$xfer += $output->writeString($this->trace_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tran_no !== null) {
			
			$xfer += $output->writeFieldBegin('tran_no');
			$xfer += $output->writeString($this->tran_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('is_invoice');
		$xfer += $output->writeString($this->is_invoice);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>