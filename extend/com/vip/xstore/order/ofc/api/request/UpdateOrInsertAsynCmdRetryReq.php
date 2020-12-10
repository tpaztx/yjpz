<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class UpdateOrInsertAsynCmdRetryReq {
	
	static $_TSPEC;
	public $asynCmdVO = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'asynCmdVO'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['asynCmdVO'])){
				
				$this->asynCmdVO = $vals['asynCmdVO'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateOrInsertAsynCmdRetryReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("asynCmdVO" == $schemeField){
				
				$needSkip = false;
				
				$this->asynCmdVO = new \com\vip\xstore\order\common\pojo\vo\AsynCmdVO();
				$this->asynCmdVO->read($input);
				
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
		
		if($this->asynCmdVO !== null) {
			
			$xfer += $output->writeFieldBegin('asynCmdVO');
			
			if (!is_object($this->asynCmdVO)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->asynCmdVO->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>