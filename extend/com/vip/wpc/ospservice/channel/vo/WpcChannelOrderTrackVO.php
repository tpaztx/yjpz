<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\channel\vo;

class WpcChannelOrderTrackVO {
	
	static $_TSPEC;
	public $trackId = null;
	public $transport = null;
	public $transportId = null;
	public $timeline = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2001 => array(
			'var' => 'trackId'
			),
			2002 => array(
			'var' => 'transport'
			),
			2003 => array(
			'var' => 'transportId'
			),
			2004 => array(
			'var' => 'timeline'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trackId'])){
				
				$this->trackId = $vals['trackId'];
			}
			
			
			if (isset($vals['transport'])){
				
				$this->transport = $vals['transport'];
			}
			
			
			if (isset($vals['transportId'])){
				
				$this->transportId = $vals['transportId'];
			}
			
			
			if (isset($vals['timeline'])){
				
				$this->timeline = $vals['timeline'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcChannelOrderTrackVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("trackId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trackId);
				
			}
			
			
			
			
			if ("transport" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport);
				
			}
			
			
			
			
			if ("transportId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportId);
				
			}
			
			
			
			
			if ("timeline" == $schemeField){
				
				$needSkip = false;
				
				$this->timeline = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\wpc\ospservice\h5\order\vo\WpcStoreOrderTrackTimelineVO();
						$elem0->read($input);
						
						$this->timeline[$_size0++] = $elem0;
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
		
		if($this->trackId !== null) {
			
			$xfer += $output->writeFieldBegin('trackId');
			$xfer += $output->writeString($this->trackId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transport !== null) {
			
			$xfer += $output->writeFieldBegin('transport');
			$xfer += $output->writeString($this->transport);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportId !== null) {
			
			$xfer += $output->writeFieldBegin('transportId');
			$xfer += $output->writeString($this->transportId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeline !== null) {
			
			$xfer += $output->writeFieldBegin('timeline');
			
			if (!is_array($this->timeline)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->timeline as $iter0){
				
				
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