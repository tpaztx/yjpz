<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelBrandVO {
	
	static $_TSPEC;
	public $adId = null;
	public $brandName = null;
	public $brandImage = null;
	public $sellTimeFrom = null;
	public $sellTimeTo = null;
	public $goods = null;
	public $brandDesc = null;
	public $commissionRatio = null;
	public $preTime = null;
	public $storeQualificationImgList = null;
	public $adCategoryList = null;
	public $ext1 = null;
	public $ext2 = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'adId'
			),
			2 => array(
			'var' => 'brandName'
			),
			3 => array(
			'var' => 'brandImage'
			),
			4 => array(
			'var' => 'sellTimeFrom'
			),
			5 => array(
			'var' => 'sellTimeTo'
			),
			6 => array(
			'var' => 'goods'
			),
			7 => array(
			'var' => 'brandDesc'
			),
			8 => array(
			'var' => 'commissionRatio'
			),
			9 => array(
			'var' => 'preTime'
			),
			10 => array(
			'var' => 'storeQualificationImgList'
			),
			11 => array(
			'var' => 'adCategoryList'
			),
			12 => array(
			'var' => 'ext1'
			),
			13 => array(
			'var' => 'ext2'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['adId'])){
				
				$this->adId = $vals['adId'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['brandImage'])){
				
				$this->brandImage = $vals['brandImage'];
			}
			
			
			if (isset($vals['sellTimeFrom'])){
				
				$this->sellTimeFrom = $vals['sellTimeFrom'];
			}
			
			
			if (isset($vals['sellTimeTo'])){
				
				$this->sellTimeTo = $vals['sellTimeTo'];
			}
			
			
			if (isset($vals['goods'])){
				
				$this->goods = $vals['goods'];
			}
			
			
			if (isset($vals['brandDesc'])){
				
				$this->brandDesc = $vals['brandDesc'];
			}
			
			
			if (isset($vals['commissionRatio'])){
				
				$this->commissionRatio = $vals['commissionRatio'];
			}
			
			
			if (isset($vals['preTime'])){
				
				$this->preTime = $vals['preTime'];
			}
			
			
			if (isset($vals['storeQualificationImgList'])){
				
				$this->storeQualificationImgList = $vals['storeQualificationImgList'];
			}
			
			
			if (isset($vals['adCategoryList'])){
				
				$this->adCategoryList = $vals['adCategoryList'];
			}
			
			
			if (isset($vals['ext1'])){
				
				$this->ext1 = $vals['ext1'];
			}
			
			
			if (isset($vals['ext2'])){
				
				$this->ext2 = $vals['ext2'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelBrandVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("adId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adId);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("brandImage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandImage);
				
			}
			
			
			
			
			if ("sellTimeFrom" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeFrom);
				
			}
			
			
			
			
			if ("sellTimeTo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellTimeTo);
				
			}
			
			
			
			
			if ("goods" == $schemeField){
				
				$needSkip = false;
				
				$this->goods = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\channel\vo\WpcChannelBrandGoodVO();
						$elem0->read($input);
						
						$this->goods[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("brandDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandDesc);
				
			}
			
			
			
			
			if ("commissionRatio" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commissionRatio);
				
			}
			
			
			
			
			if ("preTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preTime);
				
			}
			
			
			
			
			if ("storeQualificationImgList" == $schemeField){
				
				$needSkip = false;
				
				$this->storeQualificationImgList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\wpc\ospservice\channel\vo\WpcStoreQualificationImgVO();
						$elem1->read($input);
						
						$this->storeQualificationImgList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("adCategoryList" == $schemeField){
				
				$needSkip = false;
				
				$this->adCategoryList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\wpc\ospservice\channel\vo\WpcChannelAdCategoryVO();
						$elem2->read($input);
						
						$this->adCategoryList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("ext1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ext1);
				
			}
			
			
			
			
			if ("ext2" == $schemeField){
				
				$needSkip = false;
				
				$this->ext2 = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key3 = '';
						$input->readString($key3);
						
						$val3 = '';
						$input->readString($val3);
						
						$this->ext2[$key3] = $val3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		if($this->adId !== null) {
			
			$xfer += $output->writeFieldBegin('adId');
			$xfer += $output->writeString($this->adId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandImage !== null) {
			
			$xfer += $output->writeFieldBegin('brandImage');
			$xfer += $output->writeString($this->brandImage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeFrom !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeFrom');
			$xfer += $output->writeString($this->sellTimeFrom);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellTimeTo !== null) {
			
			$xfer += $output->writeFieldBegin('sellTimeTo');
			$xfer += $output->writeString($this->sellTimeTo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods !== null) {
			
			$xfer += $output->writeFieldBegin('goods');
			
			if (!is_array($this->goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandDesc !== null) {
			
			$xfer += $output->writeFieldBegin('brandDesc');
			$xfer += $output->writeString($this->brandDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commissionRatio !== null) {
			
			$xfer += $output->writeFieldBegin('commissionRatio');
			$xfer += $output->writeString($this->commissionRatio);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preTime !== null) {
			
			$xfer += $output->writeFieldBegin('preTime');
			$xfer += $output->writeString($this->preTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeQualificationImgList !== null) {
			
			$xfer += $output->writeFieldBegin('storeQualificationImgList');
			
			if (!is_array($this->storeQualificationImgList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->storeQualificationImgList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adCategoryList !== null) {
			
			$xfer += $output->writeFieldBegin('adCategoryList');
			
			if (!is_array($this->adCategoryList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->adCategoryList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ext1 !== null) {
			
			$xfer += $output->writeFieldBegin('ext1');
			$xfer += $output->writeString($this->ext1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ext2 !== null) {
			
			$xfer += $output->writeFieldBegin('ext2');
			
			if (!is_array($this->ext2)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->ext2 as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>