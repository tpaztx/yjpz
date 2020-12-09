<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class SvipStartBeforePayModel {
	
	static $_TSPEC;
	public $id = null;
	public $user_id = null;
	public $contract_sn = null;
	public $wx_order_sn = null;
	public $status = null;
	public $openDays = null;
	public $goods_id = null;
	public $remark = null;
	public $platform = null;
	public $goods_price = null;
	public $save_money = null;
	public $close_time = null;
	public $start_time = null;
	public $end_time = null;
	public $create_time = null;
	public $update_time = null;
	public $order_no = null;
	public $needPay = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'user_id'
			),
			3 => array(
			'var' => 'contract_sn'
			),
			4 => array(
			'var' => 'wx_order_sn'
			),
			5 => array(
			'var' => 'status'
			),
			6 => array(
			'var' => 'openDays'
			),
			7 => array(
			'var' => 'goods_id'
			),
			8 => array(
			'var' => 'remark'
			),
			9 => array(
			'var' => 'platform'
			),
			10 => array(
			'var' => 'goods_price'
			),
			11 => array(
			'var' => 'save_money'
			),
			12 => array(
			'var' => 'close_time'
			),
			13 => array(
			'var' => 'start_time'
			),
			14 => array(
			'var' => 'end_time'
			),
			15 => array(
			'var' => 'create_time'
			),
			16 => array(
			'var' => 'update_time'
			),
			17 => array(
			'var' => 'order_no'
			),
			18 => array(
			'var' => 'needPay'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['user_id'])){
				
				$this->user_id = $vals['user_id'];
			}
			
			
			if (isset($vals['contract_sn'])){
				
				$this->contract_sn = $vals['contract_sn'];
			}
			
			
			if (isset($vals['wx_order_sn'])){
				
				$this->wx_order_sn = $vals['wx_order_sn'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['openDays'])){
				
				$this->openDays = $vals['openDays'];
			}
			
			
			if (isset($vals['goods_id'])){
				
				$this->goods_id = $vals['goods_id'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['platform'])){
				
				$this->platform = $vals['platform'];
			}
			
			
			if (isset($vals['goods_price'])){
				
				$this->goods_price = $vals['goods_price'];
			}
			
			
			if (isset($vals['save_money'])){
				
				$this->save_money = $vals['save_money'];
			}
			
			
			if (isset($vals['close_time'])){
				
				$this->close_time = $vals['close_time'];
			}
			
			
			if (isset($vals['start_time'])){
				
				$this->start_time = $vals['start_time'];
			}
			
			
			if (isset($vals['end_time'])){
				
				$this->end_time = $vals['end_time'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['order_no'])){
				
				$this->order_no = $vals['order_no'];
			}
			
			
			if (isset($vals['needPay'])){
				
				$this->needPay = $vals['needPay'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SvipStartBeforePayModel';
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
			
			
			
			
			if ("user_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->user_id); 
				
			}
			
			
			
			
			if ("contract_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_sn);
				
			}
			
			
			
			
			if ("wx_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wx_order_sn);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("openDays" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->openDays); 
				
			}
			
			
			
			
			if ("goods_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_id);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("platform" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->platform); 
				
			}
			
			
			
			
			if ("goods_price" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->goods_price);
				
			}
			
			
			
			
			if ("save_money" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->save_money);
				
			}
			
			
			
			
			if ("close_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->close_time);
				
			}
			
			
			
			
			if ("start_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->start_time);
				
			}
			
			
			
			
			if ("end_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->end_time);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->create_time);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time);
				
			}
			
			
			
			
			if ("order_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_no);
				
			}
			
			
			
			
			if ("needPay" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->needPay);
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('user_id');
		$xfer += $output->writeI64($this->user_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->contract_sn !== null) {
			
			$xfer += $output->writeFieldBegin('contract_sn');
			$xfer += $output->writeString($this->contract_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wx_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('wx_order_sn');
			$xfer += $output->writeString($this->wx_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeI32($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('openDays');
		$xfer += $output->writeI32($this->openDays);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->goods_id !== null) {
			
			$xfer += $output->writeFieldBegin('goods_id');
			$xfer += $output->writeString($this->goods_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('platform');
		$xfer += $output->writeI32($this->platform);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_price');
		$xfer += $output->writeDouble($this->goods_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('save_money');
		$xfer += $output->writeDouble($this->save_money);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->close_time !== null) {
			
			$xfer += $output->writeFieldBegin('close_time');
			$xfer += $output->writeI64($this->close_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->start_time !== null) {
			
			$xfer += $output->writeFieldBegin('start_time');
			$xfer += $output->writeI64($this->start_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->end_time !== null) {
			
			$xfer += $output->writeFieldBegin('end_time');
			$xfer += $output->writeI64($this->end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeI64($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_no !== null) {
			
			$xfer += $output->writeFieldBegin('order_no');
			$xfer += $output->writeString($this->order_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('needPay');
		$xfer += $output->writeDouble($this->needPay);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>