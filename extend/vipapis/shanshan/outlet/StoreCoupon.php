<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class StoreCoupon {
	
	static $_TSPEC;
	public $mall_code = null;
	public $mall_name = null;
	public $offline_store_ids = null;
	public $store_coupon_type = null;
	public $consumption_quota = null;
	public $reduction_amount = null;
	public $gift_goods = null;
	public $discount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mall_code'
			),
			2 => array(
			'var' => 'mall_name'
			),
			3 => array(
			'var' => 'offline_store_ids'
			),
			4 => array(
			'var' => 'store_coupon_type'
			),
			5 => array(
			'var' => 'consumption_quota'
			),
			6 => array(
			'var' => 'reduction_amount'
			),
			7 => array(
			'var' => 'gift_goods'
			),
			8 => array(
			'var' => 'discount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mall_code'])){
				
				$this->mall_code = $vals['mall_code'];
			}
			
			
			if (isset($vals['mall_name'])){
				
				$this->mall_name = $vals['mall_name'];
			}
			
			
			if (isset($vals['offline_store_ids'])){
				
				$this->offline_store_ids = $vals['offline_store_ids'];
			}
			
			
			if (isset($vals['store_coupon_type'])){
				
				$this->store_coupon_type = $vals['store_coupon_type'];
			}
			
			
			if (isset($vals['consumption_quota'])){
				
				$this->consumption_quota = $vals['consumption_quota'];
			}
			
			
			if (isset($vals['reduction_amount'])){
				
				$this->reduction_amount = $vals['reduction_amount'];
			}
			
			
			if (isset($vals['gift_goods'])){
				
				$this->gift_goods = $vals['gift_goods'];
			}
			
			
			if (isset($vals['discount'])){
				
				$this->discount = $vals['discount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'StoreCoupon';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mall_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mall_code);
				
			}
			
			
			
			
			if ("mall_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mall_name);
				
			}
			
			
			
			
			if ("offline_store_ids" == $schemeField){
				
				$needSkip = false;
				
				$this->offline_store_ids = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->offline_store_ids[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("store_coupon_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->store_coupon_type); 
				
			}
			
			
			
			
			if ("consumption_quota" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consumption_quota);
				
			}
			
			
			
			
			if ("reduction_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reduction_amount);
				
			}
			
			
			
			
			if ("gift_goods" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->gift_goods);
				
			}
			
			
			
			
			if ("discount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount);
				
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
		
		if($this->mall_code !== null) {
			
			$xfer += $output->writeFieldBegin('mall_code');
			$xfer += $output->writeString($this->mall_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mall_name !== null) {
			
			$xfer += $output->writeFieldBegin('mall_name');
			$xfer += $output->writeString($this->mall_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offline_store_ids !== null) {
			
			$xfer += $output->writeFieldBegin('offline_store_ids');
			
			if (!is_array($this->offline_store_ids)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->offline_store_ids as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_coupon_type !== null) {
			
			$xfer += $output->writeFieldBegin('store_coupon_type');
			$xfer += $output->writeI32($this->store_coupon_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consumption_quota !== null) {
			
			$xfer += $output->writeFieldBegin('consumption_quota');
			$xfer += $output->writeString($this->consumption_quota);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reduction_amount !== null) {
			
			$xfer += $output->writeFieldBegin('reduction_amount');
			$xfer += $output->writeString($this->reduction_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gift_goods !== null) {
			
			$xfer += $output->writeFieldBegin('gift_goods');
			$xfer += $output->writeString($this->gift_goods);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discount !== null) {
			
			$xfer += $output->writeFieldBegin('discount');
			$xfer += $output->writeString($this->discount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>