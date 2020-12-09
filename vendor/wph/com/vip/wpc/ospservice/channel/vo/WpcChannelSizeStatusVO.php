<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelSizeStatusVO {
	
	static $_TSPEC;
	public $sizeId = null;
	public $goodFullId = null;
	public $stock = null;
	public $goodOnline = null;
	public $vipshopPrice = null;
	public $buyMinNum = null;
	public $buyMaxNum = null;
	public $commission = null;
	public $suggestAddPrice = null;
	public $suggestPrice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sizeId'
			),
			2 => array(
			'var' => 'goodFullId'
			),
			3 => array(
			'var' => 'stock'
			),
			4 => array(
			'var' => 'goodOnline'
			),
			5 => array(
			'var' => 'vipshopPrice'
			),
			6 => array(
			'var' => 'buyMinNum'
			),
			7 => array(
			'var' => 'buyMaxNum'
			),
			8 => array(
			'var' => 'commission'
			),
			9 => array(
			'var' => 'suggestAddPrice'
			),
			10 => array(
			'var' => 'suggestPrice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizeId'])){
				
				$this->sizeId = $vals['sizeId'];
			}
			
			
			if (isset($vals['goodFullId'])){
				
				$this->goodFullId = $vals['goodFullId'];
			}
			
			
			if (isset($vals['stock'])){
				
				$this->stock = $vals['stock'];
			}
			
			
			if (isset($vals['goodOnline'])){
				
				$this->goodOnline = $vals['goodOnline'];
			}
			
			
			if (isset($vals['vipshopPrice'])){
				
				$this->vipshopPrice = $vals['vipshopPrice'];
			}
			
			
			if (isset($vals['buyMinNum'])){
				
				$this->buyMinNum = $vals['buyMinNum'];
			}
			
			
			if (isset($vals['buyMaxNum'])){
				
				$this->buyMaxNum = $vals['buyMaxNum'];
			}
			
			
			if (isset($vals['commission'])){
				
				$this->commission = $vals['commission'];
			}
			
			
			if (isset($vals['suggestAddPrice'])){
				
				$this->suggestAddPrice = $vals['suggestAddPrice'];
			}
			
			
			if (isset($vals['suggestPrice'])){
				
				$this->suggestPrice = $vals['suggestPrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelSizeStatusVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sizeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sizeId); 
				
			}
			
			
			
			
			if ("goodFullId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->goodFullId); 
				
			}
			
			
			
			
			if ("stock" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stock); 
				
			}
			
			
			
			
			if ("goodOnline" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodOnline); 
				
			}
			
			
			
			
			if ("vipshopPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipshopPrice);
				
			}
			
			
			
			
			if ("buyMinNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->buyMinNum); 
				
			}
			
			
			
			
			if ("buyMaxNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->buyMaxNum); 
				
			}
			
			
			
			
			if ("commission" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission);
				
			}
			
			
			
			
			if ("suggestAddPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->suggestAddPrice);
				
			}
			
			
			
			
			if ("suggestPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->suggestPrice);
				
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
		
		$xfer += $output->writeFieldBegin('sizeId');
		$xfer += $output->writeI64($this->sizeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodFullId');
		$xfer += $output->writeI64($this->goodFullId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('stock');
		$xfer += $output->writeI32($this->stock);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goodOnline');
		$xfer += $output->writeI32($this->goodOnline);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vipshopPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vipshopPrice');
			$xfer += $output->writeString($this->vipshopPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('buyMinNum');
		$xfer += $output->writeI32($this->buyMinNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('buyMaxNum');
		$xfer += $output->writeI32($this->buyMaxNum);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->commission !== null) {
			
			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->suggestAddPrice !== null) {
			
			$xfer += $output->writeFieldBegin('suggestAddPrice');
			$xfer += $output->writeString($this->suggestAddPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->suggestPrice !== null) {
			
			$xfer += $output->writeFieldBegin('suggestPrice');
			$xfer += $output->writeString($this->suggestPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>