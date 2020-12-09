<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class CategoryTagOption {
	
	static $_TSPEC;
	public $tagId = null;
	public $optionId = null;
	public $name = null;
	public $foreignname = null;
	public $sort = null;
	public $cornerFlag = null;
	public $viewarea = null;
	public $propsMap = null;
	public $weight = null;
	public $startTime = null;
	public $endTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagId'
			),
			2 => array(
			'var' => 'optionId'
			),
			3 => array(
			'var' => 'name'
			),
			4 => array(
			'var' => 'foreignname'
			),
			5 => array(
			'var' => 'sort'
			),
			6 => array(
			'var' => 'cornerFlag'
			),
			7 => array(
			'var' => 'viewarea'
			),
			8 => array(
			'var' => 'propsMap'
			),
			9 => array(
			'var' => 'weight'
			),
			10 => array(
			'var' => 'startTime'
			),
			11 => array(
			'var' => 'endTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagId'])){
				
				$this->tagId = $vals['tagId'];
			}
			
			
			if (isset($vals['optionId'])){
				
				$this->optionId = $vals['optionId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['cornerFlag'])){
				
				$this->cornerFlag = $vals['cornerFlag'];
			}
			
			
			if (isset($vals['viewarea'])){
				
				$this->viewarea = $vals['viewarea'];
			}
			
			
			if (isset($vals['propsMap'])){
				
				$this->propsMap = $vals['propsMap'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryTagOption';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tagId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tagId); 
				
			}
			
			
			
			
			if ("optionId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->optionId); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("cornerFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cornerFlag); 
				
			}
			
			
			
			
			if ("viewarea" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->viewarea); 
				
			}
			
			
			
			
			if ("propsMap" == $schemeField){
				
				$needSkip = false;
				
				$this->propsMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->propsMap[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->weight); 
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
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
		
		$xfer += $output->writeFieldBegin('tagId');
		$xfer += $output->writeI32($this->tagId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('optionId');
		$xfer += $output->writeI32($this->optionId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cornerFlag !== null) {
			
			$xfer += $output->writeFieldBegin('cornerFlag');
			$xfer += $output->writeI32($this->cornerFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->viewarea !== null) {
			
			$xfer += $output->writeFieldBegin('viewarea');
			$xfer += $output->writeI32($this->viewarea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->propsMap !== null) {
			
			$xfer += $output->writeFieldBegin('propsMap');
			
			if (!is_array($this->propsMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->propsMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeI32($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>