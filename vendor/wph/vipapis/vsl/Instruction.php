<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class Instruction {
	
	static $_TSPEC;
	public $wo_no = null;
	public $pc3_id = null;
	public $order_sn = null;
	public $goods_ids = null;
	public $customer_no = null;
	public $handle_cmd = null;
	public $take_over_type = null;
	public $receiver_code = null;
	public $receiver_id = null;
	public $expect_finish_time = null;
	public $create_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wo_no'
			),
			2 => array(
			'var' => 'pc3_id'
			),
			3 => array(
			'var' => 'order_sn'
			),
			4 => array(
			'var' => 'goods_ids'
			),
			5 => array(
			'var' => 'customer_no'
			),
			6 => array(
			'var' => 'handle_cmd'
			),
			7 => array(
			'var' => 'take_over_type'
			),
			8 => array(
			'var' => 'receiver_code'
			),
			9 => array(
			'var' => 'receiver_id'
			),
			10 => array(
			'var' => 'expect_finish_time'
			),
			11 => array(
			'var' => 'create_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wo_no'])){
				
				$this->wo_no = $vals['wo_no'];
			}
			
			
			if (isset($vals['pc3_id'])){
				
				$this->pc3_id = $vals['pc3_id'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['goods_ids'])){
				
				$this->goods_ids = $vals['goods_ids'];
			}
			
			
			if (isset($vals['customer_no'])){
				
				$this->customer_no = $vals['customer_no'];
			}
			
			
			if (isset($vals['handle_cmd'])){
				
				$this->handle_cmd = $vals['handle_cmd'];
			}
			
			
			if (isset($vals['take_over_type'])){
				
				$this->take_over_type = $vals['take_over_type'];
			}
			
			
			if (isset($vals['receiver_code'])){
				
				$this->receiver_code = $vals['receiver_code'];
			}
			
			
			if (isset($vals['receiver_id'])){
				
				$this->receiver_id = $vals['receiver_id'];
			}
			
			
			if (isset($vals['expect_finish_time'])){
				
				$this->expect_finish_time = $vals['expect_finish_time'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Instruction';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wo_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wo_no);
				
			}
			
			
			
			
			if ("pc3_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc3_id);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("goods_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->goods_ids = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->goods_ids[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("customer_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customer_no);
				
			}
			
			
			
			
			if ("handle_cmd" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handle_cmd);
				
			}
			
			
			
			
			if ("take_over_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->take_over_type); 
				
			}
			
			
			
			
			if ("receiver_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_code);
				
			}
			
			
			
			
			if ("receiver_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiver_id);
				
			}
			
			
			
			
			if ("expect_finish_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expect_finish_time);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
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
		
		$xfer += $output->writeFieldBegin('wo_no');
		$xfer += $output->writeString($this->wo_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pc3_id !== null) {
			
			$xfer += $output->writeFieldBegin('pc3_id');
			$xfer += $output->writeString($this->pc3_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_ids !== null) {
			
			$xfer += $output->writeFieldBegin('goods_ids');
			
			if (!is_array($this->goods_ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods_ids as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customer_no !== null) {
			
			$xfer += $output->writeFieldBegin('customer_no');
			$xfer += $output->writeString($this->customer_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->handle_cmd !== null) {
			
			$xfer += $output->writeFieldBegin('handle_cmd');
			$xfer += $output->writeString($this->handle_cmd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->take_over_type !== null) {
			
			$xfer += $output->writeFieldBegin('take_over_type');
			$xfer += $output->writeI32($this->take_over_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_code !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_code');
			$xfer += $output->writeString($this->receiver_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiver_id !== null) {
			
			$xfer += $output->writeFieldBegin('receiver_id');
			$xfer += $output->writeString($this->receiver_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expect_finish_time !== null) {
			
			$xfer += $output->writeFieldBegin('expect_finish_time');
			$xfer += $output->writeString($this->expect_finish_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>