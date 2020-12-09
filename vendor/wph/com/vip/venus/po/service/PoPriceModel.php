<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;

class PoPriceModel {
	
	static $_TSPEC;
	public $barCodeList = null;
	public $poTypeMode = null;
	public $priceType = null;
	public $currencyCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barCodeList'
			),
			2 => array(
			'var' => 'poTypeMode'
			),
			3 => array(
			'var' => 'priceType'
			),
			4 => array(
			'var' => 'currencyCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barCodeList'])){
				
				$this->barCodeList = $vals['barCodeList'];
			}
			
			
			if (isset($vals['poTypeMode'])){
				
				$this->poTypeMode = $vals['poTypeMode'];
			}
			
			
			if (isset($vals['priceType'])){
				
				$this->priceType = $vals['priceType'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoPriceModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barCodeList" == $schemeField){
				
				$needSkip = false;
				
				$this->barCodeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->barCodeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("poTypeMode" == $schemeField){
				
				$needSkip = false;
				
				$this->poTypeMode = new \com\vip\venus\po\service\PoTypeMode();
				$this->poTypeMode->read($input);
				
			}
			
			
			
			
			if ("priceType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\venus\po\service\PriceType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->priceType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
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
		
		if($this->barCodeList !== null) {
			
			$xfer += $output->writeFieldBegin('barCodeList');
			
			if (!is_array($this->barCodeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->barCodeList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poTypeMode !== null) {
			
			$xfer += $output->writeFieldBegin('poTypeMode');
			
			if (!is_object($this->poTypeMode)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->poTypeMode->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceType !== null) {
			
			$xfer += $output->writeFieldBegin('priceType');
			
			$em = new \com\vip\venus\po\service\PriceType; 
			$output->writeString($em::$__names[$this->priceType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>