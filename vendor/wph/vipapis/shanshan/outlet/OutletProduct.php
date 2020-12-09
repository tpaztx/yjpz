<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class OutletProduct {
	
	static $_TSPEC;
	public $goods_code = null;
	public $goods_name = null;
	public $third_category_code = null;
	public $status = null;
	public $plaza_code = null;
	public $brand_code = null;
	public $brand_name = null;
	public $is_deleted = null;
	public $note = null;
	public $output_tax_rate = null;
	public $input_tax_rate = null;
	public $consumption_tax_rate = null;
	public $tax_no = null;
	public $tax_desc = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goods_code'
			),
			2 => array(
			'var' => 'goods_name'
			),
			3 => array(
			'var' => 'third_category_code'
			),
			4 => array(
			'var' => 'status'
			),
			5 => array(
			'var' => 'plaza_code'
			),
			6 => array(
			'var' => 'brand_code'
			),
			7 => array(
			'var' => 'brand_name'
			),
			8 => array(
			'var' => 'is_deleted'
			),
			9 => array(
			'var' => 'note'
			),
			10 => array(
			'var' => 'output_tax_rate'
			),
			11 => array(
			'var' => 'input_tax_rate'
			),
			12 => array(
			'var' => 'consumption_tax_rate'
			),
			13 => array(
			'var' => 'tax_no'
			),
			14 => array(
			'var' => 'tax_desc'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goods_code'])){
				
				$this->goods_code = $vals['goods_code'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['third_category_code'])){
				
				$this->third_category_code = $vals['third_category_code'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['plaza_code'])){
				
				$this->plaza_code = $vals['plaza_code'];
			}
			
			
			if (isset($vals['brand_code'])){
				
				$this->brand_code = $vals['brand_code'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['is_deleted'])){
				
				$this->is_deleted = $vals['is_deleted'];
			}
			
			
			if (isset($vals['note'])){
				
				$this->note = $vals['note'];
			}
			
			
			if (isset($vals['output_tax_rate'])){
				
				$this->output_tax_rate = $vals['output_tax_rate'];
			}
			
			
			if (isset($vals['input_tax_rate'])){
				
				$this->input_tax_rate = $vals['input_tax_rate'];
			}
			
			
			if (isset($vals['consumption_tax_rate'])){
				
				$this->consumption_tax_rate = $vals['consumption_tax_rate'];
			}
			
			
			if (isset($vals['tax_no'])){
				
				$this->tax_no = $vals['tax_no'];
			}
			
			
			if (isset($vals['tax_desc'])){
				
				$this->tax_desc = $vals['tax_desc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OutletProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goods_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_code);
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("third_category_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->third_category_code);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("plaza_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->plaza_code);
				
			}
			
			
			
			
			if ("brand_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_code);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("is_deleted" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->is_deleted);
				
			}
			
			
			
			
			if ("note" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->note);
				
			}
			
			
			
			
			if ("output_tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->output_tax_rate);
				
			}
			
			
			
			
			if ("input_tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->input_tax_rate);
				
			}
			
			
			
			
			if ("consumption_tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->consumption_tax_rate);
				
			}
			
			
			
			
			if ("tax_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_no);
				
			}
			
			
			
			
			if ("tax_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_desc);
				
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
		
		$xfer += $output->writeFieldBegin('goods_code');
		$xfer += $output->writeString($this->goods_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_name');
		$xfer += $output->writeString($this->goods_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('third_category_code');
		$xfer += $output->writeString($this->third_category_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('status');
		$xfer += $output->writeString($this->status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('plaza_code');
		$xfer += $output->writeString($this->plaza_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_code');
		$xfer += $output->writeString($this->brand_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('brand_name');
		$xfer += $output->writeString($this->brand_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_deleted');
		$xfer += $output->writeString($this->is_deleted);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->note !== null) {
			
			$xfer += $output->writeFieldBegin('note');
			$xfer += $output->writeString($this->note);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('output_tax_rate');
		$xfer += $output->writeDouble($this->output_tax_rate);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->input_tax_rate !== null) {
			
			$xfer += $output->writeFieldBegin('input_tax_rate');
			$xfer += $output->writeDouble($this->input_tax_rate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('consumption_tax_rate');
		$xfer += $output->writeDouble($this->consumption_tax_rate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tax_no');
		$xfer += $output->writeString($this->tax_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tax_desc');
		$xfer += $output->writeString($this->tax_desc);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>