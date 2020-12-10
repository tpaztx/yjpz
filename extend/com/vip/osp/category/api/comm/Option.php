<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class Option {
	
	static $_TSPEC;
	public $attributeId = null;
	public $optionId = null;
	public $name = null;
	public $englishname = null;
	public $description = null;
	public $hierarchyGroup = null;
	public $sort = null;
	public $parentOptionId = null;
	public $isVirtual = null;
	public $realOptions = null;
	public $foreignname = null;
	public $externaldata = null;
	public $aliases = null;
	public $literal = null;
	public $flag = null;
	public $remarks = null;
	public $startTime = null;
	public $endTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'attributeId'
			),
			2 => array(
			'var' => 'optionId'
			),
			3 => array(
			'var' => 'name'
			),
			4 => array(
			'var' => 'englishname'
			),
			5 => array(
			'var' => 'description'
			),
			6 => array(
			'var' => 'hierarchyGroup'
			),
			7 => array(
			'var' => 'sort'
			),
			8 => array(
			'var' => 'parentOptionId'
			),
			9 => array(
			'var' => 'isVirtual'
			),
			10 => array(
			'var' => 'realOptions'
			),
			11 => array(
			'var' => 'foreignname'
			),
			12 => array(
			'var' => 'externaldata'
			),
			13 => array(
			'var' => 'aliases'
			),
			14 => array(
			'var' => 'literal'
			),
			15 => array(
			'var' => 'flag'
			),
			16 => array(
			'var' => 'remarks'
			),
			17 => array(
			'var' => 'startTime'
			),
			18 => array(
			'var' => 'endTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['attributeId'])){
				
				$this->attributeId = $vals['attributeId'];
			}
			
			
			if (isset($vals['optionId'])){
				
				$this->optionId = $vals['optionId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['englishname'])){
				
				$this->englishname = $vals['englishname'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['hierarchyGroup'])){
				
				$this->hierarchyGroup = $vals['hierarchyGroup'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['parentOptionId'])){
				
				$this->parentOptionId = $vals['parentOptionId'];
			}
			
			
			if (isset($vals['isVirtual'])){
				
				$this->isVirtual = $vals['isVirtual'];
			}
			
			
			if (isset($vals['realOptions'])){
				
				$this->realOptions = $vals['realOptions'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['externaldata'])){
				
				$this->externaldata = $vals['externaldata'];
			}
			
			
			if (isset($vals['aliases'])){
				
				$this->aliases = $vals['aliases'];
			}
			
			
			if (isset($vals['literal'])){
				
				$this->literal = $vals['literal'];
			}
			
			
			if (isset($vals['flag'])){
				
				$this->flag = $vals['flag'];
			}
			
			
			if (isset($vals['remarks'])){
				
				$this->remarks = $vals['remarks'];
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
		
		return 'Option';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("attributeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attributeId); 
				
			}
			
			
			
			
			if ("optionId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->optionId); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("englishname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->englishname);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("hierarchyGroup" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hierarchyGroup);
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("parentOptionId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->parentOptionId); 
				
			}
			
			
			
			
			if ("isVirtual" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isVirtual);
				
			}
			
			
			
			
			if ("realOptions" == $schemeField){
				
				$needSkip = false;
				
				$this->realOptions = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readI32($elem0); 
						
						$this->realOptions[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("externaldata" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->externaldata);
				
			}
			
			
			
			
			if ("aliases" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aliases);
				
			}
			
			
			
			
			if ("literal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->literal);
				
			}
			
			
			
			
			if ("flag" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->flag);
				
			}
			
			
			
			
			if ("remarks" == $schemeField){
				
				$needSkip = false;
				
				$this->remarks = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->remarks[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('attributeId');
		$xfer += $output->writeI32($this->attributeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('optionId');
		$xfer += $output->writeI32($this->optionId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->englishname !== null) {
			
			$xfer += $output->writeFieldBegin('englishname');
			$xfer += $output->writeString($this->englishname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hierarchyGroup !== null) {
			
			$xfer += $output->writeFieldBegin('hierarchyGroup');
			$xfer += $output->writeString($this->hierarchyGroup);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentOptionId !== null) {
			
			$xfer += $output->writeFieldBegin('parentOptionId');
			$xfer += $output->writeI32($this->parentOptionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVirtual !== null) {
			
			$xfer += $output->writeFieldBegin('isVirtual');
			$xfer += $output->writeBool($this->isVirtual);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->realOptions !== null) {
			
			$xfer += $output->writeFieldBegin('realOptions');
			
			if (!is_array($this->realOptions)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->realOptions as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->externaldata !== null) {
			
			$xfer += $output->writeFieldBegin('externaldata');
			$xfer += $output->writeString($this->externaldata);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aliases !== null) {
			
			$xfer += $output->writeFieldBegin('aliases');
			$xfer += $output->writeString($this->aliases);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->literal !== null) {
			
			$xfer += $output->writeFieldBegin('literal');
			$xfer += $output->writeString($this->literal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flag !== null) {
			
			$xfer += $output->writeFieldBegin('flag');
			$xfer += $output->writeBool($this->flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remarks !== null) {
			
			$xfer += $output->writeFieldBegin('remarks');
			
			if (!is_array($this->remarks)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->remarks as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
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