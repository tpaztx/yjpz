<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class GetUnprocAsynCmdRetryListReq {
	
	static $_TSPEC;
	public $procTimeRange = null;
	public $isProc = null;
	public $limit = null;
	public $maxRetryCount = null;
	public $modNum = null;
	public $mod = null;
	public $orderByList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'procTimeRange'
			),
			2 => array(
			'var' => 'isProc'
			),
			3 => array(
			'var' => 'limit'
			),
			4 => array(
			'var' => 'maxRetryCount'
			),
			5 => array(
			'var' => 'modNum'
			),
			6 => array(
			'var' => 'mod'
			),
			7 => array(
			'var' => 'orderByList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['procTimeRange'])){
				
				$this->procTimeRange = $vals['procTimeRange'];
			}
			
			
			if (isset($vals['isProc'])){
				
				$this->isProc = $vals['isProc'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
			if (isset($vals['maxRetryCount'])){
				
				$this->maxRetryCount = $vals['maxRetryCount'];
			}
			
			
			if (isset($vals['modNum'])){
				
				$this->modNum = $vals['modNum'];
			}
			
			
			if (isset($vals['mod'])){
				
				$this->mod = $vals['mod'];
			}
			
			
			if (isset($vals['orderByList'])){
				
				$this->orderByList = $vals['orderByList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetUnprocAsynCmdRetryListReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("procTimeRange" == $schemeField){
				
				$needSkip = false;
				
				$this->procTimeRange = new \com\vip\xstore\order\common\pojo\vo\RangeParam();
				$this->procTimeRange->read($input);
				
			}
			
			
			
			
			if ("isProc" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isProc); 
				
			}
			
			
			
			
			if ("limit" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->limit); 
				
			}
			
			
			
			
			if ("maxRetryCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->maxRetryCount); 
				
			}
			
			
			
			
			if ("modNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->modNum); 
				
			}
			
			
			
			
			if ("mod" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->mod); 
				
			}
			
			
			
			
			if ("orderByList" == $schemeField){
				
				$needSkip = false;
				
				$this->orderByList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\xstore\order\common\pojo\vo\OrderBy();
						$elem1->read($input);
						
						$this->orderByList[$_size1++] = $elem1;
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
		
		if($this->procTimeRange !== null) {
			
			$xfer += $output->writeFieldBegin('procTimeRange');
			
			if (!is_object($this->procTimeRange)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->procTimeRange->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isProc !== null) {
			
			$xfer += $output->writeFieldBegin('isProc');
			$xfer += $output->writeI32($this->isProc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->limit !== null) {
			
			$xfer += $output->writeFieldBegin('limit');
			$xfer += $output->writeI32($this->limit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxRetryCount !== null) {
			
			$xfer += $output->writeFieldBegin('maxRetryCount');
			$xfer += $output->writeI32($this->maxRetryCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->modNum !== null) {
			
			$xfer += $output->writeFieldBegin('modNum');
			$xfer += $output->writeI32($this->modNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mod !== null) {
			
			$xfer += $output->writeFieldBegin('mod');
			$xfer += $output->writeI32($this->mod);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderByList !== null) {
			
			$xfer += $output->writeFieldBegin('orderByList');
			
			if (!is_array($this->orderByList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->orderByList as $iter0){
				
				
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