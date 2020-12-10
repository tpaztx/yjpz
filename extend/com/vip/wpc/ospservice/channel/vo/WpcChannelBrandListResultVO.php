<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelBrandListResultVO {
	
	static $_TSPEC;
	public $pageIndex = null;
	public $pageSize = null;
	public $pageTotal = null;
	public $totalNum = null;
	public $brandList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pageIndex'
			),
			2 => array(
			'var' => 'pageSize'
			),
			3 => array(
			'var' => 'pageTotal'
			),
			4 => array(
			'var' => 'totalNum'
			),
			5 => array(
			'var' => 'brandList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pageIndex'])){
				
				$this->pageIndex = $vals['pageIndex'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
			if (isset($vals['pageTotal'])){
				
				$this->pageTotal = $vals['pageTotal'];
			}
			
			
			if (isset($vals['totalNum'])){
				
				$this->totalNum = $vals['totalNum'];
			}
			
			
			if (isset($vals['brandList'])){
				
				$this->brandList = $vals['brandList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelBrandListResultVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pageIndex" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageIndex); 
				
			}
			
			
			
			
			if ("pageSize" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageSize); 
				
			}
			
			
			
			
			if ("pageTotal" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->pageTotal); 
				
			}
			
			
			
			
			if ("totalNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->totalNum); 
				
			}
			
			
			
			
			if ("brandList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\channel\vo\WpcChannelBrandVO();
						$elem0->read($input);
						
						$this->brandList[$_size0++] = $elem0;
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
		
		if($this->pageIndex !== null) {
			
			$xfer += $output->writeFieldBegin('pageIndex');
			$xfer += $output->writeI32($this->pageIndex);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageSize !== null) {
			
			$xfer += $output->writeFieldBegin('pageSize');
			$xfer += $output->writeI32($this->pageSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageTotal !== null) {
			
			$xfer += $output->writeFieldBegin('pageTotal');
			$xfer += $output->writeI32($this->pageTotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('totalNum');
		$xfer += $output->writeI32($this->totalNum);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandList !== null) {
			
			$xfer += $output->writeFieldBegin('brandList');
			
			if (!is_array($this->brandList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandList as $iter0){
				
				
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