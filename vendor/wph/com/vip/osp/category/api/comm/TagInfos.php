<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class TagInfos {
	
	static $_TSPEC;
	public $tagType = null;
	public $tagInfoList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagType'
			),
			2 => array(
			'var' => 'tagInfoList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagType'])){
				
				$this->tagType = $vals['tagType'];
			}
			
			
			if (isset($vals['tagInfoList'])){
				
				$this->tagInfoList = $vals['tagInfoList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TagInfos';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tagType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tagType); 
				
			}
			
			
			
			
			if ("tagInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->tagInfoList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\osp\category\api\comm\TagInfo();
						$elem1->read($input);
						
						$this->tagInfoList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('tagType');
		$xfer += $output->writeI32($this->tagType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tagInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('tagInfoList');
			
			if (!is_array($this->tagInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>