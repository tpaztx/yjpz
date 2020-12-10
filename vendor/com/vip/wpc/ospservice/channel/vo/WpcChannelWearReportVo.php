<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelWearReportVo {
	
	static $_TSPEC;
	public $colsList = null;
	public $reportValueList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'colsList'
			),
			2 => array(
			'var' => 'reportValueList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['colsList'])){
				
				$this->colsList = $vals['colsList'];
			}
			
			
			if (isset($vals['reportValueList'])){
				
				$this->reportValueList = $vals['reportValueList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelWearReportVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("colsList" == $schemeField){
				
				$needSkip = false;
				
				$this->colsList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->colsList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("reportValueList" == $schemeField){
				
				$needSkip = false;
				
				$this->reportValueList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = array();
						$input->readMapBegin();
						while(true){
							
							try{
								
								$key2 = '';
								$input->readString($key2);
								
								$val2 = '';
								$input->readString($val2);
								
								$elem1[$key2] = $val2;
							}
							catch(\Exception $e){
								
								break;
							}
						}
						
						$input->readMapEnd();
						
						$this->reportValueList[$_size1++] = $elem1;
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
		
		if($this->colsList !== null) {
			
			$xfer += $output->writeFieldBegin('colsList');
			
			if (!is_array($this->colsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->colsList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reportValueList !== null) {
			
			$xfer += $output->writeFieldBegin('reportValueList');
			
			if (!is_array($this->reportValueList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->reportValueList as $iter0){
				
				
				if (!is_array($iter0)){
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$output->writeMapBegin();
				foreach ($iter0 as $kiter1 => $viter1){
					
					$xfer += $output->writeString($kiter1);
					
					$xfer += $output->writeString($viter1);
					
				}
				
				$output->writeMapEnd();
				
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