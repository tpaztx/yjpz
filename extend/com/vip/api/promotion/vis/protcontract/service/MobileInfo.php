<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\api\promotion\vis\protcontract\service;

class MobileInfo {
	
	static $_TSPEC;
	public $mainId = null;
	public $activityType = null;
	public $mobileRemark = null;
	public $vendorBearInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'mainId'
			),
			2 => array(
			'var' => 'activityType'
			),
			3 => array(
			'var' => 'mobileRemark'
			),
			4 => array(
			'var' => 'vendorBearInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['mainId'])){
				
				$this->mainId = $vals['mainId'];
			}
			
			
			if (isset($vals['activityType'])){
				
				$this->activityType = $vals['activityType'];
			}
			
			
			if (isset($vals['mobileRemark'])){
				
				$this->mobileRemark = $vals['mobileRemark'];
			}
			
			
			if (isset($vals['vendorBearInfo'])){
				
				$this->vendorBearInfo = $vals['vendorBearInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'MobileInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("mainId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->mainId); 
				
			}
			
			
			
			
			if ("activityType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->activityType); 
				
			}
			
			
			
			
			if ("mobileRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mobileRemark);
				
			}
			
			
			
			
			if ("vendorBearInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorBearInfo = new \com\vip\api\promotion\vis\protcontract\service\VendorBearInfo();
				$this->vendorBearInfo->read($input);
				
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
		
		if($this->mainId !== null) {
			
			$xfer += $output->writeFieldBegin('mainId');
			$xfer += $output->writeI64($this->mainId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityType !== null) {
			
			$xfer += $output->writeFieldBegin('activityType');
			$xfer += $output->writeByte($this->activityType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mobileRemark !== null) {
			
			$xfer += $output->writeFieldBegin('mobileRemark');
			$xfer += $output->writeString($this->mobileRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorBearInfo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorBearInfo');
			
			if (!is_object($this->vendorBearInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->vendorBearInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>