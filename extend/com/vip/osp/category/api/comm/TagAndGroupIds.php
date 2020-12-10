<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class TagAndGroupIds {
	
	static $_TSPEC;
	public $tagType = null;
	public $idList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagType'
			),
			2 => array(
			'var' => 'idList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagType'])){
				
				$this->tagType = $vals['tagType'];
			}
			
			
			if (isset($vals['idList'])){
				
				$this->idList = $vals['idList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TagAndGroupIds';
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
			
			
			
			
			if ("idList" == $schemeField){
				
				$needSkip = false;
				
				$this->idList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI32($elem1); 
						
						$this->idList[$_size1++] = $elem1;
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
		
		if($this->idList !== null) {
			
			$xfer += $output->writeFieldBegin('idList');
			
			if (!is_array($this->idList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->idList as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
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