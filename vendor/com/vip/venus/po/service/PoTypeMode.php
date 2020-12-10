<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;

class PoTypeMode {
	
	static $_TSPEC;
	public $poTypeList = null;
	public $queryType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'poTypeList'
			),
			2 => array(
			'var' => 'queryType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['poTypeList'])){
				
				$this->poTypeList = $vals['poTypeList'];
			}
			
			
			if (isset($vals['queryType'])){
				
				$this->queryType = $vals['queryType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoTypeMode';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("poTypeList" == $schemeField){
				
				$needSkip = false;
				
				$this->poTypeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->poTypeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("queryType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\venus\po\service\QueryType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->queryType = $k;
						break;
					}
					
				}
				
				
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
		
		if($this->poTypeList !== null) {
			
			$xfer += $output->writeFieldBegin('poTypeList');
			
			if (!is_array($this->poTypeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->poTypeList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->queryType !== null) {
			
			$xfer += $output->writeFieldBegin('queryType');
			
			$em = new \com\vip\venus\po\service\QueryType; 
			$output->writeString($em::$__names[$this->queryType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>