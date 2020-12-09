<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class OneToManyThirdInfoRequest {
	
	static $_TSPEC;
	public $actCode = null;
	public $thirdCode = null;
	public $client = null;
	public $extentsion = null;
	public $orderNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'actCode'
			),
			2 => array(
			'var' => 'thirdCode'
			),
			3 => array(
			'var' => 'client'
			),
			4 => array(
			'var' => 'extentsion'
			),
			5 => array(
			'var' => 'orderNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['thirdCode'])){
				
				$this->thirdCode = $vals['thirdCode'];
			}
			
			
			if (isset($vals['client'])){
				
				$this->client = $vals['client'];
			}
			
			
			if (isset($vals['extentsion'])){
				
				$this->extentsion = $vals['extentsion'];
			}
			
			
			if (isset($vals['orderNo'])){
				
				$this->orderNo = $vals['orderNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OneToManyThirdInfoRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("actCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actCode);
				
			}
			
			
			
			
			if ("thirdCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thirdCode);
				
			}
			
			
			
			
			if ("client" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client);
				
			}
			
			
			
			
			if ("extentsion" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extentsion);
				
			}
			
			
			
			
			if ("orderNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNo);
				
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
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdCode !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCode');
			$xfer += $output->writeString($this->thirdCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->client !== null) {
			
			$xfer += $output->writeFieldBegin('client');
			$xfer += $output->writeString($this->client);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extentsion !== null) {
			
			$xfer += $output->writeFieldBegin('extentsion');
			$xfer += $output->writeString($this->extentsion);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderNo !== null) {
			
			$xfer += $output->writeFieldBegin('orderNo');
			$xfer += $output->writeString($this->orderNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>