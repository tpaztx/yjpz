<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\adp\api\open\service;

class UrlGenRequest {
	
	static $_TSPEC;
	public $targetType = null;
	public $targetValueList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'targetType'
			),
			2 => array(
			'var' => 'targetValueList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['targetType'])){
				
				$this->targetType = $vals['targetType'];
			}
			
			
			if (isset($vals['targetValueList'])){
				
				$this->targetValueList = $vals['targetValueList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UrlGenRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("targetType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->targetType);
				
			}
			
			
			
			
			if ("targetValueList" == $schemeField){
				
				$needSkip = false;
				
				$this->targetValueList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->targetValueList[$_size0++] = $elem0;
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
		
		if($this->targetType !== null) {
			
			$xfer += $output->writeFieldBegin('targetType');
			$xfer += $output->writeString($this->targetType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->targetValueList !== null) {
			
			$xfer += $output->writeFieldBegin('targetValueList');
			
			if (!is_array($this->targetValueList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->targetValueList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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