<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\rbp\service;

class RbpBasePayTimeIntRespModel {
	
	static $_TSPEC;
	public $payTimeList = null;
	public $respStatus = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'payTimeList'
			),
			2 => array(
			'var' => 'respStatus'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['payTimeList'])){
				
				$this->payTimeList = $vals['payTimeList'];
			}
			
			
			if (isset($vals['respStatus'])){
				
				$this->respStatus = $vals['respStatus'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpBasePayTimeIntRespModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("payTimeList" == $schemeField){
				
				$needSkip = false;
				
				$this->payTimeList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\rbp\service\RbpBasePayTimeIntModel();
						$elem0->read($input);
						
						$this->payTimeList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("respStatus" == $schemeField){
				
				$needSkip = false;
				
				$this->respStatus = new \com\vip\fcs\osp\rbp\service\RbpRespStatusModel();
				$this->respStatus->read($input);
				
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
		
		if($this->payTimeList !== null) {
			
			$xfer += $output->writeFieldBegin('payTimeList');
			
			if (!is_array($this->payTimeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->payTimeList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->respStatus !== null) {
			
			$xfer += $output->writeFieldBegin('respStatus');
			
			if (!is_object($this->respStatus)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->respStatus->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>