<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;

class PoInfo {
	
	static $_TSPEC;
	public $type = null;
	public $vendorCode = null;
	public $vendorId = null;
	public $vendorName = null;
	public $warehouse = null;
	public $brandName = null;
	public $buyer = null;
	public $buyerCode = null;
	public $createTime = null;
	public $lastModifiedTime = null;
	public $po = null;
	public $tradeModel = null;
	public $purchaseArea = null;
	public $purchaseAreaName = null;
	public $purchaseOffice = null;
	public $purchaseOfficeName = null;
	public $purchaseOffice1 = null;
	public $purchaseOffice1Name = null;
	public $purchaseOfficeDivide = null;
	public $purchaseOfficeDivideName = null;
	public $purchaseCompany = null;
	public $purchaseCompanyCode = null;
	public $generalTrade = null;
	public $originalPo = null;
	public $partyCountry = null;
	public $isVWarehouse = null;
	public $wmsWarehouse = null;
	public $createUser = null;
	public $brandCode = null;
	public $salesSite = null;
	public $bizType = null;
	public $owner = null;
	public $assignChannelCode = null;
	public $retMaintainSorelationStarttime = null;
	public $retSeperateByShopStarttime = null;
	public $followPoAssign = null;
	public $labelList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'vendorId'
			),
			4 => array(
			'var' => 'vendorName'
			),
			5 => array(
			'var' => 'warehouse'
			),
			6 => array(
			'var' => 'brandName'
			),
			7 => array(
			'var' => 'buyer'
			),
			8 => array(
			'var' => 'buyerCode'
			),
			9 => array(
			'var' => 'createTime'
			),
			10 => array(
			'var' => 'lastModifiedTime'
			),
			11 => array(
			'var' => 'po'
			),
			12 => array(
			'var' => 'tradeModel'
			),
			13 => array(
			'var' => 'purchaseArea'
			),
			14 => array(
			'var' => 'purchaseAreaName'
			),
			15 => array(
			'var' => 'purchaseOffice'
			),
			16 => array(
			'var' => 'purchaseOfficeName'
			),
			17 => array(
			'var' => 'purchaseOffice1'
			),
			18 => array(
			'var' => 'purchaseOffice1Name'
			),
			19 => array(
			'var' => 'purchaseOfficeDivide'
			),
			20 => array(
			'var' => 'purchaseOfficeDivideName'
			),
			21 => array(
			'var' => 'purchaseCompany'
			),
			22 => array(
			'var' => 'purchaseCompanyCode'
			),
			23 => array(
			'var' => 'generalTrade'
			),
			24 => array(
			'var' => 'originalPo'
			),
			25 => array(
			'var' => 'partyCountry'
			),
			26 => array(
			'var' => 'isVWarehouse'
			),
			27 => array(
			'var' => 'wmsWarehouse'
			),
			28 => array(
			'var' => 'createUser'
			),
			29 => array(
			'var' => 'brandCode'
			),
			30 => array(
			'var' => 'salesSite'
			),
			31 => array(
			'var' => 'bizType'
			),
			32 => array(
			'var' => 'owner'
			),
			33 => array(
			'var' => 'assignChannelCode'
			),
			34 => array(
			'var' => 'retMaintainSorelationStarttime'
			),
			35 => array(
			'var' => 'retSeperateByShopStarttime'
			),
			36 => array(
			'var' => 'followPoAssign'
			),
			37 => array(
			'var' => 'labelList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['buyerCode'])){
				
				$this->buyerCode = $vals['buyerCode'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['lastModifiedTime'])){
				
				$this->lastModifiedTime = $vals['lastModifiedTime'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['tradeModel'])){
				
				$this->tradeModel = $vals['tradeModel'];
			}
			
			
			if (isset($vals['purchaseArea'])){
				
				$this->purchaseArea = $vals['purchaseArea'];
			}
			
			
			if (isset($vals['purchaseAreaName'])){
				
				$this->purchaseAreaName = $vals['purchaseAreaName'];
			}
			
			
			if (isset($vals['purchaseOffice'])){
				
				$this->purchaseOffice = $vals['purchaseOffice'];
			}
			
			
			if (isset($vals['purchaseOfficeName'])){
				
				$this->purchaseOfficeName = $vals['purchaseOfficeName'];
			}
			
			
			if (isset($vals['purchaseOffice1'])){
				
				$this->purchaseOffice1 = $vals['purchaseOffice1'];
			}
			
			
			if (isset($vals['purchaseOffice1Name'])){
				
				$this->purchaseOffice1Name = $vals['purchaseOffice1Name'];
			}
			
			
			if (isset($vals['purchaseOfficeDivide'])){
				
				$this->purchaseOfficeDivide = $vals['purchaseOfficeDivide'];
			}
			
			
			if (isset($vals['purchaseOfficeDivideName'])){
				
				$this->purchaseOfficeDivideName = $vals['purchaseOfficeDivideName'];
			}
			
			
			if (isset($vals['purchaseCompany'])){
				
				$this->purchaseCompany = $vals['purchaseCompany'];
			}
			
			
			if (isset($vals['purchaseCompanyCode'])){
				
				$this->purchaseCompanyCode = $vals['purchaseCompanyCode'];
			}
			
			
			if (isset($vals['generalTrade'])){
				
				$this->generalTrade = $vals['generalTrade'];
			}
			
			
			if (isset($vals['originalPo'])){
				
				$this->originalPo = $vals['originalPo'];
			}
			
			
			if (isset($vals['partyCountry'])){
				
				$this->partyCountry = $vals['partyCountry'];
			}
			
			
			if (isset($vals['isVWarehouse'])){
				
				$this->isVWarehouse = $vals['isVWarehouse'];
			}
			
			
			if (isset($vals['wmsWarehouse'])){
				
				$this->wmsWarehouse = $vals['wmsWarehouse'];
			}
			
			
			if (isset($vals['createUser'])){
				
				$this->createUser = $vals['createUser'];
			}
			
			
			if (isset($vals['brandCode'])){
				
				$this->brandCode = $vals['brandCode'];
			}
			
			
			if (isset($vals['salesSite'])){
				
				$this->salesSite = $vals['salesSite'];
			}
			
			
			if (isset($vals['bizType'])){
				
				$this->bizType = $vals['bizType'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
			if (isset($vals['assignChannelCode'])){
				
				$this->assignChannelCode = $vals['assignChannelCode'];
			}
			
			
			if (isset($vals['retMaintainSorelationStarttime'])){
				
				$this->retMaintainSorelationStarttime = $vals['retMaintainSorelationStarttime'];
			}
			
			
			if (isset($vals['retSeperateByShopStarttime'])){
				
				$this->retSeperateByShopStarttime = $vals['retSeperateByShopStarttime'];
			}
			
			
			if (isset($vals['followPoAssign'])){
				
				$this->followPoAssign = $vals['followPoAssign'];
			}
			
			
			if (isset($vals['labelList'])){
				
				$this->labelList = $vals['labelList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("buyerCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerCode);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("lastModifiedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastModifiedTime); 
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("tradeModel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tradeModel);
				
			}
			
			
			
			
			if ("purchaseArea" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseArea);
				
			}
			
			
			
			
			if ("purchaseAreaName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseAreaName);
				
			}
			
			
			
			
			if ("purchaseOffice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOffice);
				
			}
			
			
			
			
			if ("purchaseOfficeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOfficeName);
				
			}
			
			
			
			
			if ("purchaseOffice1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOffice1);
				
			}
			
			
			
			
			if ("purchaseOffice1Name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOffice1Name);
				
			}
			
			
			
			
			if ("purchaseOfficeDivide" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOfficeDivide);
				
			}
			
			
			
			
			if ("purchaseOfficeDivideName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseOfficeDivideName);
				
			}
			
			
			
			
			if ("purchaseCompany" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCompany);
				
			}
			
			
			
			
			if ("purchaseCompanyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchaseCompanyCode);
				
			}
			
			
			
			
			if ("generalTrade" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->generalTrade);
				
			}
			
			
			
			
			if ("originalPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->originalPo);
				
			}
			
			
			
			
			if ("partyCountry" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->partyCountry);
				
			}
			
			
			
			
			if ("isVWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isVWarehouse); 
				
			}
			
			
			
			
			if ("wmsWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wmsWarehouse);
				
			}
			
			
			
			
			if ("createUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUser);
				
			}
			
			
			
			
			if ("brandCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCode);
				
			}
			
			
			
			
			if ("salesSite" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesSite);
				
			}
			
			
			
			
			if ("bizType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bizType);
				
			}
			
			
			
			
			if ("owner" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\venus\po\service\Owner::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->owner = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("assignChannelCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->assignChannelCode);
				
			}
			
			
			
			
			if ("retMaintainSorelationStarttime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->retMaintainSorelationStarttime);
				
			}
			
			
			
			
			if ("retSeperateByShopStarttime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->retSeperateByShopStarttime);
				
			}
			
			
			
			
			if ("followPoAssign" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->followPoAssign); 
				
			}
			
			
			
			
			if ("labelList" == $schemeField){
				
				$needSkip = false;
				
				$this->labelList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->labelList[$_size0++] = $elem0;
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
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerCode !== null) {
			
			$xfer += $output->writeFieldBegin('buyerCode');
			$xfer += $output->writeString($this->buyerCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastModifiedTime !== null) {
			
			$xfer += $output->writeFieldBegin('lastModifiedTime');
			$xfer += $output->writeI64($this->lastModifiedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tradeModel !== null) {
			
			$xfer += $output->writeFieldBegin('tradeModel');
			$xfer += $output->writeString($this->tradeModel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseArea !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseArea');
			$xfer += $output->writeString($this->purchaseArea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseAreaName !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseAreaName');
			$xfer += $output->writeString($this->purchaseAreaName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOffice !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOffice');
			$xfer += $output->writeString($this->purchaseOffice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOfficeName !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOfficeName');
			$xfer += $output->writeString($this->purchaseOfficeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOffice1 !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOffice1');
			$xfer += $output->writeString($this->purchaseOffice1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOffice1Name !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOffice1Name');
			$xfer += $output->writeString($this->purchaseOffice1Name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOfficeDivide !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOfficeDivide');
			$xfer += $output->writeString($this->purchaseOfficeDivide);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseOfficeDivideName !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseOfficeDivideName');
			$xfer += $output->writeString($this->purchaseOfficeDivideName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCompany !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCompany');
			$xfer += $output->writeString($this->purchaseCompany);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchaseCompanyCode !== null) {
			
			$xfer += $output->writeFieldBegin('purchaseCompanyCode');
			$xfer += $output->writeString($this->purchaseCompanyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->generalTrade !== null) {
			
			$xfer += $output->writeFieldBegin('generalTrade');
			$xfer += $output->writeString($this->generalTrade);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->originalPo !== null) {
			
			$xfer += $output->writeFieldBegin('originalPo');
			$xfer += $output->writeString($this->originalPo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->partyCountry !== null) {
			
			$xfer += $output->writeFieldBegin('partyCountry');
			$xfer += $output->writeString($this->partyCountry);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('isVWarehouse');
			$xfer += $output->writeI32($this->isVWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wmsWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('wmsWarehouse');
			$xfer += $output->writeString($this->wmsWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createUser !== null) {
			
			$xfer += $output->writeFieldBegin('createUser');
			$xfer += $output->writeString($this->createUser);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCode !== null) {
			
			$xfer += $output->writeFieldBegin('brandCode');
			$xfer += $output->writeString($this->brandCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->salesSite !== null) {
			
			$xfer += $output->writeFieldBegin('salesSite');
			$xfer += $output->writeString($this->salesSite);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizType !== null) {
			
			$xfer += $output->writeFieldBegin('bizType');
			$xfer += $output->writeString($this->bizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->owner !== null) {
			
			$xfer += $output->writeFieldBegin('owner');
			
			$em = new \com\vip\venus\po\service\Owner; 
			$output->writeString($em::$__names[$this->owner]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->assignChannelCode !== null) {
			
			$xfer += $output->writeFieldBegin('assignChannelCode');
			$xfer += $output->writeString($this->assignChannelCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retMaintainSorelationStarttime !== null) {
			
			$xfer += $output->writeFieldBegin('retMaintainSorelationStarttime');
			$xfer += $output->writeString($this->retMaintainSorelationStarttime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retSeperateByShopStarttime !== null) {
			
			$xfer += $output->writeFieldBegin('retSeperateByShopStarttime');
			$xfer += $output->writeString($this->retSeperateByShopStarttime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->followPoAssign !== null) {
			
			$xfer += $output->writeFieldBegin('followPoAssign');
			$xfer += $output->writeI32($this->followPoAssign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->labelList !== null) {
			
			$xfer += $output->writeFieldBegin('labelList');
			
			if (!is_array($this->labelList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->labelList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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