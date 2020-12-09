<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelBrandGoodVO {
	
	static $_TSPEC;
	public $goodId = null;
	public $goodImage = null;
	public $goodName = null;
	public $brandCnName = null;
	public $brandEnName = null;
	public $logo = null;
	public $sn = null;
	public $dcImageURLs = null;
	public $color = null;
	public $material = null;
	public $sizes = null;
	public $sizeTableJson = null;
	public $goodBigImage = null;
	public $catNameOne = null;
	public $catNameTwo = null;
	public $catNameThree = null;
	public $goodFullId = null;
	public $goodOnline = null;
	public $vendorProductId = null;
	public $isMp = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodId'
			),
			2 => array(
			'var' => 'goodImage'
			),
			3 => array(
			'var' => 'goodName'
			),
			4 => array(
			'var' => 'brandCnName'
			),
			5 => array(
			'var' => 'brandEnName'
			),
			6 => array(
			'var' => 'logo'
			),
			7 => array(
			'var' => 'sn'
			),
			8 => array(
			'var' => 'dcImageURLs'
			),
			9 => array(
			'var' => 'color'
			),
			10 => array(
			'var' => 'material'
			),
			11 => array(
			'var' => 'sizes'
			),
			12 => array(
			'var' => 'sizeTableJson'
			),
			13 => array(
			'var' => 'goodBigImage'
			),
			14 => array(
			'var' => 'catNameOne'
			),
			15 => array(
			'var' => 'catNameTwo'
			),
			16 => array(
			'var' => 'catNameThree'
			),
			21 => array(
			'var' => 'goodFullId'
			),
			22 => array(
			'var' => 'goodOnline'
			),
			23 => array(
			'var' => 'vendorProductId'
			),
			24 => array(
			'var' => 'isMp'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodId'])){
				
				$this->goodId = $vals['goodId'];
			}
			
			
			if (isset($vals['goodImage'])){
				
				$this->goodImage = $vals['goodImage'];
			}
			
			
			if (isset($vals['goodName'])){
				
				$this->goodName = $vals['goodName'];
			}
			
			
			if (isset($vals['brandCnName'])){
				
				$this->brandCnName = $vals['brandCnName'];
			}
			
			
			if (isset($vals['brandEnName'])){
				
				$this->brandEnName = $vals['brandEnName'];
			}
			
			
			if (isset($vals['logo'])){
				
				$this->logo = $vals['logo'];
			}
			
			
			if (isset($vals['sn'])){
				
				$this->sn = $vals['sn'];
			}
			
			
			if (isset($vals['dcImageURLs'])){
				
				$this->dcImageURLs = $vals['dcImageURLs'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['material'])){
				
				$this->material = $vals['material'];
			}
			
			
			if (isset($vals['sizes'])){
				
				$this->sizes = $vals['sizes'];
			}
			
			
			if (isset($vals['sizeTableJson'])){
				
				$this->sizeTableJson = $vals['sizeTableJson'];
			}
			
			
			if (isset($vals['goodBigImage'])){
				
				$this->goodBigImage = $vals['goodBigImage'];
			}
			
			
			if (isset($vals['catNameOne'])){
				
				$this->catNameOne = $vals['catNameOne'];
			}
			
			
			if (isset($vals['catNameTwo'])){
				
				$this->catNameTwo = $vals['catNameTwo'];
			}
			
			
			if (isset($vals['catNameThree'])){
				
				$this->catNameThree = $vals['catNameThree'];
			}
			
			
			if (isset($vals['goodFullId'])){
				
				$this->goodFullId = $vals['goodFullId'];
			}
			
			
			if (isset($vals['goodOnline'])){
				
				$this->goodOnline = $vals['goodOnline'];
			}
			
			
			if (isset($vals['vendorProductId'])){
				
				$this->vendorProductId = $vals['vendorProductId'];
			}
			
			
			if (isset($vals['isMp'])){
				
				$this->isMp = $vals['isMp'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelBrandGoodVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodId);
				
			}
			
			
			
			
			if ("goodImage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodImage);
				
			}
			
			
			
			
			if ("goodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodName);
				
			}
			
			
			
			
			if ("brandCnName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCnName);
				
			}
			
			
			
			
			if ("brandEnName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandEnName);
				
			}
			
			
			
			
			if ("logo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logo);
				
			}
			
			
			
			
			if ("sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sn);
				
			}
			
			
			
			
			if ("dcImageURLs" == $schemeField){
				
				$needSkip = false;
				
				$this->dcImageURLs = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->dcImageURLs[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("material" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->material);
				
			}
			
			
			
			
			if ("sizes" == $schemeField){
				
				$needSkip = false;
				
				$this->sizes = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\channel\vo\WpcChannelSizeVO();
						$elem1->read($input);
						
						$this->sizes[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sizeTableJson" == $schemeField){
				
				$needSkip = false;
				
				$this->sizeTableJson = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = array();
						$_size3 = 0;
						$input->readListBegin();
						while(true){
							
							try{
								
								$elem3 = null;
								$input->readString($elem3);
								
								$elem2[$_size3++] = $elem3;
							}
							catch(\Exception $e){
								
								break;
							}
						}
						
						$input->readListEnd();
						
						$this->sizeTableJson[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("goodBigImage" == $schemeField){
				
				$needSkip = false;
				
				$this->goodBigImage = array();
				$_size4 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem4 = null;
						$input->readString($elem4);
						
						$this->goodBigImage[$_size4++] = $elem4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("catNameOne" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->catNameOne);
				
			}
			
			
			
			
			if ("catNameTwo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->catNameTwo);
				
			}
			
			
			
			
			if ("catNameThree" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->catNameThree);
				
			}
			
			
			
			
			if ("goodFullId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodFullId);
				
			}
			
			
			
			
			if ("goodOnline" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->goodOnline); 
				
			}
			
			
			
			
			if ("vendorProductId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorProductId); 
				
			}
			
			
			
			
			if ("isMp" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isMp);
				
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
		
		if($this->goodId !== null) {
			
			$xfer += $output->writeFieldBegin('goodId');
			$xfer += $output->writeString($this->goodId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodImage !== null) {
			
			$xfer += $output->writeFieldBegin('goodImage');
			$xfer += $output->writeString($this->goodImage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodName !== null) {
			
			$xfer += $output->writeFieldBegin('goodName');
			$xfer += $output->writeString($this->goodName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCnName !== null) {
			
			$xfer += $output->writeFieldBegin('brandCnName');
			$xfer += $output->writeString($this->brandCnName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandEnName !== null) {
			
			$xfer += $output->writeFieldBegin('brandEnName');
			$xfer += $output->writeString($this->brandEnName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->logo !== null) {
			
			$xfer += $output->writeFieldBegin('logo');
			$xfer += $output->writeString($this->logo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sn !== null) {
			
			$xfer += $output->writeFieldBegin('sn');
			$xfer += $output->writeString($this->sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dcImageURLs !== null) {
			
			$xfer += $output->writeFieldBegin('dcImageURLs');
			
			if (!is_array($this->dcImageURLs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->dcImageURLs as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->material !== null) {
			
			$xfer += $output->writeFieldBegin('material');
			$xfer += $output->writeString($this->material);
			
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
		
		
		if($this->sizeTableJson !== null) {
			
			$xfer += $output->writeFieldBegin('sizeTableJson');
			
			if (!is_array($this->sizeTableJson)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sizeTableJson as $iter0){
				
				
				if (!is_array($iter0)){
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$output->writeListBegin();
				foreach ($iter0 as $iter1){
					
					$xfer += $output->writeString($iter1);
					
				}
				
				$output->writeListEnd();
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodBigImage !== null) {
			
			$xfer += $output->writeFieldBegin('goodBigImage');
			
			if (!is_array($this->goodBigImage)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goodBigImage as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->catNameOne !== null) {
			
			$xfer += $output->writeFieldBegin('catNameOne');
			$xfer += $output->writeString($this->catNameOne);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->catNameTwo !== null) {
			
			$xfer += $output->writeFieldBegin('catNameTwo');
			$xfer += $output->writeString($this->catNameTwo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->catNameThree !== null) {
			
			$xfer += $output->writeFieldBegin('catNameThree');
			$xfer += $output->writeString($this->catNameThree);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodFullId !== null) {
			
			$xfer += $output->writeFieldBegin('goodFullId');
			$xfer += $output->writeString($this->goodFullId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodOnline !== null) {
			
			$xfer += $output->writeFieldBegin('goodOnline');
			$xfer += $output->writeI32($this->goodOnline);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorProductId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorProductId');
			$xfer += $output->writeI64($this->vendorProductId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isMp !== null) {
			
			$xfer += $output->writeFieldBegin('isMp');
			$xfer += $output->writeBool($this->isMp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>