<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class ThirdOpenSvipRequest {
	
	static $_TSPEC;
	public $userIp = null;
	public $orderSn = null;
	public $serial = null;
	public $thirdMemberType = null;
	public $openId = null;
	public $thirdAcct = null;
	public $thirdAcctType = null;
	public $svipType = null;
	public $dataSign = null;
	public $source = null;
	public $channel = null;
	public $svipToken = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'userIp'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'serial'
			),
			4 => array(
			'var' => 'thirdMemberType'
			),
			5 => array(
			'var' => 'openId'
			),
			6 => array(
			'var' => 'thirdAcct'
			),
			7 => array(
			'var' => 'thirdAcctType'
			),
			8 => array(
			'var' => 'svipType'
			),
			9 => array(
			'var' => 'dataSign'
			),
			10 => array(
			'var' => 'source'
			),
			11 => array(
			'var' => 'channel'
			),
			12 => array(
			'var' => 'svipToken'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['userIp'])){
				
				$this->userIp = $vals['userIp'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['serial'])){
				
				$this->serial = $vals['serial'];
			}
			
			
			if (isset($vals['thirdMemberType'])){
				
				$this->thirdMemberType = $vals['thirdMemberType'];
			}
			
			
			if (isset($vals['openId'])){
				
				$this->openId = $vals['openId'];
			}
			
			
			if (isset($vals['thirdAcct'])){
				
				$this->thirdAcct = $vals['thirdAcct'];
			}
			
			
			if (isset($vals['thirdAcctType'])){
				
				$this->thirdAcctType = $vals['thirdAcctType'];
			}
			
			
			if (isset($vals['svipType'])){
				
				$this->svipType = $vals['svipType'];
			}
			
			
			if (isset($vals['dataSign'])){
				
				$this->dataSign = $vals['dataSign'];
			}
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['svipToken'])){
				
				$this->svipToken = $vals['svipToken'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ThirdOpenSvipRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("userIp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->userIp);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("serial" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->serial);
				
			}
			
			
			
			
			if ("thirdMemberType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thirdMemberType); 
				
			}
			
			
			
			
			if ("openId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->openId);
				
			}
			
			
			
			
			if ("thirdAcct" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thirdAcct);
				
			}
			
			
			
			
			if ("thirdAcctType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thirdAcctType); 
				
			}
			
			
			
			
			if ("svipType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->svipType); 
				
			}
			
			
			
			
			if ("dataSign" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dataSign);
				
			}
			
			
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("svipToken" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->svipToken);
				
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
		
		if($this->userIp !== null) {
			
			$xfer += $output->writeFieldBegin('userIp');
			$xfer += $output->writeString($this->userIp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->serial !== null) {
			
			$xfer += $output->writeFieldBegin('serial');
			$xfer += $output->writeString($this->serial);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdMemberType !== null) {
			
			$xfer += $output->writeFieldBegin('thirdMemberType');
			$xfer += $output->writeI32($this->thirdMemberType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->openId !== null) {
			
			$xfer += $output->writeFieldBegin('openId');
			$xfer += $output->writeString($this->openId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdAcct !== null) {
			
			$xfer += $output->writeFieldBegin('thirdAcct');
			$xfer += $output->writeString($this->thirdAcct);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdAcctType !== null) {
			
			$xfer += $output->writeFieldBegin('thirdAcctType');
			$xfer += $output->writeI32($this->thirdAcctType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svipType !== null) {
			
			$xfer += $output->writeFieldBegin('svipType');
			$xfer += $output->writeI32($this->svipType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataSign !== null) {
			
			$xfer += $output->writeFieldBegin('dataSign');
			$xfer += $output->writeString($this->dataSign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->source !== null) {
			
			$xfer += $output->writeFieldBegin('source');
			$xfer += $output->writeString($this->source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->svipToken !== null) {
			
			$xfer += $output->writeFieldBegin('svipToken');
			$xfer += $output->writeString($this->svipToken);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>