<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class WorkOrderGoods {
	
	static $_TSPEC;
	public $goods_id = null;
	public $goods_name = null;
	public $brand_name = null;
	public $sn = null;
	public $price = null;
	public $sub_total = null;
	public $vsku_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goods_id'
			),
			2 => array(
			'var' => 'goods_name'
			),
			3 => array(
			'var' => 'brand_name'
			),
			4 => array(
			'var' => 'sn'
			),
			5 => array(
			'var' => 'price'
			),
			6 => array(
			'var' => 'sub_total'
			),
			7 => array(
			'var' => 'vsku_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goods_id'])){
				
				$this->goods_id = $vals['goods_id'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['sub_total'])){
				
				$this->sub_total = $vals['sub_total'];
			}
			
			
			if (isset($vals['vsku_id'])){
				
				$this->vsku_id = $vals['vsku_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderGoods';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goods_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_id);
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("sub_total" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_total);
				
			}
			
			
			
			
			if ("vsku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vsku_id);
				
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
		
		if($this->goods_id !== null) {
			
			$xfer += $output->writeFieldBegin('goods_id');
			$xfer += $output->writeString($this->goods_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_name !== null) {
			
			$xfer += $output->writeFieldBegin('goods_name');
			$xfer += $output->writeString($this->goods_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_total !== null) {
			
			$xfer += $output->writeFieldBegin('sub_total');
			$xfer += $output->writeString($this->sub_total);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vsku_id !== null) {
			
			$xfer += $output->writeFieldBegin('vsku_id');
			$xfer += $output->writeString($this->vsku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>