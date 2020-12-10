<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class ExchangedReason {
	
	static $_TSPEC;
	public $reasonId = null;
	public $reasonDesc = null;
	public $reasonType = null;
	public $reasonTip = null;
	public $isDefault = null;
	public $isShow = null;
	public $flagsMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reasonId'
			),
			2 => array(
			'var' => 'reasonDesc'
			),
			3 => array(
			'var' => 'reasonType'
			),
			4 => array(
			'var' => 'reasonTip'
			),
			5 => array(
			'var' => 'isDefault'
			),
			6 => array(
			'var' => 'isShow'
			),
			7 => array(
			'var' => 'flagsMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reasonId'])){
				
				$this->reasonId = $vals['reasonId'];
			}
			
			
			if (isset($vals['reasonDesc'])){
				
				$this->reasonDesc = $vals['reasonDesc'];
			}
			
			
			if (isset($vals['reasonType'])){
				
				$this->reasonType = $vals['reasonType'];
			}
			
			
			if (isset($vals['reasonTip'])){
				
				$this->reasonTip = $vals['reasonTip'];
			}
			
			
			if (isset($vals['isDefault'])){
				
				$this->isDefault = $vals['isDefault'];
			}
			
			
			if (isset($vals['isShow'])){
				
				$this->isShow = $vals['isShow'];
			}
			
			
			if (isset($vals['flagsMap'])){
				
				$this->flagsMap = $vals['flagsMap'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExchangedReason';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("reasonId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->reasonId); 
				
			}
			
			
			
			
			if ("reasonDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonDesc);
				
			}
			
			
			
			
			if ("reasonType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->reasonType); 
				
			}
			
			
			
			
			if ("reasonTip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonTip);
				
			}
			
			
			
			
			if ("isDefault" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isDefault); 
				
			}
			
			
			
			
			if ("isShow" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isShow); 
				
			}
			
			
			
			
			if ("flagsMap" == $schemeField){
				
				$needSkip = false;
				
				$this->flagsMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->flagsMap[$key0] = $val0;
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
		
		$xfer += $output->writeFieldBegin('reasonId');
		$xfer += $output->writeI32($this->reasonId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->reasonDesc !== null) {
			
			$xfer += $output->writeFieldBegin('reasonDesc');
			$xfer += $output->writeString($this->reasonDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonType !== null) {
			
			$xfer += $output->writeFieldBegin('reasonType');
			$xfer += $output->writeByte($this->reasonType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonTip !== null) {
			
			$xfer += $output->writeFieldBegin('reasonTip');
			$xfer += $output->writeString($this->reasonTip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDefault !== null) {
			
			$xfer += $output->writeFieldBegin('isDefault');
			$xfer += $output->writeByte($this->isDefault);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShow !== null) {
			
			$xfer += $output->writeFieldBegin('isShow');
			$xfer += $output->writeByte($this->isShow);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flagsMap !== null) {
			
			$xfer += $output->writeFieldBegin('flagsMap');
			
			if (!is_array($this->flagsMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->flagsMap as $kiter0 => $viter0){
				
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