<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class PtpTagInfo {
	
	static $_TSPEC;
	public $tagGroupSn = null;
	public $tagSn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagGroupSn'
			),
			2 => array(
			'var' => 'tagSn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagGroupSn'])){
				
				$this->tagGroupSn = $vals['tagGroupSn'];
			}
			
			
			if (isset($vals['tagSn'])){
				
				$this->tagSn = $vals['tagSn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PtpTagInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tagGroupSn" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->tagGroupSn); 
				
			}
			
			
			
			
			if ("tagSn" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->tagSn); 
				
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
		
		if($this->tagGroupSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroupSn');
			$xfer += $output->writeI64($this->tagGroupSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagSn');
			$xfer += $output->writeI64($this->tagSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>