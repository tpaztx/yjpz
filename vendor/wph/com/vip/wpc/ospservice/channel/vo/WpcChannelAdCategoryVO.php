<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelAdCategoryVO {
	
	static $_TSPEC;
	public $cateId = null;
	public $cateName = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cateId'
			),
			2 => array(
			'var' => 'cateName'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cateId'])){
				
				$this->cateId = $vals['cateId'];
			}
			
			
			if (isset($vals['cateName'])){
				
				$this->cateName = $vals['cateName'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelAdCategoryVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cateId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cateId); 
				
			}
			
			
			
			
			if ("cateName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cateName);
				
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
		
		if($this->cateId !== null) {
			
			$xfer += $output->writeFieldBegin('cateId');
			$xfer += $output->writeI64($this->cateId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cateName !== null) {
			
			$xfer += $output->writeFieldBegin('cateName');
			$xfer += $output->writeString($this->cateName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>