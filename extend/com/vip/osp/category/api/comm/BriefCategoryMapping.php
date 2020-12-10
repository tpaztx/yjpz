<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class BriefCategoryMapping {
	
	static $_TSPEC;
	public $sourcecategoryId = null;
	public $filter = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sourcecategoryId'
			),
			2 => array(
			'var' => 'filter'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sourcecategoryId'])){
				
				$this->sourcecategoryId = $vals['sourcecategoryId'];
			}
			
			
			if (isset($vals['filter'])){
				
				$this->filter = $vals['filter'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BriefCategoryMapping';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sourcecategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sourcecategoryId); 
				
			}
			
			
			
			
			if ("filter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->filter);
				
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
		
		$xfer += $output->writeFieldBegin('sourcecategoryId');
		$xfer += $output->writeI32($this->sourcecategoryId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->filter !== null) {
			
			$xfer += $output->writeFieldBegin('filter');
			$xfer += $output->writeString($this->filter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>