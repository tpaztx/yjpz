<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\pms\data\service;

class ActivityGoodsInfoResponse {
	
	static $_TSPEC;
	public $activityNo = null;
	public $midList = null;
	public $hasNext = null;
	public $lastId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'activityNo'
			),
			2 => array(
			'var' => 'midList'
			),
			3 => array(
			'var' => 'hasNext'
			),
			4 => array(
			'var' => 'lastId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['activityNo'])){
				
				$this->activityNo = $vals['activityNo'];
			}
			
			
			if (isset($vals['midList'])){
				
				$this->midList = $vals['midList'];
			}
			
			
			if (isset($vals['hasNext'])){
				
				$this->hasNext = $vals['hasNext'];
			}
			
			
			if (isset($vals['lastId'])){
				
				$this->lastId = $vals['lastId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ActivityGoodsInfoResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("activityNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityNo);
				
			}
			
			
			
			
			if ("midList" == $schemeField){
				
				$needSkip = false;
				
				$this->midList = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->midList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("hasNext" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->hasNext);
				
			}
			
			
			
			
			if ("lastId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastId); 
				
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
		
		$xfer += $output->writeFieldBegin('activityNo');
		$xfer += $output->writeString($this->activityNo);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('midList');
		
		if (!is_array($this->midList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->midList as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->hasNext !== null) {
			
			$xfer += $output->writeFieldBegin('hasNext');
			$xfer += $output->writeBool($this->hasNext);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastId !== null) {
			
			$xfer += $output->writeFieldBegin('lastId');
			$xfer += $output->writeI64($this->lastId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>