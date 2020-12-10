<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop\request;

class WpcAddressSmartRequest {
	
	static $_TSPEC;
	public $areaId = null;
	public $timestamp = null;
	public $vopChannelId = null;
	public $userNumber = null;
	public $fullAddress = null;
	public $provinceName = null;
	public $cityName = null;
	public $areaName = null;
	public $townName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			501 => array(
			'var' => 'areaId'
			),
			502 => array(
			'var' => 'timestamp'
			),
			503 => array(
			'var' => 'vopChannelId'
			),
			504 => array(
			'var' => 'userNumber'
			),
			12001 => array(
			'var' => 'fullAddress'
			),
			12002 => array(
			'var' => 'provinceName'
			),
			12003 => array(
			'var' => 'cityName'
			),
			12004 => array(
			'var' => 'areaName'
			),
			12005 => array(
			'var' => 'townName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['areaId'])){
				
				$this->areaId = $vals['areaId'];
			}
			
			
			if (isset($vals['timestamp'])){
				
				$this->timestamp = $vals['timestamp'];
			}
			
			
			if (isset($vals['vopChannelId'])){
				
				$this->vopChannelId = $vals['vopChannelId'];
			}
			
			
			if (isset($vals['userNumber'])){
				
				$this->userNumber = $vals['userNumber'];
			}
			
			
			if (isset($vals['fullAddress'])){
				
				$this->fullAddress = $vals['fullAddress'];
			}
			
			
			if (isset($vals['provinceName'])){
				
				$this->provinceName = $vals['provinceName'];
			}
			
			
			if (isset($vals['cityName'])){
				
				$this->cityName = $vals['cityName'];
			}
			
			
			if (isset($vals['areaName'])){
				
				$this->areaName = $vals['areaName'];
			}
			
			
			if (isset($vals['townName'])){
				
				$this->townName = $vals['townName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcAddressSmartRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("areaId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaId);
				
			}
			
			
			
			
			if ("timestamp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timestamp);
				
			}
			
			
			
			
			if ("vopChannelId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vopChannelId);
				
			}
			
			
			
			
			if ("userNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userNumber);
				
			}
			
			
			
			
			if ("fullAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullAddress);
				
			}
			
			
			
			
			if ("provinceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->provinceName);
				
			}
			
			
			
			
			if ("cityName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cityName);
				
			}
			
			
			
			
			if ("areaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaName);
				
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
		
		if($this->areaId !== null) {
			
			$xfer += $output->writeFieldBegin('areaId');
			$xfer += $output->writeString($this->areaId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timestamp !== null) {
			
			$xfer += $output->writeFieldBegin('timestamp');
			$xfer += $output->writeString($this->timestamp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vopChannelId !== null) {
			
			$xfer += $output->writeFieldBegin('vopChannelId');
			$xfer += $output->writeString($this->vopChannelId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userNumber !== null) {
			
			$xfer += $output->writeFieldBegin('userNumber');
			$xfer += $output->writeString($this->userNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fullAddress !== null) {
			
			$xfer += $output->writeFieldBegin('fullAddress');
			$xfer += $output->writeString($this->fullAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->provinceName !== null) {
			
			$xfer += $output->writeFieldBegin('provinceName');
			$xfer += $output->writeString($this->provinceName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cityName !== null) {
			
			$xfer += $output->writeFieldBegin('cityName');
			$xfer += $output->writeString($this->cityName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->areaName !== null) {
			
			$xfer += $output->writeFieldBegin('areaName');
			$xfer += $output->writeString($this->areaName);
			
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