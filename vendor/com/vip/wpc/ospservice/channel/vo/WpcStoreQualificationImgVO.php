<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcStoreQualificationImgVO {
	
	static $_TSPEC;
	public $qualificationType = null;
	public $imgUrl = null;
	public $licenseNumber = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			100 => array(
			'var' => 'qualificationType'
			),
			101 => array(
			'var' => 'imgUrl'
			),
			103 => array(
			'var' => 'licenseNumber'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['qualificationType'])){
				
				$this->qualificationType = $vals['qualificationType'];
			}
			
			
			if (isset($vals['imgUrl'])){
				
				$this->imgUrl = $vals['imgUrl'];
			}
			
			
			if (isset($vals['licenseNumber'])){
				
				$this->licenseNumber = $vals['licenseNumber'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcStoreQualificationImgVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("qualificationType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->qualificationType);
				
			}
			
			
			
			
			if ("imgUrl" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->imgUrl);
				
			}
			
			
			
			
			if ("licenseNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->licenseNumber);
				
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
		
		if($this->qualificationType !== null) {
			
			$xfer += $output->writeFieldBegin('qualificationType');
			$xfer += $output->writeString($this->qualificationType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imgUrl !== null) {
			
			$xfer += $output->writeFieldBegin('imgUrl');
			$xfer += $output->writeString($this->imgUrl);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->licenseNumber !== null) {
			
			$xfer += $output->writeFieldBegin('licenseNumber');
			$xfer += $output->writeString($this->licenseNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>