<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;

class PoInfos {
	
	static $_TSPEC;
	public $type = null;
	public $vendorCode = null;
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
	public $salesSite = null;
	public $poBizType = null;
	public $poBeginTime = null;
	public $poEndTime = null;
	public $buyerName = null;
	public $closeStatus = null;
	public $status = null;
	public $createUserName = null;
	public $createUserEmail = null;
	public $processType = null;
	public $toWarehouse = null;
	public $tallyWarehouse = null;
	public $followDept = null;
	public $owner = null;
	public $assignChannelCode = null;
	public $pdcVendorCode = null;
	public $storeGoodsStatus = null;
	public $expectSalesTime = null;
	public $releaseStoreGoodsTime = null;
	public $receiveQtyTotal = null;
	public $disabledLevel = null;
	public $currency = null;
	public $rateDate = null;
	public $conversionCnyRate = null;
	public $expectedArrivalDate = null;
	public $estimateOnshelfTime = null;
	public $crossDocking = null;
	public $additionalTag = null;
	public $isStoreDelivery = null;
	public $followPoAssign = null;
	public $wmsWarehouseName = null;
	public $isExceedPo = null;
	public $brandAdminName = null;
	public $brandAdminUserEmail = null;
	public $relatedPo = null;
	public $labelList = null;
	public $poDeliveryType = null;
	
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
			'var' => 'vendorName'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'brandName'
			),
			6 => array(
			'var' => 'buyer'
			),
			7 => array(
			'var' => 'buyerCode'
			),
			8 => array(
			'var' => 'createTime'
			),
			9 => array(
			'var' => 'lastModifiedTime'
			),
			10 => array(
			'var' => 'po'
			),
			11 => array(
			'var' => 'tradeModel'
			),
			12 => array(
			'var' => 'purchaseArea'
			),
			13 => array(
			'var' => 'purchaseAreaName'
			),
			14 => array(
			'var' => 'purchaseOffice'
			),
			15 => array(
			'var' => 'purchaseOfficeName'
			),
			16 => array(
			'var' => 'purchaseOffice1'
			),
			17 => array(
			'var' => 'purchaseOffice1Name'
			),
			18 => array(
			'var' => 'purchaseOfficeDivide'
			),
			19 => array(
			'var' => 'purchaseOfficeDivideName'
			),
			20 => array(
			'var' => 'purchaseCompany'
			),
			21 => array(
			'var' => 'purchaseCompanyCode'
			),
			22 => array(
			'var' => 'generalTrade'
			),
			23 => array(
			'var' => 'originalPo'
			),
			24 => array(
			'var' => 'partyCountry'
			),
			25 => array(
			'var' => 'isVWarehouse'
			),
			26 => array(
			'var' => 'wmsWarehouse'
			),
			27 => array(
			'var' => 'createUser'
			),
			28 => array(
			'var' => 'salesSite'
			),
			29 => array(
			'var' => 'poBizType'
			),
			30 => array(
			'var' => 'poBeginTime'
			),
			31 => array(
			'var' => 'poEndTime'
			),
			32 => array(
			'var' => 'buyerName'
			),
			33 => array(
			'var' => 'closeStatus'
			),
			34 => array(
			'var' => 'status'
			),
			35 => array(
			'var' => 'createUserName'
			),
			36 => array(
			'var' => 'createUserEmail'
			),
			37 => array(
			'var' => 'processType'
			),
			38 => array(
			'var' => 'toWarehouse'
			),
			39 => array(
			'var' => 'tallyWarehouse'
			),
			40 => array(
			'var' => 'followDept'
			),
			41 => array(
			'var' => 'owner'
			),
			42 => array(
			'var' => 'assignChannelCode'
			),
			43 => array(
			'var' => 'pdcVendorCode'
			),
			44 => array(
			'var' => 'storeGoodsStatus'
			),
			45 => array(
			'var' => 'expectSalesTime'
			),
			46 => array(
			'var' => 'releaseStoreGoodsTime'
			),
			47 => array(
			'var' => 'receiveQtyTotal'
			),
			48 => array(
			'var' => 'disabledLevel'
			),
			49 => array(
			'var' => 'currency'
			),
			50 => array(
			'var' => 'rateDate'
			),
			51 => array(
			'var' => 'conversionCnyRate'
			),
			52 => array(
			'var' => 'expectedArrivalDate'
			),
			53 => array(
			'var' => 'estimateOnshelfTime'
			),
			54 => array(
			'var' => 'crossDocking'
			),
			55 => array(
			'var' => 'additionalTag'
			),
			56 => array(
			'var' => 'isStoreDelivery'
			),
			57 => array(
			'var' => 'followPoAssign'
			),
			58 => array(
			'var' => 'wmsWarehouseName'
			),
			59 => array(
			'var' => 'isExceedPo'
			),
			60 => array(
			'var' => 'brandAdminName'
			),
			61 => array(
			'var' => 'brandAdminUserEmail'
			),
			62 => array(
			'var' => 'relatedPo'
			),
			63 => array(
			'var' => 'labelList'
			),
			64 => array(
			'var' => 'poDeliveryType'
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
			
			
			if (isset($vals['salesSite'])){
				
				$this->salesSite = $vals['salesSite'];
			}
			
			
			if (isset($vals['poBizType'])){
				
				$this->poBizType = $vals['poBizType'];
			}
			
			
			if (isset($vals['poBeginTime'])){
				
				$this->poBeginTime = $vals['poBeginTime'];
			}
			
			
			if (isset($vals['poEndTime'])){
				
				$this->poEndTime = $vals['poEndTime'];
			}
			
			
			if (isset($vals['buyerName'])){
				
				$this->buyerName = $vals['buyerName'];
			}
			
			
			if (isset($vals['closeStatus'])){
				
				$this->closeStatus = $vals['closeStatus'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['createUserName'])){
				
				$this->createUserName = $vals['createUserName'];
			}
			
			
			if (isset($vals['createUserEmail'])){
				
				$this->createUserEmail = $vals['createUserEmail'];
			}
			
			
			if (isset($vals['processType'])){
				
				$this->processType = $vals['processType'];
			}
			
			
			if (isset($vals['toWarehouse'])){
				
				$this->toWarehouse = $vals['toWarehouse'];
			}
			
			
			if (isset($vals['tallyWarehouse'])){
				
				$this->tallyWarehouse = $vals['tallyWarehouse'];
			}
			
			
			if (isset($vals['followDept'])){
				
				$this->followDept = $vals['followDept'];
			}
			
			
			if (isset($vals['owner'])){
				
				$this->owner = $vals['owner'];
			}
			
			
			if (isset($vals['assignChannelCode'])){
				
				$this->assignChannelCode = $vals['assignChannelCode'];
			}
			
			
			if (isset($vals['pdcVendorCode'])){
				
				$this->pdcVendorCode = $vals['pdcVendorCode'];
			}
			
			
			if (isset($vals['storeGoodsStatus'])){
				
				$this->storeGoodsStatus = $vals['storeGoodsStatus'];
			}
			
			
			if (isset($vals['expectSalesTime'])){
				
				$this->expectSalesTime = $vals['expectSalesTime'];
			}
			
			
			if (isset($vals['releaseStoreGoodsTime'])){
				
				$this->releaseStoreGoodsTime = $vals['releaseStoreGoodsTime'];
			}
			
			
			if (isset($vals['receiveQtyTotal'])){
				
				$this->receiveQtyTotal = $vals['receiveQtyTotal'];
			}
			
			
			if (isset($vals['disabledLevel'])){
				
				$this->disabledLevel = $vals['disabledLevel'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['rateDate'])){
				
				$this->rateDate = $vals['rateDate'];
			}
			
			
			if (isset($vals['conversionCnyRate'])){
				
				$this->conversionCnyRate = $vals['conversionCnyRate'];
			}
			
			
			if (isset($vals['expectedArrivalDate'])){
				
				$this->expectedArrivalDate = $vals['expectedArrivalDate'];
			}
			
			
			if (isset($vals['estimateOnshelfTime'])){
				
				$this->estimateOnshelfTime = $vals['estimateOnshelfTime'];
			}
			
			
			if (isset($vals['crossDocking'])){
				
				$this->crossDocking = $vals['crossDocking'];
			}
			
			
			if (isset($vals['additionalTag'])){
				
				$this->additionalTag = $vals['additionalTag'];
			}
			
			
			if (isset($vals['isStoreDelivery'])){
				
				$this->isStoreDelivery = $vals['isStoreDelivery'];
			}
			
			
			if (isset($vals['followPoAssign'])){
				
				$this->followPoAssign = $vals['followPoAssign'];
			}
			
			
			if (isset($vals['wmsWarehouseName'])){
				
				$this->wmsWarehouseName = $vals['wmsWarehouseName'];
			}
			
			
			if (isset($vals['isExceedPo'])){
				
				$this->isExceedPo = $vals['isExceedPo'];
			}
			
			
			if (isset($vals['brandAdminName'])){
				
				$this->brandAdminName = $vals['brandAdminName'];
			}
			
			
			if (isset($vals['brandAdminUserEmail'])){
				
				$this->brandAdminUserEmail = $vals['brandAdminUserEmail'];
			}
			
			
			if (isset($vals['relatedPo'])){
				
				$this->relatedPo = $vals['relatedPo'];
			}
			
			
			if (isset($vals['labelList'])){
				
				$this->labelList = $vals['labelList'];
			}
			
			
			if (isset($vals['poDeliveryType'])){
				
				$this->poDeliveryType = $vals['poDeliveryType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoInfos';
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
			
			
			
			
			if ("salesSite" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->salesSite);
				
			}
			
			
			
			
			if ("poBizType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poBizType);
				
			}
			
			
			
			
			if ("poBeginTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poBeginTime);
				
			}
			
			
			
			
			if ("poEndTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->poEndTime); 
				
			}
			
			
			
			
			if ("buyerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerName);
				
			}
			
			
			
			
			if ("closeStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->closeStatus); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("createUserName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUserName);
				
			}
			
			
			
			
			if ("createUserEmail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUserEmail);
				
			}
			
			
			
			
			if ("processType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processType);
				
			}
			
			
			
			
			if ("toWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->toWarehouse);
				
			}
			
			
			
			
			if ("tallyWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tallyWarehouse);
				
			}
			
			
			
			
			if ("followDept" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->followDept);
				
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
			
			
			
			
			if ("pdcVendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pdcVendorCode);
				
			}
			
			
			
			
			if ("storeGoodsStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->storeGoodsStatus); 
				
			}
			
			
			
			
			if ("expectSalesTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->expectSalesTime); 
				
			}
			
			
			
			
			if ("releaseStoreGoodsTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->releaseStoreGoodsTime); 
				
			}
			
			
			
			
			if ("receiveQtyTotal" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->receiveQtyTotal); 
				
			}
			
			
			
			
			if ("disabledLevel" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->disabledLevel); 
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("rateDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rateDate);
				
			}
			
			
			
			
			if ("conversionCnyRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->conversionCnyRate);
				
			}
			
			
			
			
			if ("expectedArrivalDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expectedArrivalDate);
				
			}
			
			
			
			
			if ("estimateOnshelfTime" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->estimateOnshelfTime);
				
			}
			
			
			
			
			if ("crossDocking" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->crossDocking); 
				
			}
			
			
			
			
			if ("additionalTag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->additionalTag); 
				
			}
			
			
			
			
			if ("isStoreDelivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isStoreDelivery); 
				
			}
			
			
			
			
			if ("followPoAssign" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->followPoAssign); 
				
			}
			
			
			
			
			if ("wmsWarehouseName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wmsWarehouseName);
				
			}
			
			
			
			
			if ("isExceedPo" == $schemeField){
				
				$needSkip = false;
				$input->readBool($this->isExceedPo);
				
			}
			
			
			
			
			if ("brandAdminName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminName);
				
			}
			
			
			
			
			if ("brandAdminUserEmail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandAdminUserEmail);
				
			}
			
			
			
			
			if ("relatedPo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->relatedPo);
				
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
			
			
			
			
			if ("poDeliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->poDeliveryType); 
				
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
		
		
		if($this->salesSite !== null) {
			
			$xfer += $output->writeFieldBegin('salesSite');
			$xfer += $output->writeString($this->salesSite);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poBizType !== null) {
			
			$xfer += $output->writeFieldBegin('poBizType');
			$xfer += $output->writeString($this->poBizType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poBeginTime !== null) {
			
			$xfer += $output->writeFieldBegin('poBeginTime');
			$xfer += $output->writeString($this->poBeginTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poEndTime !== null) {
			
			$xfer += $output->writeFieldBegin('poEndTime');
			$xfer += $output->writeI64($this->poEndTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerName !== null) {
			
			$xfer += $output->writeFieldBegin('buyerName');
			$xfer += $output->writeString($this->buyerName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->closeStatus !== null) {
			
			$xfer += $output->writeFieldBegin('closeStatus');
			$xfer += $output->writeI32($this->closeStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createUserName !== null) {
			
			$xfer += $output->writeFieldBegin('createUserName');
			$xfer += $output->writeString($this->createUserName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createUserEmail !== null) {
			
			$xfer += $output->writeFieldBegin('createUserEmail');
			$xfer += $output->writeString($this->createUserEmail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processType !== null) {
			
			$xfer += $output->writeFieldBegin('processType');
			$xfer += $output->writeString($this->processType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->toWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('toWarehouse');
			$xfer += $output->writeString($this->toWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tallyWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('tallyWarehouse');
			$xfer += $output->writeString($this->tallyWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->followDept !== null) {
			
			$xfer += $output->writeFieldBegin('followDept');
			$xfer += $output->writeString($this->followDept);
			
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
		
		
		if($this->pdcVendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('pdcVendorCode');
			$xfer += $output->writeString($this->pdcVendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storeGoodsStatus !== null) {
			
			$xfer += $output->writeFieldBegin('storeGoodsStatus');
			$xfer += $output->writeByte($this->storeGoodsStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expectSalesTime !== null) {
			
			$xfer += $output->writeFieldBegin('expectSalesTime');
			$xfer += $output->writeI64($this->expectSalesTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->releaseStoreGoodsTime !== null) {
			
			$xfer += $output->writeFieldBegin('releaseStoreGoodsTime');
			$xfer += $output->writeI64($this->releaseStoreGoodsTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiveQtyTotal !== null) {
			
			$xfer += $output->writeFieldBegin('receiveQtyTotal');
			$xfer += $output->writeI32($this->receiveQtyTotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->disabledLevel !== null) {
			
			$xfer += $output->writeFieldBegin('disabledLevel');
			$xfer += $output->writeByte($this->disabledLevel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rateDate !== null) {
			
			$xfer += $output->writeFieldBegin('rateDate');
			$xfer += $output->writeString($this->rateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->conversionCnyRate !== null) {
			
			$xfer += $output->writeFieldBegin('conversionCnyRate');
			$xfer += $output->writeDouble($this->conversionCnyRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expectedArrivalDate !== null) {
			
			$xfer += $output->writeFieldBegin('expectedArrivalDate');
			$xfer += $output->writeString($this->expectedArrivalDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->estimateOnshelfTime !== null) {
			
			$xfer += $output->writeFieldBegin('estimateOnshelfTime');
			$xfer += $output->writeString($this->estimateOnshelfTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->crossDocking !== null) {
			
			$xfer += $output->writeFieldBegin('crossDocking');
			$xfer += $output->writeByte($this->crossDocking);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->additionalTag !== null) {
			
			$xfer += $output->writeFieldBegin('additionalTag');
			$xfer += $output->writeI32($this->additionalTag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isStoreDelivery !== null) {
			
			$xfer += $output->writeFieldBegin('isStoreDelivery');
			$xfer += $output->writeI32($this->isStoreDelivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->followPoAssign !== null) {
			
			$xfer += $output->writeFieldBegin('followPoAssign');
			$xfer += $output->writeI32($this->followPoAssign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wmsWarehouseName !== null) {
			
			$xfer += $output->writeFieldBegin('wmsWarehouseName');
			$xfer += $output->writeString($this->wmsWarehouseName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('isExceedPo');
		$xfer += $output->writeBool($this->isExceedPo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brandAdminName !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminName');
			$xfer += $output->writeString($this->brandAdminName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandAdminUserEmail !== null) {
			
			$xfer += $output->writeFieldBegin('brandAdminUserEmail');
			$xfer += $output->writeString($this->brandAdminUserEmail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->relatedPo !== null) {
			
			$xfer += $output->writeFieldBegin('relatedPo');
			$xfer += $output->writeString($this->relatedPo);
			
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
		
		
		if($this->poDeliveryType !== null) {
			
			$xfer += $output->writeFieldBegin('poDeliveryType');
			$xfer += $output->writeByte($this->poDeliveryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>