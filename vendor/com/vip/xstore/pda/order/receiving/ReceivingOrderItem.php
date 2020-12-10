<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\order\receiving;

class ReceivingOrderItem {
	
	static $_TSPEC;
	public $barcode = null;
	public $product_name = null;
	public $remark = null;
	public $planning_quantity = null;
	public $expect_quantity = null;
	public $confirmed_quantity = null;
	public $image_url = null;
	public $po = null;
	public $osn = null;
	public $sn = null;
	public $color = null;
	public $size = null;
	public $season = null;
	public $brand_sn = null;
	public $brand_name = null;
	public $top_category = null;
	public $top_category_id = null;
	public $sub_category = null;
	public $sub_category_id = null;
	public $leaf_category = null;
	public $leaf_category_id = null;
	public $over_reason = null;
	public $box_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			50 => array(
			'var' => 'barcode'
			),
			51 => array(
			'var' => 'product_name'
			),
			52 => array(
			'var' => 'remark'
			),
			53 => array(
			'var' => 'planning_quantity'
			),
			54 => array(
			'var' => 'expect_quantity'
			),
			55 => array(
			'var' => 'confirmed_quantity'
			),
			56 => array(
			'var' => 'image_url'
			),
			57 => array(
			'var' => 'po'
			),
			58 => array(
			'var' => 'osn'
			),
			59 => array(
			'var' => 'sn'
			),
			60 => array(
			'var' => 'color'
			),
			61 => array(
			'var' => 'size'
			),
			62 => array(
			'var' => 'season'
			),
			63 => array(
			'var' => 'brand_sn'
			),
			64 => array(
			'var' => 'brand_name'
			),
			65 => array(
			'var' => 'top_category'
			),
			66 => array(
			'var' => 'top_category_id'
			),
			67 => array(
			'var' => 'sub_category'
			),
			68 => array(
			'var' => 'sub_category_id'
			),
			69 => array(
			'var' => 'leaf_category'
			),
			70 => array(
			'var' => 'leaf_category_id'
			),
			71 => array(
			'var' => 'over_reason'
			),
			1 => array(
			'var' => 'box_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['planning_quantity'])){
				
				$this->planning_quantity = $vals['planning_quantity'];
			}
			
			
			if (isset($vals['expect_quantity'])){
				
				$this->expect_quantity = $vals['expect_quantity'];
			}
			
			
			if (isset($vals['confirmed_quantity'])){
				
				$this->confirmed_quantity = $vals['confirmed_quantity'];
			}
			
			
			if (isset($vals['image_url'])){
				
				$this->image_url = $vals['image_url'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['osn'])){
				
				$this->osn = $vals['osn'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['season'])){
				
				$this->season = $vals['season'];
			}
			
			
			if (isset($vals['brand_sn'])){
				
				$this->brand_sn = $vals['brand_sn'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['top_category'])){
				
				$this->top_category = $vals['top_category'];
			}
			
			
			if (isset($vals['top_category_id'])){
				
				$this->top_category_id = $vals['top_category_id'];
			}
			
			
			if (isset($vals['sub_category'])){
				
				$this->sub_category = $vals['sub_category'];
			}
			
			
			if (isset($vals['sub_category_id'])){
				
				$this->sub_category_id = $vals['sub_category_id'];
			}
			
			
			if (isset($vals['leaf_category'])){
				
				$this->leaf_category = $vals['leaf_category'];
			}
			
			
			if (isset($vals['leaf_category_id'])){
				
				$this->leaf_category_id = $vals['leaf_category_id'];
			}
			
			
			if (isset($vals['over_reason'])){
				
				$this->over_reason = $vals['over_reason'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceivingOrderItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("planning_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->planning_quantity); 
				
			}
			
			
			
			
			if ("expect_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->expect_quantity); 
				
			}
			
			
			
			
			if ("confirmed_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->confirmed_quantity); 
				
			}
			
			
			
			
			if ("image_url" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image_url);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("osn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->osn);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("season" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->season);
				
			}
			
			
			
			
			if ("brand_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_sn);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("top_category" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->top_category);
				
			}
			
			
			
			
			if ("top_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->top_category_id);
				
			}
			
			
			
			
			if ("sub_category" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_category);
				
			}
			
			
			
			
			if ("sub_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_category_id);
				
			}
			
			
			
			
			if ("leaf_category" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->leaf_category);
				
			}
			
			
			
			
			if ("leaf_category_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->leaf_category_id);
				
			}
			
			
			
			
			if ("over_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->over_reason);
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
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
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->planning_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('planning_quantity');
			$xfer += $output->writeI32($this->planning_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expect_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('expect_quantity');
			$xfer += $output->writeI32($this->expect_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmed_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('confirmed_quantity');
			$xfer += $output->writeI32($this->confirmed_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image_url !== null) {
			
			$xfer += $output->writeFieldBegin('image_url');
			$xfer += $output->writeString($this->image_url);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->osn !== null) {
			
			$xfer += $output->writeFieldBegin('osn');
			$xfer += $output->writeString($this->osn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->season !== null) {
			
			$xfer += $output->writeFieldBegin('season');
			$xfer += $output->writeString($this->season);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_sn !== null) {
			
			$xfer += $output->writeFieldBegin('brand_sn');
			$xfer += $output->writeString($this->brand_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->top_category !== null) {
			
			$xfer += $output->writeFieldBegin('top_category');
			$xfer += $output->writeString($this->top_category);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->top_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('top_category_id');
			$xfer += $output->writeString($this->top_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_category !== null) {
			
			$xfer += $output->writeFieldBegin('sub_category');
			$xfer += $output->writeString($this->sub_category);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sub_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('sub_category_id');
			$xfer += $output->writeString($this->sub_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leaf_category !== null) {
			
			$xfer += $output->writeFieldBegin('leaf_category');
			$xfer += $output->writeString($this->leaf_category);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leaf_category_id !== null) {
			
			$xfer += $output->writeFieldBegin('leaf_category_id');
			$xfer += $output->writeString($this->leaf_category_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->over_reason !== null) {
			
			$xfer += $output->writeFieldBegin('over_reason');
			$xfer += $output->writeString($this->over_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>