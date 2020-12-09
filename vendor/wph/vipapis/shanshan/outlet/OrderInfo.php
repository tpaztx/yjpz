<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class OrderInfo {
	
	static $_TSPEC;
	public $trade_id = null;
	public $pay_time = null;
	public $order_status = null;
	public $order_type = null;
	public $pay_amount = null;
	public $accounting_time = null;
	public $trade_time = null;
	public $channel = null;
	public $deleted = null;
	public $receipt_type = null;
	public $ext_trade_id = null;
	public $original_price = null;
	public $order_amount = null;
	public $order_point = null;
	public $mall_code = null;
	public $pos_no = null;
	public $pos_req = null;
	public $pos_user_no = null;
	public $original_trade_id = null;
	public $offline_store_id = null;
	public $update_time = null;
	public $m_card_no = null;
	public $tail_amt = null;
	public $operation_mode = null;
	public $carriage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'trade_id'
			),
			2 => array(
			'var' => 'pay_time'
			),
			3 => array(
			'var' => 'order_status'
			),
			4 => array(
			'var' => 'order_type'
			),
			5 => array(
			'var' => 'pay_amount'
			),
			6 => array(
			'var' => 'accounting_time'
			),
			7 => array(
			'var' => 'trade_time'
			),
			8 => array(
			'var' => 'channel'
			),
			9 => array(
			'var' => 'deleted'
			),
			10 => array(
			'var' => 'receipt_type'
			),
			11 => array(
			'var' => 'ext_trade_id'
			),
			12 => array(
			'var' => 'original_price'
			),
			13 => array(
			'var' => 'order_amount'
			),
			14 => array(
			'var' => 'order_point'
			),
			15 => array(
			'var' => 'mall_code'
			),
			16 => array(
			'var' => 'pos_no'
			),
			17 => array(
			'var' => 'pos_req'
			),
			18 => array(
			'var' => 'pos_user_no'
			),
			19 => array(
			'var' => 'original_trade_id'
			),
			20 => array(
			'var' => 'offline_store_id'
			),
			21 => array(
			'var' => 'update_time'
			),
			22 => array(
			'var' => 'm_card_no'
			),
			23 => array(
			'var' => 'tail_amt'
			),
			24 => array(
			'var' => 'operation_mode'
			),
			25 => array(
			'var' => 'carriage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trade_id'])){
				
				$this->trade_id = $vals['trade_id'];
			}
			
			
			if (isset($vals['pay_time'])){
				
				$this->pay_time = $vals['pay_time'];
			}
			
			
			if (isset($vals['order_status'])){
				
				$this->order_status = $vals['order_status'];
			}
			
			
			if (isset($vals['order_type'])){
				
				$this->order_type = $vals['order_type'];
			}
			
			
			if (isset($vals['pay_amount'])){
				
				$this->pay_amount = $vals['pay_amount'];
			}
			
			
			if (isset($vals['accounting_time'])){
				
				$this->accounting_time = $vals['accounting_time'];
			}
			
			
			if (isset($vals['trade_time'])){
				
				$this->trade_time = $vals['trade_time'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['deleted'])){
				
				$this->deleted = $vals['deleted'];
			}
			
			
			if (isset($vals['receipt_type'])){
				
				$this->receipt_type = $vals['receipt_type'];
			}
			
			
			if (isset($vals['ext_trade_id'])){
				
				$this->ext_trade_id = $vals['ext_trade_id'];
			}
			
			
			if (isset($vals['original_price'])){
				
				$this->original_price = $vals['original_price'];
			}
			
			
			if (isset($vals['order_amount'])){
				
				$this->order_amount = $vals['order_amount'];
			}
			
			
			if (isset($vals['order_point'])){
				
				$this->order_point = $vals['order_point'];
			}
			
			
			if (isset($vals['mall_code'])){
				
				$this->mall_code = $vals['mall_code'];
			}
			
			
			if (isset($vals['pos_no'])){
				
				$this->pos_no = $vals['pos_no'];
			}
			
			
			if (isset($vals['pos_req'])){
				
				$this->pos_req = $vals['pos_req'];
			}
			
			
			if (isset($vals['pos_user_no'])){
				
				$this->pos_user_no = $vals['pos_user_no'];
			}
			
			
			if (isset($vals['original_trade_id'])){
				
				$this->original_trade_id = $vals['original_trade_id'];
			}
			
			
			if (isset($vals['offline_store_id'])){
				
				$this->offline_store_id = $vals['offline_store_id'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['m_card_no'])){
				
				$this->m_card_no = $vals['m_card_no'];
			}
			
			
			if (isset($vals['tail_amt'])){
				
				$this->tail_amt = $vals['tail_amt'];
			}
			
			
			if (isset($vals['operation_mode'])){
				
				$this->operation_mode = $vals['operation_mode'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_id);
				
			}
			
			
			
			
			if ("pay_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->pay_time); 
				
			}
			
			
			
			
			if ("order_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_status); 
				
			}
			
			
			
			
			if ("order_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->order_type); 
				
			}
			
			
			
			
			if ("pay_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_amount);
				
			}
			
			
			
			
			if ("accounting_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->accounting_time); 
				
			}
			
			
			
			
			if ("trade_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->trade_time); 
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("deleted" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deleted);
				
			}
			
			
			
			
			if ("receipt_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receipt_type);
				
			}
			
			
			
			
			if ("ext_trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext_trade_id);
				
			}
			
			
			
			
			if ("original_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->original_price);
				
			}
			
			
			
			
			if ("order_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_amount);
				
			}
			
			
			
			
			if ("order_point" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_point);
				
			}
			
			
			
			
			if ("mall_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mall_code);
				
			}
			
			
			
			
			if ("pos_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pos_no);
				
			}
			
			
			
			
			if ("pos_req" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pos_req);
				
			}
			
			
			
			
			if ("pos_user_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pos_user_no);
				
			}
			
			
			
			
			if ("original_trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->original_trade_id);
				
			}
			
			
			
			
			if ("offline_store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offline_store_id);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time); 
				
			}
			
			
			
			
			if ("m_card_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->m_card_no);
				
			}
			
			
			
			
			if ("tail_amt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tail_amt);
				
			}
			
			
			
			
			if ("operation_mode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operation_mode); 
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
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
		
		$xfer += $output->writeFieldBegin('trade_id');
		$xfer += $output->writeString($this->trade_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_time');
		$xfer += $output->writeI64($this->pay_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_status');
		$xfer += $output->writeI32($this->order_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_type');
		$xfer += $output->writeI32($this->order_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_amount');
		$xfer += $output->writeString($this->pay_amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->accounting_time !== null) {
			
			$xfer += $output->writeFieldBegin('accounting_time');
			$xfer += $output->writeI64($this->accounting_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('trade_time');
		$xfer += $output->writeI64($this->trade_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('channel');
		$xfer += $output->writeString($this->channel);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deleted');
		$xfer += $output->writeString($this->deleted);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receipt_type');
		$xfer += $output->writeString($this->receipt_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->ext_trade_id !== null) {
			
			$xfer += $output->writeFieldBegin('ext_trade_id');
			$xfer += $output->writeString($this->ext_trade_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('original_price');
		$xfer += $output->writeString($this->original_price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_amount');
		$xfer += $output->writeString($this->order_amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_point');
		$xfer += $output->writeString($this->order_point);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mall_code');
		$xfer += $output->writeString($this->mall_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pos_no !== null) {
			
			$xfer += $output->writeFieldBegin('pos_no');
			$xfer += $output->writeString($this->pos_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pos_req !== null) {
			
			$xfer += $output->writeFieldBegin('pos_req');
			$xfer += $output->writeString($this->pos_req);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pos_user_no !== null) {
			
			$xfer += $output->writeFieldBegin('pos_user_no');
			$xfer += $output->writeString($this->pos_user_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->original_trade_id !== null) {
			
			$xfer += $output->writeFieldBegin('original_trade_id');
			$xfer += $output->writeString($this->original_trade_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('offline_store_id');
		$xfer += $output->writeString($this->offline_store_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('update_time');
		$xfer += $output->writeI64($this->update_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->m_card_no !== null) {
			
			$xfer += $output->writeFieldBegin('m_card_no');
			$xfer += $output->writeString($this->m_card_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tail_amt !== null) {
			
			$xfer += $output->writeFieldBegin('tail_amt');
			$xfer += $output->writeString($this->tail_amt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operation_mode !== null) {
			
			$xfer += $output->writeFieldBegin('operation_mode');
			$xfer += $output->writeI32($this->operation_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>