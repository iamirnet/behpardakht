<?php


namespace iAmirNet\BehPardakht\Methods;


trait bpVerifyRequest
{
    public function bpVerifyRequest($orderId, $verifySaleOrderId,  $verifySaleReferenceId) {
        $parameters = [
            'orderId' => $orderId,
            'saleOrderId' => $verifySaleOrderId,
            'saleReferenceId' => $verifySaleReferenceId
        ];
        $answer = $this->request('bpVerifyRequest', $parameters);
        if(intval($answer) == 0) {
            $result = $this->bpSettleRequest(...func_get_args());
            $is_payed = false;
            if ($result['status']){
                $result = $this->bpInquiryRequest(...func_get_args());
                $is_payed = $result['status'];
            }
            if (!$is_payed) {
                $result = $this->bpReversalRequest(...func_get_args());
                return ['status' => false, 'message' => $this->getError('100001')];
            }
            return $result;
        }
        return ['status' => false, 'code' => $answer, 'message' => $this->getError($answer)];
    }
}