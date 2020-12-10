<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class OperateGroup {
	
	static $_TSPEC;
	public $operateGroupSn = null;
	public $name = null;
	public $tagGroupList = null;
	public $tagCount = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'operateGroupSn'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'tagGroupList'
			),
			4 => array(
			'var' => 'tagCount'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['operateGroupSn'])){
				
				$this->operateGroupSn = $vals['operateGroupSn'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['tagGroupList'])){
				
				$this->tagGroupList = $vals['tagGroupList'];
			}
			
			
			if (isset($vals['tagCount'])){
				
				$this->tagCount = $vals['tagCount'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OperateGroup';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("operateGroupSn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operateGroupSn); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("tagGroupList" == $schemeField){
				
				$needSkip = false;
				
				$this->tagGroupList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\category\service\TagGroup();
						$elem0->read($input);
						
						$this->tagGroupList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("tagCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tagCount); 
				
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
		
		$xfer += $output->writeFieldBegin('operateGroupSn');
		$xfer += $output->writeI32($this->operateGroupSn);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagGroupList !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroupList');
			
			if (!is_array($this->tagGroupList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagGroupList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagCount !== null) {
			
			$xfer += $output->writeFieldBegin('tagCount');
			$xfer += $output->writeI32($this->tagCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>