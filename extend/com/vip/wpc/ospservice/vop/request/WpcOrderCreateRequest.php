<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop\request;

class WpcOrderCreateRequest {
	
	static $_TSPEC;
	public $areaId = null;
	public $timestamp = null;
	public $vopChannelId = null;
	public $userNumber = null;
	public $sizeInfo = null;
	public $provinceName = null;
	public $cityName = null;
	public $areaName = null;
	public $townName = null;
	public $address = null;
	public $consignee = null;
	public $mobile = null;
	public $traceId = null;
	public $clientIp = null;
	
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
			'var' => 'sizeInfo'
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
			12006 => array(
			'var' => 'address'
			),
			12007 => array(
			'var' => 'consignee'
			),
			12008 => array(
			'var' => 'mobile'
			),
			12009 => array(
			'var' => 'traceId'
			),
			12010 => array(
			'var' => 'clientIp'
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
			
			
			if (isset($vals['sizeInfo'])){
				
				$this->sizeInfo = $vals['sizeInfo'];
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
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['consignee'])){
				
				$this->consignee = $vals['consignee'];
			}
			
			
			if (isset($vals['mobile'])){
				
				$this->mobile = $vals['mobile'];
			}
			
			
			if (isset($vals['traceId'])){
				
				$this->traceId = $vals['traceId'];
			}
			
			
			if (isset($vals['clientIp'])){
				
				$this->clientIp = $vals['clientIp'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcOrderCreateRequest';
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
			
			
			
			
			if ("sizeInfo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeInfo);
				
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
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("consignee" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->consignee);
				
			}
			
			
			
			
			if ("mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobile);
				
			}
			
			
			
			
			if ("traceId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->traceId);
				
			}
			
			
			
			
			if ("clientIp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->clientIp);
				
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
		
		
		if($this->sizeInfo !== null) {
			
			$xfer += $output->writeFieldBegin('sizeInfo');
			$xfer += $output->writeString($this->sizeInfo);
			
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
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->consignee !== null) {
			
			$xfer += $output->writeFieldBegin('consignee');
			$xfer += $output->writeString($this->consignee);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobile !== null) {
			
			$xfer += $output->writeFieldBegin('mobile');
			$xfer += $output->writeString($this->mobile);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->traceId !== null) {
			
			$xfer += $output->writeFieldBegin('traceId');
			$xfer += $output->writeString($this->traceId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->clientIp !== null) {
			
			$xfer += $output->writeFieldBegin('clientIp');
			$xfer += $output->writeString($this->clientIp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>