<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class PmsActFavModel {
	
	static $_TSPEC;
	public $buy = null;
	public $cut = null;
	public $pmsActGiftInfoList = null;
	public $stepStatus = null;
	public $favType = null;
	public $minCut = null;
	public $maxCut = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'buy'
			),
			2 => array(
			'var' => 'cut'
			),
			3 => array(
			'var' => 'pmsActGiftInfoList'
			),
			4 => array(
			'var' => 'stepStatus'
			),
			5 => array(
			'var' => 'favType'
			),
			6 => array(
			'var' => 'minCut'
			),
			7 => array(
			'var' => 'maxCut'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['buy'])){
				
				$this->buy = $vals['buy'];
			}
			
			
			if (isset($vals['cut'])){
				
				$this->cut = $vals['cut'];
			}
			
			
			if (isset($vals['pmsActGiftInfoList'])){
				
				$this->pmsActGiftInfoList = $vals['pmsActGiftInfoList'];
			}
			
			
			if (isset($vals['stepStatus'])){
				
				$this->stepStatus = $vals['stepStatus'];
			}
			
			
			if (isset($vals['favType'])){
				
				$this->favType = $vals['favType'];
			}
			
			
			if (isset($vals['minCut'])){
				
				$this->minCut = $vals['minCut'];
			}
			
			
			if (isset($vals['maxCut'])){
				
				$this->maxCut = $vals['maxCut'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PmsActFavModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("buy" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->buy);
				
			}
			
			
			
			
			if ("cut" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->cut);
				
			}
			
			
			
			
			if ("pmsActGiftInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->pmsActGiftInfoList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\pms\data\service\PmsActGiftInfoModel();
						$elem0->read($input);
						
						$this->pmsActGiftInfoList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("stepStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->stepStatus); 
				
			}
			
			
			
			
			if ("favType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->favType); 
				
			}
			
			
			
			
			if ("minCut" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->minCut);
				
			}
			
			
			
			
			if ("maxCut" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->maxCut);
				
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
		
		$xfer += $output->writeFieldBegin('buy');
		$xfer += $output->writeDouble($this->buy);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cut');
		$xfer += $output->writeDouble($this->cut);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pmsActGiftInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('pmsActGiftInfoList');
			
			if (!is_array($this->pmsActGiftInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->pmsActGiftInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stepStatus !== null) {
			
			$xfer += $output->writeFieldBegin('stepStatus');
			$xfer += $output->writeByte($this->stepStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->favType !== null) {
			
			$xfer += $output->writeFieldBegin('favType');
			$xfer += $output->writeByte($this->favType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->minCut !== null) {
			
			$xfer += $output->writeFieldBegin('minCut');
			$xfer += $output->writeDouble($this->minCut);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxCut !== null) {
			
			$xfer += $output->writeFieldBegin('maxCut');
			$xfer += $output->writeDouble($this->maxCut);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>