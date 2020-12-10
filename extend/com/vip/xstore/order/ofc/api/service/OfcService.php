<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\service;
interface OfcServiceIf{
	
	
	public function addAsynCmdRetry(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOrInsertAsynCmdRetryReq $req);
	
	public function addOfcSyncData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\AddOfcSyncDataReq $req);
	
	public function convertInfErpOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\ConvertInfErpOrderReq $req);
	
	public function convertInfOutletsOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\ConvertInfOutletsOrderReq $req);
	
	public function deliverOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\DeliverOrderReq $req);
	
	public function ebsResend(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\EbsResendReq $req);
	
	public function fixOrderPayType(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\FixOrderPayTypeReq $req);
	
	public function getAsynCmdRetry(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetAsynCmdRetryByIdReq $req);
	
	public function getInfErpOrderCount(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfErpOrderCountReq $req);
	
	public function getInfErpOrderList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfErpOrderListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter);
	
	public function getInfOnlineInAfterSaleList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfOnlineInAfterSaleListReq $req);
	
	public function getInfOnlineInPreSaleList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfOnlineInPreSaleListReq $req);
	
	public function getOfcSyncAfterSaleDataList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetOfcSyncAfterSaleDataListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter);
	
	public function getOfcSyncPreSaleDataList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetOfcSyncPreSaleDataListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter);
	
	public function getPjbestOrderTaskStatus(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetPjbestOrderTaskStatusReq $req);
	
	public function getShouldResendEbsData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetShouldResendEbsDataReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter);
	
	public function getUnprocAsynCmdRetryList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetUnprocAsynCmdRetryListReq $req);
	
	public function getUnprocInfErpOrderList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetUnprocInfErpOrderListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter);
	
	public function getUnprocInfOutletsOrderList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetUnprocInfOutletsOrderListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter);
	
	public function healthCheck();
	
	public function inpackReturn(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\InpackReturnReq $req);
	
	public function modifyTransportNo(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\ModifyTransportNoReq $req);
	
	public function ofcSyncAfterSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\OfcSyncAfterSaleDataReq $req);
	
	public function ofcSyncPreSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\OfcSyncPreSaleDataReq $req);
	
	public function pickingUpOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\PickingUpOrderReq $req);
	
	public function secondPickingUpOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SecondPickingUpOrderReq $req);
	
	public function simsResend(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SimsResendReq $req);
	
	public function syncInfOutletsOrderInfo(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SyncInfOutletsOrderInfoReq $req);
	
	public function syncOnlineAfterSaleOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SyncOnlineAfterSaleOrderReq $req);
	
	public function syncOnlinePreSaleOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SyncOnlinePreSaleOrderReq $req);
	
	public function syncTmsTransportTrack(\com\vip\xstore\order\ofc\api\request\TrackPushMsg $msg);
	
	public function updateAsynCmdRetry(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOrInsertAsynCmdRetryReq $req);
	
	public function updateInfErpMRetail(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfErpMRetailConditionsReq $conditionReq,\com\vip\xstore\order\ofc\api\request\UpdateInfErpMRetailValuesReq $valuesReq);
	
	public function updateInfOnlineInAfterSale(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfOnlineInAfterSaleReq $req);
	
	public function updateInfOnlineInPreSale(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfOnlineInPreSaleReq $req);
	
	public function updateInfOutletsOrders(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfOutletsOrdersConditionsReq $conditionReq,\com\vip\xstore\order\ofc\api\request\UpdateInfOutletsOrdersValuesReq $valuesReq);
	
	public function updateOfcSyncAfterSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOfcSyncAfterSaleDataReq $req);
	
	public function updateOfcSyncPreSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOfcSyncPreSaleDataReq $req);
	
}

class _OfcServiceClient extends \Osp\Base\OspStub implements \com\vip\xstore\order\ofc\api\service\OfcServiceIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.xstore.order.ofc.api.service.OfcService", "1.0.7");
	}
	
	
	public function addAsynCmdRetry(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOrInsertAsynCmdRetryReq $req){
		
		$this->send_addAsynCmdRetry( $header, $req);
		return $this->recv_addAsynCmdRetry();
	}
	
	public function send_addAsynCmdRetry(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOrInsertAsynCmdRetryReq $req){
		
		$this->initInvocation("addAsynCmdRetry");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_addAsynCmdRetry_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_addAsynCmdRetry(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_addAsynCmdRetry_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function addOfcSyncData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\AddOfcSyncDataReq $req){
		
		$this->send_addOfcSyncData( $header, $req);
		return $this->recv_addOfcSyncData();
	}
	
	public function send_addOfcSyncData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\AddOfcSyncDataReq $req){
		
		$this->initInvocation("addOfcSyncData");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_addOfcSyncData_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_addOfcSyncData(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_addOfcSyncData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function convertInfErpOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\ConvertInfErpOrderReq $req){
		
		$this->send_convertInfErpOrder( $header, $req);
		return $this->recv_convertInfErpOrder();
	}
	
	public function send_convertInfErpOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\ConvertInfErpOrderReq $req){
		
		$this->initInvocation("convertInfErpOrder");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_convertInfErpOrder_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_convertInfErpOrder(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_convertInfErpOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function convertInfOutletsOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\ConvertInfOutletsOrderReq $req){
		
		$this->send_convertInfOutletsOrder( $header, $req);
		return $this->recv_convertInfOutletsOrder();
	}
	
	public function send_convertInfOutletsOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\ConvertInfOutletsOrderReq $req){
		
		$this->initInvocation("convertInfOutletsOrder");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_convertInfOutletsOrder_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_convertInfOutletsOrder(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_convertInfOutletsOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function deliverOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\DeliverOrderReq $req){
		
		$this->send_deliverOrder( $header, $req);
		return $this->recv_deliverOrder();
	}
	
	public function send_deliverOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\DeliverOrderReq $req){
		
		$this->initInvocation("deliverOrder");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_deliverOrder_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_deliverOrder(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_deliverOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function ebsResend(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\EbsResendReq $req){
		
		$this->send_ebsResend( $header, $req);
		return $this->recv_ebsResend();
	}
	
	public function send_ebsResend(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\EbsResendReq $req){
		
		$this->initInvocation("ebsResend");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_ebsResend_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_ebsResend(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_ebsResend_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function fixOrderPayType(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\FixOrderPayTypeReq $req){
		
		$this->send_fixOrderPayType( $header, $req);
		return $this->recv_fixOrderPayType();
	}
	
	public function send_fixOrderPayType(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\FixOrderPayTypeReq $req){
		
		$this->initInvocation("fixOrderPayType");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_fixOrderPayType_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_fixOrderPayType(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_fixOrderPayType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAsynCmdRetry(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetAsynCmdRetryByIdReq $req){
		
		$this->send_getAsynCmdRetry( $header, $req);
		return $this->recv_getAsynCmdRetry();
	}
	
	public function send_getAsynCmdRetry(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetAsynCmdRetryByIdReq $req){
		
		$this->initInvocation("getAsynCmdRetry");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getAsynCmdRetry_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getAsynCmdRetry(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getAsynCmdRetry_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInfErpOrderCount(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfErpOrderCountReq $req){
		
		$this->send_getInfErpOrderCount( $header, $req);
		return $this->recv_getInfErpOrderCount();
	}
	
	public function send_getInfErpOrderCount(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfErpOrderCountReq $req){
		
		$this->initInvocation("getInfErpOrderCount");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getInfErpOrderCount_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getInfErpOrderCount(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getInfErpOrderCount_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInfErpOrderList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfErpOrderListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->send_getInfErpOrderList( $header, $req, $filter);
		return $this->recv_getInfErpOrderList();
	}
	
	public function send_getInfErpOrderList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfErpOrderListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->initInvocation("getInfErpOrderList");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getInfErpOrderList_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$args->filter = $filter;
		
		$this->send_base($args);
	}
	
	public function recv_getInfErpOrderList(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getInfErpOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInfOnlineInAfterSaleList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfOnlineInAfterSaleListReq $req){
		
		$this->send_getInfOnlineInAfterSaleList( $header, $req);
		return $this->recv_getInfOnlineInAfterSaleList();
	}
	
	public function send_getInfOnlineInAfterSaleList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfOnlineInAfterSaleListReq $req){
		
		$this->initInvocation("getInfOnlineInAfterSaleList");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getInfOnlineInAfterSaleList_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getInfOnlineInAfterSaleList(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getInfOnlineInAfterSaleList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getInfOnlineInPreSaleList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfOnlineInPreSaleListReq $req){
		
		$this->send_getInfOnlineInPreSaleList( $header, $req);
		return $this->recv_getInfOnlineInPreSaleList();
	}
	
	public function send_getInfOnlineInPreSaleList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetInfOnlineInPreSaleListReq $req){
		
		$this->initInvocation("getInfOnlineInPreSaleList");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getInfOnlineInPreSaleList_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getInfOnlineInPreSaleList(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getInfOnlineInPreSaleList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOfcSyncAfterSaleDataList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetOfcSyncAfterSaleDataListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->send_getOfcSyncAfterSaleDataList( $header, $req, $filter);
		return $this->recv_getOfcSyncAfterSaleDataList();
	}
	
	public function send_getOfcSyncAfterSaleDataList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetOfcSyncAfterSaleDataListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->initInvocation("getOfcSyncAfterSaleDataList");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getOfcSyncAfterSaleDataList_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$args->filter = $filter;
		
		$this->send_base($args);
	}
	
	public function recv_getOfcSyncAfterSaleDataList(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getOfcSyncAfterSaleDataList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getOfcSyncPreSaleDataList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetOfcSyncPreSaleDataListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->send_getOfcSyncPreSaleDataList( $header, $req, $filter);
		return $this->recv_getOfcSyncPreSaleDataList();
	}
	
	public function send_getOfcSyncPreSaleDataList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetOfcSyncPreSaleDataListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->initInvocation("getOfcSyncPreSaleDataList");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getOfcSyncPreSaleDataList_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$args->filter = $filter;
		
		$this->send_base($args);
	}
	
	public function recv_getOfcSyncPreSaleDataList(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getOfcSyncPreSaleDataList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPjbestOrderTaskStatus(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetPjbestOrderTaskStatusReq $req){
		
		$this->send_getPjbestOrderTaskStatus( $header, $req);
		return $this->recv_getPjbestOrderTaskStatus();
	}
	
	public function send_getPjbestOrderTaskStatus(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetPjbestOrderTaskStatusReq $req){
		
		$this->initInvocation("getPjbestOrderTaskStatus");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getPjbestOrderTaskStatus_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getPjbestOrderTaskStatus(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getPjbestOrderTaskStatus_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getShouldResendEbsData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetShouldResendEbsDataReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->send_getShouldResendEbsData( $header, $req, $filter);
		return $this->recv_getShouldResendEbsData();
	}
	
	public function send_getShouldResendEbsData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetShouldResendEbsDataReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->initInvocation("getShouldResendEbsData");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getShouldResendEbsData_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$args->filter = $filter;
		
		$this->send_base($args);
	}
	
	public function recv_getShouldResendEbsData(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getShouldResendEbsData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUnprocAsynCmdRetryList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetUnprocAsynCmdRetryListReq $req){
		
		$this->send_getUnprocAsynCmdRetryList( $header, $req);
		return $this->recv_getUnprocAsynCmdRetryList();
	}
	
	public function send_getUnprocAsynCmdRetryList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetUnprocAsynCmdRetryListReq $req){
		
		$this->initInvocation("getUnprocAsynCmdRetryList");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getUnprocAsynCmdRetryList_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_getUnprocAsynCmdRetryList(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getUnprocAsynCmdRetryList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUnprocInfErpOrderList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetUnprocInfErpOrderListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->send_getUnprocInfErpOrderList( $header, $req, $filter);
		return $this->recv_getUnprocInfErpOrderList();
	}
	
	public function send_getUnprocInfErpOrderList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetUnprocInfErpOrderListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->initInvocation("getUnprocInfErpOrderList");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getUnprocInfErpOrderList_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$args->filter = $filter;
		
		$this->send_base($args);
	}
	
	public function recv_getUnprocInfErpOrderList(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getUnprocInfErpOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUnprocInfOutletsOrderList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetUnprocInfOutletsOrderListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->send_getUnprocInfOutletsOrderList( $header, $req, $filter);
		return $this->recv_getUnprocInfOutletsOrderList();
	}
	
	public function send_getUnprocInfOutletsOrderList(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\GetUnprocInfOutletsOrderListReq $req,\com\vip\xstore\order\common\pojo\vo\ResultFilter $filter){
		
		$this->initInvocation("getUnprocInfOutletsOrderList");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_getUnprocInfOutletsOrderList_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$args->filter = $filter;
		
		$this->send_base($args);
	}
	
	public function recv_getUnprocInfOutletsOrderList(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_getUnprocInfOutletsOrderList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function inpackReturn(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\InpackReturnReq $req){
		
		$this->send_inpackReturn( $header, $req);
		return $this->recv_inpackReturn();
	}
	
	public function send_inpackReturn(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\InpackReturnReq $req){
		
		$this->initInvocation("inpackReturn");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_inpackReturn_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_inpackReturn(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_inpackReturn_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function modifyTransportNo(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\ModifyTransportNoReq $req){
		
		$this->send_modifyTransportNo( $header, $req);
		return $this->recv_modifyTransportNo();
	}
	
	public function send_modifyTransportNo(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\ModifyTransportNoReq $req){
		
		$this->initInvocation("modifyTransportNo");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_modifyTransportNo_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_modifyTransportNo(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_modifyTransportNo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function ofcSyncAfterSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\OfcSyncAfterSaleDataReq $req){
		
		$this->send_ofcSyncAfterSaleData( $header, $req);
		return $this->recv_ofcSyncAfterSaleData();
	}
	
	public function send_ofcSyncAfterSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\OfcSyncAfterSaleDataReq $req){
		
		$this->initInvocation("ofcSyncAfterSaleData");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_ofcSyncAfterSaleData_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_ofcSyncAfterSaleData(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_ofcSyncAfterSaleData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function ofcSyncPreSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\OfcSyncPreSaleDataReq $req){
		
		$this->send_ofcSyncPreSaleData( $header, $req);
		return $this->recv_ofcSyncPreSaleData();
	}
	
	public function send_ofcSyncPreSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\OfcSyncPreSaleDataReq $req){
		
		$this->initInvocation("ofcSyncPreSaleData");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_ofcSyncPreSaleData_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_ofcSyncPreSaleData(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_ofcSyncPreSaleData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function pickingUpOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\PickingUpOrderReq $req){
		
		$this->send_pickingUpOrder( $header, $req);
		return $this->recv_pickingUpOrder();
	}
	
	public function send_pickingUpOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\PickingUpOrderReq $req){
		
		$this->initInvocation("pickingUpOrder");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_pickingUpOrder_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_pickingUpOrder(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_pickingUpOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function secondPickingUpOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SecondPickingUpOrderReq $req){
		
		$this->send_secondPickingUpOrder( $header, $req);
		return $this->recv_secondPickingUpOrder();
	}
	
	public function send_secondPickingUpOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SecondPickingUpOrderReq $req){
		
		$this->initInvocation("secondPickingUpOrder");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_secondPickingUpOrder_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_secondPickingUpOrder(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_secondPickingUpOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function simsResend(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SimsResendReq $req){
		
		$this->send_simsResend( $header, $req);
		return $this->recv_simsResend();
	}
	
	public function send_simsResend(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SimsResendReq $req){
		
		$this->initInvocation("simsResend");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_simsResend_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_simsResend(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_simsResend_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncInfOutletsOrderInfo(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SyncInfOutletsOrderInfoReq $req){
		
		$this->send_syncInfOutletsOrderInfo( $header, $req);
		return $this->recv_syncInfOutletsOrderInfo();
	}
	
	public function send_syncInfOutletsOrderInfo(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SyncInfOutletsOrderInfoReq $req){
		
		$this->initInvocation("syncInfOutletsOrderInfo");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_syncInfOutletsOrderInfo_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_syncInfOutletsOrderInfo(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_syncInfOutletsOrderInfo_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncOnlineAfterSaleOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SyncOnlineAfterSaleOrderReq $req){
		
		$this->send_syncOnlineAfterSaleOrder( $header, $req);
		return $this->recv_syncOnlineAfterSaleOrder();
	}
	
	public function send_syncOnlineAfterSaleOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SyncOnlineAfterSaleOrderReq $req){
		
		$this->initInvocation("syncOnlineAfterSaleOrder");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_syncOnlineAfterSaleOrder_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_syncOnlineAfterSaleOrder(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_syncOnlineAfterSaleOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncOnlinePreSaleOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SyncOnlinePreSaleOrderReq $req){
		
		$this->send_syncOnlinePreSaleOrder( $header, $req);
		return $this->recv_syncOnlinePreSaleOrder();
	}
	
	public function send_syncOnlinePreSaleOrder(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\SyncOnlinePreSaleOrderReq $req){
		
		$this->initInvocation("syncOnlinePreSaleOrder");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_syncOnlinePreSaleOrder_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_syncOnlinePreSaleOrder(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_syncOnlinePreSaleOrder_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function syncTmsTransportTrack(\com\vip\xstore\order\ofc\api\request\TrackPushMsg $msg){
		
		$this->send_syncTmsTransportTrack( $msg);
		return $this->recv_syncTmsTransportTrack();
	}
	
	public function send_syncTmsTransportTrack(\com\vip\xstore\order\ofc\api\request\TrackPushMsg $msg){
		
		$this->initInvocation("syncTmsTransportTrack");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_syncTmsTransportTrack_args();
		
		$args->msg = $msg;
		
		$this->send_base($args);
	}
	
	public function recv_syncTmsTransportTrack(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_syncTmsTransportTrack_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateAsynCmdRetry(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOrInsertAsynCmdRetryReq $req){
		
		$this->send_updateAsynCmdRetry( $header, $req);
		return $this->recv_updateAsynCmdRetry();
	}
	
	public function send_updateAsynCmdRetry(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOrInsertAsynCmdRetryReq $req){
		
		$this->initInvocation("updateAsynCmdRetry");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_updateAsynCmdRetry_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_updateAsynCmdRetry(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_updateAsynCmdRetry_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateInfErpMRetail(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfErpMRetailConditionsReq $conditionReq,\com\vip\xstore\order\ofc\api\request\UpdateInfErpMRetailValuesReq $valuesReq){
		
		$this->send_updateInfErpMRetail( $header, $conditionReq, $valuesReq);
		return $this->recv_updateInfErpMRetail();
	}
	
	public function send_updateInfErpMRetail(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfErpMRetailConditionsReq $conditionReq,\com\vip\xstore\order\ofc\api\request\UpdateInfErpMRetailValuesReq $valuesReq){
		
		$this->initInvocation("updateInfErpMRetail");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_updateInfErpMRetail_args();
		
		$args->header = $header;
		
		$args->conditionReq = $conditionReq;
		
		$args->valuesReq = $valuesReq;
		
		$this->send_base($args);
	}
	
	public function recv_updateInfErpMRetail(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_updateInfErpMRetail_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateInfOnlineInAfterSale(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfOnlineInAfterSaleReq $req){
		
		$this->send_updateInfOnlineInAfterSale( $header, $req);
		return $this->recv_updateInfOnlineInAfterSale();
	}
	
	public function send_updateInfOnlineInAfterSale(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfOnlineInAfterSaleReq $req){
		
		$this->initInvocation("updateInfOnlineInAfterSale");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_updateInfOnlineInAfterSale_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_updateInfOnlineInAfterSale(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_updateInfOnlineInAfterSale_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateInfOnlineInPreSale(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfOnlineInPreSaleReq $req){
		
		$this->send_updateInfOnlineInPreSale( $header, $req);
		return $this->recv_updateInfOnlineInPreSale();
	}
	
	public function send_updateInfOnlineInPreSale(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfOnlineInPreSaleReq $req){
		
		$this->initInvocation("updateInfOnlineInPreSale");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_updateInfOnlineInPreSale_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_updateInfOnlineInPreSale(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_updateInfOnlineInPreSale_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateInfOutletsOrders(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfOutletsOrdersConditionsReq $conditionReq,\com\vip\xstore\order\ofc\api\request\UpdateInfOutletsOrdersValuesReq $valuesReq){
		
		$this->send_updateInfOutletsOrders( $header, $conditionReq, $valuesReq);
		return $this->recv_updateInfOutletsOrders();
	}
	
	public function send_updateInfOutletsOrders(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateInfOutletsOrdersConditionsReq $conditionReq,\com\vip\xstore\order\ofc\api\request\UpdateInfOutletsOrdersValuesReq $valuesReq){
		
		$this->initInvocation("updateInfOutletsOrders");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_updateInfOutletsOrders_args();
		
		$args->header = $header;
		
		$args->conditionReq = $conditionReq;
		
		$args->valuesReq = $valuesReq;
		
		$this->send_base($args);
	}
	
	public function recv_updateInfOutletsOrders(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_updateInfOutletsOrders_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateOfcSyncAfterSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOfcSyncAfterSaleDataReq $req){
		
		$this->send_updateOfcSyncAfterSaleData( $header, $req);
		return $this->recv_updateOfcSyncAfterSaleData();
	}
	
	public function send_updateOfcSyncAfterSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOfcSyncAfterSaleDataReq $req){
		
		$this->initInvocation("updateOfcSyncAfterSaleData");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_updateOfcSyncAfterSaleData_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_updateOfcSyncAfterSaleData(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_updateOfcSyncAfterSaleData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function updateOfcSyncPreSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOfcSyncPreSaleDataReq $req){
		
		$this->send_updateOfcSyncPreSaleData( $header, $req);
		return $this->recv_updateOfcSyncPreSaleData();
	}
	
	public function send_updateOfcSyncPreSaleData(\com\vip\xstore\order\common\pojo\vo\RequestHeader $header,\com\vip\xstore\order\ofc\api\request\UpdateOfcSyncPreSaleDataReq $req){
		
		$this->initInvocation("updateOfcSyncPreSaleData");
		$args = new \com\vip\xstore\order\ofc\api\service\OfcService_updateOfcSyncPreSaleData_args();
		
		$args->header = $header;
		
		$args->req = $req;
		
		$this->send_base($args);
	}
	
	public function recv_updateOfcSyncPreSaleData(){
		
		$result = new \com\vip\xstore\order\ofc\api\service\OfcService_updateOfcSyncPreSaleData_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class OfcService_addAsynCmdRetry_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\UpdateOrInsertAsynCmdRetryReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_addOfcSyncData_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\AddOfcSyncDataReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_convertInfErpOrder_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\ConvertInfErpOrderReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_convertInfOutletsOrder_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\ConvertInfOutletsOrderReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_deliverOrder_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\DeliverOrderReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_ebsResend_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\EbsResendReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_fixOrderPayType_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\FixOrderPayTypeReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getAsynCmdRetry_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetAsynCmdRetryByIdReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getInfErpOrderCount_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetInfErpOrderCountReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getInfErpOrderList_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	public $filter = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			3 => array(
			'var' => 'filter'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
			if (isset($vals['filter'])){
				
				$this->filter = $vals['filter'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetInfErpOrderListReq();
			$this->req->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->filter = new \com\vip\xstore\order\common\pojo\vo\ResultFilter();
			$this->filter->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->filter !== null) {
			
			$xfer += $output->writeFieldBegin('filter');
			
			if (!is_object($this->filter)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->filter->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getInfOnlineInAfterSaleList_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetInfOnlineInAfterSaleListReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getInfOnlineInPreSaleList_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetInfOnlineInPreSaleListReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getOfcSyncAfterSaleDataList_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	public $filter = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			3 => array(
			'var' => 'filter'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
			if (isset($vals['filter'])){
				
				$this->filter = $vals['filter'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetOfcSyncAfterSaleDataListReq();
			$this->req->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->filter = new \com\vip\xstore\order\common\pojo\vo\ResultFilter();
			$this->filter->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->filter !== null) {
			
			$xfer += $output->writeFieldBegin('filter');
			
			if (!is_object($this->filter)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->filter->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getOfcSyncPreSaleDataList_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	public $filter = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			3 => array(
			'var' => 'filter'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
			if (isset($vals['filter'])){
				
				$this->filter = $vals['filter'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetOfcSyncPreSaleDataListReq();
			$this->req->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->filter = new \com\vip\xstore\order\common\pojo\vo\ResultFilter();
			$this->filter->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->filter !== null) {
			
			$xfer += $output->writeFieldBegin('filter');
			
			if (!is_object($this->filter)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->filter->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getPjbestOrderTaskStatus_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetPjbestOrderTaskStatusReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getShouldResendEbsData_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	public $filter = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			3 => array(
			'var' => 'filter'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
			if (isset($vals['filter'])){
				
				$this->filter = $vals['filter'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetShouldResendEbsDataReq();
			$this->req->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->filter = new \com\vip\xstore\order\common\pojo\vo\ResultFilter();
			$this->filter->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->filter !== null) {
			
			$xfer += $output->writeFieldBegin('filter');
			
			if (!is_object($this->filter)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->filter->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getUnprocAsynCmdRetryList_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetUnprocAsynCmdRetryListReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getUnprocInfErpOrderList_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	public $filter = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			3 => array(
			'var' => 'filter'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
			if (isset($vals['filter'])){
				
				$this->filter = $vals['filter'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetUnprocInfErpOrderListReq();
			$this->req->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->filter = new \com\vip\xstore\order\common\pojo\vo\ResultFilter();
			$this->filter->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->filter !== null) {
			
			$xfer += $output->writeFieldBegin('filter');
			
			if (!is_object($this->filter)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->filter->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getUnprocInfOutletsOrderList_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	public $filter = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			3 => array(
			'var' => 'filter'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
			if (isset($vals['filter'])){
				
				$this->filter = $vals['filter'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\GetUnprocInfOutletsOrderListReq();
			$this->req->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->filter = new \com\vip\xstore\order\common\pojo\vo\ResultFilter();
			$this->filter->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->filter !== null) {
			
			$xfer += $output->writeFieldBegin('filter');
			
			if (!is_object($this->filter)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->filter->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_inpackReturn_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\InpackReturnReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_modifyTransportNo_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\ModifyTransportNoReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_ofcSyncAfterSaleData_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\OfcSyncAfterSaleDataReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_ofcSyncPreSaleData_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\OfcSyncPreSaleDataReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_pickingUpOrder_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\PickingUpOrderReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_secondPickingUpOrder_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\SecondPickingUpOrderReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_simsResend_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\SimsResendReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_syncInfOutletsOrderInfo_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\SyncInfOutletsOrderInfoReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_syncOnlineAfterSaleOrder_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\SyncOnlineAfterSaleOrderReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_syncOnlinePreSaleOrder_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\SyncOnlinePreSaleOrderReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_syncTmsTransportTrack_args {
	
	static $_TSPEC;
	public $msg = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'msg'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->msg = new \com\vip\xstore\order\ofc\api\request\TrackPushMsg();
			$this->msg->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			
			if (!is_object($this->msg)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->msg->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateAsynCmdRetry_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\UpdateOrInsertAsynCmdRetryReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateInfErpMRetail_args {
	
	static $_TSPEC;
	public $header = null;
	public $conditionReq = null;
	public $valuesReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'conditionReq'
			),
			3 => array(
			'var' => 'valuesReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['conditionReq'])){
				
				$this->conditionReq = $vals['conditionReq'];
			}
			
			
			if (isset($vals['valuesReq'])){
				
				$this->valuesReq = $vals['valuesReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->conditionReq = new \com\vip\xstore\order\ofc\api\request\UpdateInfErpMRetailConditionsReq();
			$this->conditionReq->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->valuesReq = new \com\vip\xstore\order\ofc\api\request\UpdateInfErpMRetailValuesReq();
			$this->valuesReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->conditionReq !== null) {
			
			$xfer += $output->writeFieldBegin('conditionReq');
			
			if (!is_object($this->conditionReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->conditionReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->valuesReq !== null) {
			
			$xfer += $output->writeFieldBegin('valuesReq');
			
			if (!is_object($this->valuesReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->valuesReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateInfOnlineInAfterSale_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\UpdateInfOnlineInAfterSaleReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateInfOnlineInPreSale_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\UpdateInfOnlineInPreSaleReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateInfOutletsOrders_args {
	
	static $_TSPEC;
	public $header = null;
	public $conditionReq = null;
	public $valuesReq = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'conditionReq'
			),
			3 => array(
			'var' => 'valuesReq'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['conditionReq'])){
				
				$this->conditionReq = $vals['conditionReq'];
			}
			
			
			if (isset($vals['valuesReq'])){
				
				$this->valuesReq = $vals['valuesReq'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->conditionReq = new \com\vip\xstore\order\ofc\api\request\UpdateInfOutletsOrdersConditionsReq();
			$this->conditionReq->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->valuesReq = new \com\vip\xstore\order\ofc\api\request\UpdateInfOutletsOrdersValuesReq();
			$this->valuesReq->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->conditionReq !== null) {
			
			$xfer += $output->writeFieldBegin('conditionReq');
			
			if (!is_object($this->conditionReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->conditionReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->valuesReq !== null) {
			
			$xfer += $output->writeFieldBegin('valuesReq');
			
			if (!is_object($this->valuesReq)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->valuesReq->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateOfcSyncAfterSaleData_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\UpdateOfcSyncAfterSaleDataReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateOfcSyncPreSaleData_args {
	
	static $_TSPEC;
	public $header = null;
	public $req = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'header'
			),
			2 => array(
			'var' => 'req'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['header'])){
				
				$this->header = $vals['header'];
			}
			
			
			if (isset($vals['req'])){
				
				$this->req = $vals['req'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->header = new \com\vip\xstore\order\common\pojo\vo\RequestHeader();
			$this->header->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->req = new \com\vip\xstore\order\ofc\api\request\UpdateOfcSyncPreSaleDataReq();
			$this->req->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->header !== null) {
			
			$xfer += $output->writeFieldBegin('header');
			
			if (!is_object($this->header)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->header->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->req !== null) {
			
			$xfer += $output->writeFieldBegin('req');
			
			if (!is_object($this->req)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->req->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_addAsynCmdRetry_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\UpdateOrInsertAsynCmdRetryResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_addOfcSyncData_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\AddOfcSyncDataResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_convertInfErpOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\ConvertInfErpOrderResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_convertInfOutletsOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\ConvertInfOutletsOrderResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_deliverOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\DeliverOrderResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_ebsResend_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\EbsResendResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_fixOrderPayType_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\FixOrderPayTypeResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getAsynCmdRetry_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetAsynCmdRetryResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getInfErpOrderCount_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetInfErpOrderCountResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getInfErpOrderList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetInfErpOrderListResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getInfOnlineInAfterSaleList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetInfOnlineInAfterSaleListResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getInfOnlineInPreSaleList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetInfOnlineInPreSaleListResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getOfcSyncAfterSaleDataList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetOfcSyncAfterSaleDataListResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getOfcSyncPreSaleDataList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetOfcSyncPreSaleDataListResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getPjbestOrderTaskStatus_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetPjbestOrderTaskStatusResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getShouldResendEbsData_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetShouldResendEbsDataResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getUnprocAsynCmdRetryList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetUnprocAsynCmdRetryListResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getUnprocInfErpOrderList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetUnprocInfErpOrderListResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_getUnprocInfOutletsOrderList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\GetUnprocInfOutletsOrderListResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_inpackReturn_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\InpackReturnResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_modifyTransportNo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\ModifyTransportNoResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_ofcSyncAfterSaleData_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\OfcSyncAfterSaleDataResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_ofcSyncPreSaleData_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\OfcSyncPreSaleDataResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_pickingUpOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\PickingUpOrderResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_secondPickingUpOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\SecondPickingUpOrderResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_simsResend_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\SimsResendResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_syncInfOutletsOrderInfo_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\SyncInfOutletsOrderInfoResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_syncOnlineAfterSaleOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\SyncOnlineAfterSaleOrderResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_syncOnlinePreSaleOrder_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\SyncOnlinePreSaleOrderResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_syncTmsTransportTrack_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\TrackPushResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateAsynCmdRetry_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\UpdateOrInsertAsynCmdRetryResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateInfErpMRetail_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\UpdateInfErpMRetailResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateInfOnlineInAfterSale_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\UpdateInfOnlineInAfterSaleResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateInfOnlineInPreSale_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\UpdateInfOnlineInPreSaleResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateInfOutletsOrders_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\UpdateInfOutletsOrdersResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateOfcSyncAfterSaleData_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\UpdateOfcSyncAfterSaleDataResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class OfcService_updateOfcSyncPreSaleData_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\xstore\order\ofc\api\response\UpdateOfcSyncPreSaleDataResp();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>