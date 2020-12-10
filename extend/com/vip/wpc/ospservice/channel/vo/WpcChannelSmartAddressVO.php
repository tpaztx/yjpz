<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelSmartAddressVO {
	
	static $_TSPEC;
	public $provinceCode = null;
	public $provinceName = null;
	public $cityCode = null;
	public $cityName = null;
	public $areaCode = null;
	public $areaName = null;
	public $townCode = null;
	public $townName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			18100 => array(
			'var' => 'provinceCode'
			),
			18101 => array(
			'var' => 'provinceName'
			),
			18102 => array(
			'var' => 'cityCode'
			),
			18103 => array(
			'var' => 'cityName'
			),
			18104 => array(
			'var' => 'areaCode'
			),
			18105 => array(
			'var' => 'areaName'
			),
			18106 => array(
			'var' => 'townCode'
			),
			18107 => array(
			'var' => 'townName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['provinceCode'])){
				
				$this->provinceCode = $vals['provinceCode'];
			}
			
			
			if (isset($vals['provinceName'])){
				
				$this->provinceName = $vals['provinceName'];
			}
			
			
			if (isset($vals['cityCode'])){
				
				$this->cityCode = $vals['cityCode'];
			}
			
			
			if (isset($vals['cityName'])){
				
				$this->cityName = $vals['cityName'];
			}
			
			
			if (isset($vals['areaCode'])){
				
				$this->areaCode = $vals['areaCode'];
			}
			
			
			if (isset($vals['areaName'])){
				
				$this->areaName = $vals['areaName'];
			}
			
			
			if (isset($vals['townCode'])){
				
				$this->townCode = $vals['townCode'];
			}
			
			
			if (isset($vals['townName'])){
				
				$this->townName = $vals['townName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelSmartAddressVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("provinceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceCode);
				
			}
			
			
			
			
			if ("provinceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceName);
				
			}
			
			
			
			
			if ("cityCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityCode);
				
			}
			
			
			
			
			if ("cityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityName);
				
			}
			
			
			
			
			if ("areaCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaCode);
				
			}
			
			
			
			
			if ("areaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaName);
				
			}
			
			
			
			
			if ("townCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->townCode);
				
			}
			
			
			
			
			if ("townName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->townName);
				
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
		
		if($this->provinceCode !== null) {
			
			$xfer += $output->writeFieldBegin('provinceCode');
			$xfer += $output->writeString($this->provinceCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceName !== null) {
			
			$xfer += $output->writeFieldBegin('provinceName');
			$xfer += $output->writeString($this->provinceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityCode !== null) {
			
			$xfer += $output->writeFieldBegin('cityCode');
			$xfer += $output->writeString($this->cityCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityName !== null) {
			
			$xfer += $output->writeFieldBegin('cityName');
			$xfer += $output->writeString($this->cityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaCode !== null) {
			
			$xfer += $output->writeFieldBegin('areaCode');
			$xfer += $output->writeString($this->areaCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaName !== null) {
			
			$xfer += $output->writeFieldBegin('areaName');
			$xfer += $output->writeString($this->areaName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->townCode !== null) {
			
			$xfer += $output->writeFieldBegin('townCode');
			$xfer += $output->writeString($this->townCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->townName !== null) {
			
			$xfer += $output->writeFieldBegin('townName');
			$xfer += $output->writeString($this->townName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>