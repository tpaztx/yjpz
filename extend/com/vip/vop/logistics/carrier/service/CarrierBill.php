<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\carrier\service;

class CarrierBill {
	
	static $_TSPEC;
	public $carrier_order_sn = null;
	public $logistics_no = null;
	public $happened_time = null;
	public $delivery_type = null;
	public $freight = null;
	public $weight = null;
	public $volume = null;
	public $operate_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_order_sn'
			),
			2 => array(
			'var' => 'logistics_no'
			),
			3 => array(
			'var' => 'happened_time'
			),
			4 => array(
			'var' => 'delivery_type'
			),
			5 => array(
			'var' => 'freight'
			),
			6 => array(
			'var' => 'weight'
			),
			7 => array(
			'var' => 'volume'
			),
			8 => array(
			'var' => 'operate_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_order_sn'])){
				
				$this->carrier_order_sn = $vals['carrier_order_sn'];
			}
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['happened_time'])){
				
				$this->happened_time = $vals['happened_time'];
			}
			
			
			if (isset($vals['delivery_type'])){
				
				$this->delivery_type = $vals['delivery_type'];
			}
			
			
			if (isset($vals['freight'])){
				
				$this->freight = $vals['freight'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['operate_type'])){
				
				$this->operate_type = $vals['operate_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CarrierBill';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_order_sn);
				
			}
			
			
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("happened_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->happened_time);
				
			}
			
			
			
			
			if ("delivery_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->delivery_type); 
				
			}
			
			
			
			
			if ("freight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->freight);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->volume);
				
			}
			
			
			
			
			if ("operate_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operate_type); 
				
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
		
		if($this->carrier_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('carrier_order_sn');
			$xfer += $output->writeString($this->carrier_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('logistics_no');
		$xfer += $output->writeString($this->logistics_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('happened_time');
		$xfer += $output->writeString($this->happened_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_type');
		$xfer += $output->writeI32($this->delivery_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->freight !== null) {
			
			$xfer += $output->writeFieldBegin('freight');
			$xfer += $output->writeDouble($this->freight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeDouble($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeDouble($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('operate_type');
		$xfer += $output->writeI32($this->operate_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>