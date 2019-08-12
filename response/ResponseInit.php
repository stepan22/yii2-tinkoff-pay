<?php
/**
 * Created by PhpStorm.
 * User: anton
 * Date: 07.09.17
 * Time: 15:34
 */

namespace chumakovanton\tinkoffPay\response;


class ResponseInit extends AbstractResponse
{
    /**
     * Сумма в копейках
     * @return null|int
     */
    public function getAmount(): ?int
    {
        return $this->_response['Amount'];
    }

    /**
     * Ссылка на страницу оплаты. По умолчанию ссылка доступна в течении 24 часов.
     * @return null|string(100)
     */
    public function getPaymentUrl(): ?string
    {
        return $this->_response['PaymentURL'];
    }

    /**
     * Идентификатор для выполнения рекуррентных платежей.
     * @return null|string
     */
    public function getRebillId(): ?string
    {
        return $this->_response['RebillId'];
    }

    /**
     * Идентификатор карты в системе Банка.
     * @return null|string
     */
    public function getCardId(): ?string
    {
        return $this->_response['CardId'];
    }

    /**
     * Номер карты в формате 411111******1111.
     * @return null|string
     */
    public function getPan(): ?string
    {
        return $this->_response['Pan'];
    }
}