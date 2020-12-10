<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelNoStockAreaVo {
	
	static $_TSPEC;
	public $provinceName = null;
	public $provinceAreaId = null;
	public $cityName = null;
	public $cityAreaId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'provinceName'
			),
			2 => array(
			'var' => 'provinceAreaId'
			),
			3 => array(
			'var' => 'cityName'
			),
			4 => array(
			'var' => 'cityAreaId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['provinceName'])){
				
				$this->provinceName = $vals['provinceName'];
			}
			
			
			if (isset($vals['provinceAreaId'])){
				
				$this->provinceAreaId = $vals['provinceAreaId'];
			}
			
			
			if (isset($vals['cityName'])){
				
				$this->cityName = $vals['cityName'];
			}
			
			
			if (isset($vals['cityAreaId'])){
				
				$this->cityAreaId = $vals['cityAreaId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelNoStockAreaVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("provinceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceName);
				
			}
			
			
			
			
			if ("provinceAreaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceAreaId);
				
			}
			
			
			
			
			if ("cityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityName);
				
			}
			
			
			
			
			if ("cityAreaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityAreaId);
				
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
		
		if($this->provinceName !== null) {
			
			$xfer += $output->writeFieldBegin('provinceName');
			$xfer += $output->writeString($this->provinceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceAreaId !== null) {
			
			$xfer += $output->writeFieldBegin('provinceAreaId');
			$xfer += $output->writeString($this->provinceAreaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityName !== null) {
			
			$xfer += $output->writeFieldBegin('cityName');
			$xfer += $output->writeString($this->cityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityAreaId !== null) {
			
			$xfer += $output->writeFieldBegin('cityAreaId');
			$xfer += $output->writeString($this->cityAreaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>