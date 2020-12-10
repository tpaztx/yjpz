<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class GetUnprocInfOutletsOrderListReq {
	
	static $_TSPEC;
	public $maxErrorCount = null;
	public $procTimeRange = null;
	public $modNum = null;
	public $mod = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'maxErrorCount'
			),
			2 => array(
			'var' => 'procTimeRange'
			),
			3 => array(
			'var' => 'modNum'
			),
			4 => array(
			'var' => 'mod'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['maxErrorCount'])){
				
				$this->maxErrorCount = $vals['maxErrorCount'];
			}
			
			
			if (isset($vals['procTimeRange'])){
				
				$this->procTimeRange = $vals['procTimeRange'];
			}
			
			
			if (isset($vals['modNum'])){
				
				$this->modNum = $vals['modNum'];
			}
			
			
			if (isset($vals['mod'])){
				
				$this->mod = $vals['mod'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetUnprocInfOutletsOrderListReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("maxErrorCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->maxErrorCount); 
				
			}
			
			
			
			
			if ("procTimeRange" == $schemeField){
				
				$needSkip = false;
				
				$this->procTimeRange = new \com\vip\xstore\order\common\pojo\vo\RangeParam();
				$this->procTimeRange->read($input);
				
			}
			
			
			
			
			if ("modNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->modNum); 
				
			}
			
			
			
			
			if ("mod" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->mod); 
				
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
		
		if($this->maxErrorCount !== null) {
			
			$xfer += $output->writeFieldBegin('maxErrorCount');
			$xfer += $output->writeI32($this->maxErrorCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procTimeRange !== null) {
			
			$xfer += $output->writeFieldBegin('procTimeRange');
			
			if (!is_object($this->procTimeRange)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->procTimeRange->write($output);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>