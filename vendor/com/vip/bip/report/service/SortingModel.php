<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\bip\report\service;

class SortingModel {
	
	static $_TSPEC;
	public $sortingAttr = null;
	public $sortingType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sortingAttr'
			),
			2 => array(
			'var' => 'sortingType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sortingAttr'])){
				
				$this->sortingAttr = $vals['sortingAttr'];
			}
			
			
			if (isset($vals['sortingType'])){
				
				$this->sortingType = $vals['sortingType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SortingModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sortingAttr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sortingAttr);
				
			}
			
			
			
			
			if ("sortingType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\bip\report\service\SortingType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->sortingType = $k;
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
		
		if($this->sortingAttr !== null) {
			
			$xfer += $output->writeFieldBegin('sortingAttr');
			$xfer += $output->writeString($this->sortingAttr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sortingType !== null) {
			
			$xfer += $output->writeFieldBegin('sortingType');
			
			$em = new \com\vip\bip\report\service\SortingType; 
			$output->writeString($em::$__names[$this->sortingType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>