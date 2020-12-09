<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\bip\report\service;

class BipDiagramFieldModel {
	
	static $_TSPEC;
	public $fieldName = null;
	public $fieldType = null;
	public $desc = null;
	public $format = null;
	public $aggregate = null;
	public $dimensionType = null;
	public $positionType = null;
	public $showValue = null;
	public $fixed = null;
	public $indicatorType = null;
	public $expression = null;
	public $warning = null;
	public $distinguishLists = null;
	public $authKeyList = null;
	public $sort = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'fieldName'
			),
			2 => array(
			'var' => 'fieldType'
			),
			3 => array(
			'var' => 'desc'
			),
			4 => array(
			'var' => 'format'
			),
			5 => array(
			'var' => 'aggregate'
			),
			6 => array(
			'var' => 'dimensionType'
			),
			7 => array(
			'var' => 'positionType'
			),
			8 => array(
			'var' => 'showValue'
			),
			9 => array(
			'var' => 'fixed'
			),
			10 => array(
			'var' => 'indicatorType'
			),
			11 => array(
			'var' => 'expression'
			),
			12 => array(
			'var' => 'warning'
			),
			13 => array(
			'var' => 'distinguishLists'
			),
			14 => array(
			'var' => 'authKeyList'
			),
			15 => array(
			'var' => 'sort'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['fieldName'])){
				
				$this->fieldName = $vals['fieldName'];
			}
			
			
			if (isset($vals['fieldType'])){
				
				$this->fieldType = $vals['fieldType'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
			if (isset($vals['format'])){
				
				$this->format = $vals['format'];
			}
			
			
			if (isset($vals['aggregate'])){
				
				$this->aggregate = $vals['aggregate'];
			}
			
			
			if (isset($vals['dimensionType'])){
				
				$this->dimensionType = $vals['dimensionType'];
			}
			
			
			if (isset($vals['positionType'])){
				
				$this->positionType = $vals['positionType'];
			}
			
			
			if (isset($vals['showValue'])){
				
				$this->showValue = $vals['showValue'];
			}
			
			
			if (isset($vals['fixed'])){
				
				$this->fixed = $vals['fixed'];
			}
			
			
			if (isset($vals['indicatorType'])){
				
				$this->indicatorType = $vals['indicatorType'];
			}
			
			
			if (isset($vals['expression'])){
				
				$this->expression = $vals['expression'];
			}
			
			
			if (isset($vals['warning'])){
				
				$this->warning = $vals['warning'];
			}
			
			
			if (isset($vals['distinguishLists'])){
				
				$this->distinguishLists = $vals['distinguishLists'];
			}
			
			
			if (isset($vals['authKeyList'])){
				
				$this->authKeyList = $vals['authKeyList'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BipDiagramFieldModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("fieldName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fieldName);
				
			}
			
			
			
			
			if ("fieldType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fieldType);
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
			}
			
			
			
			
			if ("format" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->format);
				
			}
			
			
			
			
			if ("aggregate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->aggregate);
				
			}
			
			
			
			
			if ("dimensionType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->dimensionType); 
				
			}
			
			
			
			
			if ("positionType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->positionType);
				
			}
			
			
			
			
			if ("showValue" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->showValue);
				
			}
			
			
			
			
			if ("fixed" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->fixed); 
				
			}
			
			
			
			
			if ("indicatorType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->indicatorType);
				
			}
			
			
			
			
			if ("expression" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expression);
				
			}
			
			
			
			
			if ("warning" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warning);
				
			}
			
			
			
			
			if ("distinguishLists" == $schemeField){
				
				$needSkip = false;
				
				$this->distinguishLists = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\bip\report\service\BipFieldWaringModel();
						$elem1->read($input);
						
						$this->distinguishLists[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("authKeyList" == $schemeField){
				
				$needSkip = false;
				
				$this->authKeyList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->authKeyList[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sort);
				
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
		
		if($this->fieldName !== null) {
			
			$xfer += $output->writeFieldBegin('fieldName');
			$xfer += $output->writeString($this->fieldName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fieldType !== null) {
			
			$xfer += $output->writeFieldBegin('fieldType');
			$xfer += $output->writeString($this->fieldType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->desc !== null) {
			
			$xfer += $output->writeFieldBegin('desc');
			$xfer += $output->writeString($this->desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->format !== null) {
			
			$xfer += $output->writeFieldBegin('format');
			$xfer += $output->writeString($this->format);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->aggregate !== null) {
			
			$xfer += $output->writeFieldBegin('aggregate');
			$xfer += $output->writeString($this->aggregate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dimensionType !== null) {
			
			$xfer += $output->writeFieldBegin('dimensionType');
			$xfer += $output->writeI32($this->dimensionType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->positionType !== null) {
			
			$xfer += $output->writeFieldBegin('positionType');
			$xfer += $output->writeString($this->positionType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->showValue !== null) {
			
			$xfer += $output->writeFieldBegin('showValue');
			$xfer += $output->writeBool($this->showValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fixed !== null) {
			
			$xfer += $output->writeFieldBegin('fixed');
			$xfer += $output->writeI32($this->fixed);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->indicatorType !== null) {
			
			$xfer += $output->writeFieldBegin('indicatorType');
			$xfer += $output->writeString($this->indicatorType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expression !== null) {
			
			$xfer += $output->writeFieldBegin('expression');
			$xfer += $output->writeString($this->expression);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warning !== null) {
			
			$xfer += $output->writeFieldBegin('warning');
			$xfer += $output->writeString($this->warning);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->distinguishLists !== null) {
			
			$xfer += $output->writeFieldBegin('distinguishLists');
			
			if (!is_array($this->distinguishLists)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->distinguishLists as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->authKeyList !== null) {
			
			$xfer += $output->writeFieldBegin('authKeyList');
			
			if (!is_array($this->authKeyList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->authKeyList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeString($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>