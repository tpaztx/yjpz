<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class WorkOrder {
	
	static $_TSPEC;
	public $order_sn = null;
	public $warehouse = null;
	public $status = null;
	public $deliver_time = null;
	public $pay_type = null;
	public $money = null;
	public $carrier = null;
	public $transport_no = null;
	public $receiver = null;
	public $receive_tel_no = null;
	public $receive_address = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_sn'
			),
			2 => array(
			'var' => 'warehouse'
			),
			3 => array(
			'var' => 'status'
			),
			4 => array(
			'var' => 'deliver_time'
			),
			5 => array(
			'var' => 'pay_type'
			),
			6 => array(
			'var' => 'money'
			),
			7 => array(
			'var' => 'carrier'
			),
			8 => array(
			'var' => 'transport_no'
			),
			9 => array(
			'var' => 'receiver'
			),
			10 => array(
			'var' => 'receive_tel_no'
			),
			11 => array(
			'var' => 'receive_address'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['deliver_time'])){
				
				$this->deliver_time = $vals['deliver_time'];
			}
			
			
			if (isset($vals['pay_type'])){
				
				$this->pay_type = $vals['pay_type'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['carrier'])){
				
				$this->carrier = $vals['carrier'];
			}
			
			
			if (isset($vals['transport_no'])){
				
				$this->transport_no = $vals['transport_no'];
			}
			
			
			if (isset($vals['receiver'])){
				
				$this->receiver = $vals['receiver'];
			}
			
			
			if (isset($vals['receive_tel_no'])){
				
				$this->receive_tel_no = $vals['receive_tel_no'];
			}
			
			
			if (isset($vals['receive_address'])){
				
				$this->receive_address = $vals['receive_address'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("deliver_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deliver_time);
				
			}
			
			
			
			
			if ("pay_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_type);
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("carrier" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier);
				
			}
			
			
			
			
			if ("transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_no);
				
			}
			
			
			
			
			if ("receiver" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver);
				
			}
			
			
			
			
			if ("receive_tel_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receive_tel_no);
				
			}
			
			
			
			
			if ("receive_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receive_address);
				
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
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deliver_time !== null) {
			
			$xfer += $output->writeFieldBegin('deliver_time');
			$xfer += $output->writeString($this->deliver_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_type !== null) {
			
			$xfer += $output->writeFieldBegin('pay_type');
			$xfer += $output->writeString($this->pay_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrier !== null) {
			
			$xfer += $output->writeFieldBegin('carrier');
			$xfer += $output->writeString($this->carrier);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('transport_no');
			$xfer += $output->writeString($this->transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver !== null) {
			
			$xfer += $output->writeFieldBegin('receiver');
			$xfer += $output->writeString($this->receiver);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receive_tel_no !== null) {
			
			$xfer += $output->writeFieldBegin('receive_tel_no');
			$xfer += $output->writeString($this->receive_tel_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receive_address !== null) {
			
			$xfer += $output->writeFieldBegin('receive_address');
			$xfer += $output->writeString($this->receive_address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>