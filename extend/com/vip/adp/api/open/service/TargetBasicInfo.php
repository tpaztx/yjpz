<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class TargetBasicInfo {
	
	static $_TSPEC;
	public $name = null;
	public $vipPrice = null;
	public $marketPrice = null;
	public $commission = null;
	public $commissionRatio = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'name'
			),
			2 => array(
			'var' => 'vipPrice'
			),
			3 => array(
			'var' => 'marketPrice'
			),
			4 => array(
			'var' => 'commission'
			),
			5 => array(
			'var' => 'commissionRatio'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['vipPrice'])){
				
				$this->vipPrice = $vals['vipPrice'];
			}
			
			
			if (isset($vals['marketPrice'])){
				
				$this->marketPrice = $vals['marketPrice'];
			}
			
			
			if (isset($vals['commission'])){
				
				$this->commission = $vals['commission'];
			}
			
			
			if (isset($vals['commissionRatio'])){
				
				$this->commissionRatio = $vals['commissionRatio'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TargetBasicInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("vipPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipPrice);
				
			}
			
			
			
			
			if ("marketPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->marketPrice);
				
			}
			
			
			
			
			if ("commission" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commission);
				
			}
			
			
			
			
			if ("commissionRatio" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->commissionRatio);
				
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
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPrice !== null) {
			
			$xfer += $output->writeFieldBegin('vipPrice');
			$xfer += $output->writeString($this->vipPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->marketPrice !== null) {
			
			$xfer += $output->writeFieldBegin('marketPrice');
			$xfer += $output->writeString($this->marketPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commission !== null) {
			
			$xfer += $output->writeFieldBegin('commission');
			$xfer += $output->writeString($this->commission);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->commissionRatio !== null) {
			
			$xfer += $output->writeFieldBegin('commissionRatio');
			$xfer += $output->writeString($this->commissionRatio);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>