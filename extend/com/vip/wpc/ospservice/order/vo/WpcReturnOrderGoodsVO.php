<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\order\vo;

class WpcReturnOrderGoodsVO {
	
	static $_TSPEC;
	public $goodsId = null;
	public $name = null;
	public $image = null;
	public $brandCn = null;
	public $brandEn = null;
	public $sn = null;
	public $goodsIdStr = null;
	public $returnAble = null;
	public $reasonList = null;
	public $sizes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			4001 => array(
			'var' => 'goodsId'
			),
			4002 => array(
			'var' => 'name'
			),
			4003 => array(
			'var' => 'image'
			),
			4004 => array(
			'var' => 'brandCn'
			),
			4005 => array(
			'var' => 'brandEn'
			),
			4006 => array(
			'var' => 'sn'
			),
			4007 => array(
			'var' => 'goodsIdStr'
			),
			4101 => array(
			'var' => 'returnAble'
			),
			4102 => array(
			'var' => 'reasonList'
			),
			4103 => array(
			'var' => 'sizes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['image'])){
				
				$this->image = $vals['image'];
			}
			
			
			if (isset($vals['brandCn'])){
				
				$this->brandCn = $vals['brandCn'];
			}
			
			
			if (isset($vals['brandEn'])){
				
				$this->brandEn = $vals['brandEn'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['goodsIdStr'])){
				
				$this->goodsIdStr = $vals['goodsIdStr'];
			}
			
			
			if (isset($vals['returnAble'])){
				
				$this->returnAble = $vals['returnAble'];
			}
			
			
			if (isset($vals['reasonList'])){
				
				$this->reasonList = $vals['reasonList'];
			}
			
			
			if (isset($vals['sizes'])){
				
				$this->sizes = $vals['sizes'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcReturnOrderGoodsVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->goodsId); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("image" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->image);
				
			}
			
			
			
			
			if ("brandCn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCn);
				
			}
			
			
			
			
			if ("brandEn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandEn);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("goodsIdStr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsIdStr);
				
			}
			
			
			
			
			if ("returnAble" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->returnAble);
				
			}
			
			
			
			
			if ("reasonList" == $schemeField){
				
				$needSkip = false;
				
				$this->reasonList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\order\vo\WpcReturnReasonVO();
						$elem0->read($input);
						
						$this->reasonList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sizes" == $schemeField){
				
				$needSkip = false;
				
				$this->sizes = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\order\vo\WpcReturnOrderGoodsSizeVO();
						$elem1->read($input);
						
						$this->sizes[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeI64($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->image !== null) {
			
			$xfer += $output->writeFieldBegin('image');
			$xfer += $output->writeString($this->image);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCn !== null) {
			
			$xfer += $output->writeFieldBegin('brandCn');
			$xfer += $output->writeString($this->brandCn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandEn !== null) {
			
			$xfer += $output->writeFieldBegin('brandEn');
			$xfer += $output->writeString($this->brandEn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsIdStr !== null) {
			
			$xfer += $output->writeFieldBegin('goodsIdStr');
			$xfer += $output->writeString($this->goodsIdStr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnAble !== null) {
			
			$xfer += $output->writeFieldBegin('returnAble');
			$xfer += $output->writeBool($this->returnAble);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonList !== null) {
			
			$xfer += $output->writeFieldBegin('reasonList');
			
			if (!is_array($this->reasonList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reasonList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizes !== null) {
			
			$xfer += $output->writeFieldBegin('sizes');
			
			if (!is_array($this->sizes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sizes as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>