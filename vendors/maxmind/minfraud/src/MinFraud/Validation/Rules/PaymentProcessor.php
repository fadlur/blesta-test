<?php

declare(strict_types=1);

namespace MaxMind\MinFraud\Validation\Rules;

use Respect\Validation\Rules\AbstractWrapper;
use Respect\Validation\Validator as v;

/**
 * @internal
 */
class PaymentProcessor extends AbstractWrapper
{
    public function __construct()
    {
        $this->validatable = v::in(
            [
                'adyen',
                'affirm',
                'afterpay',
                'altapay',
                'amazon_payments',
                'american_express_payment_gateway',
                'authorizenet',
                'balanced',
                'beanstream',
                'bluepay',
                'bluesnap',
                'bpoint',
                'braintree',
                'cardpay',
                'cashfree',
                'ccavenue',
                'ccnow',
                'cetelem',
                'chase_paymentech',
                'checkout_com',
                'cielo',
                'collector',
                'commdoo',
                'compropago',
                'concept_payments',
                'conekta',
                'ct_payments',
                'cuentadigital',
                'curopayments',
                'cybersource',
                'dalenys',
                'dalpay',
                'datacash',
                'dibs',
                'digital_river',
                'dotpay',
                'ebs',
                'ecomm365',
                'ecommpay',
                'elavon',
                'emerchantpay',
                'epay',
                'eprocessing_network',
                'epx',
                'eway',
                'exact',
                'first_atlantic_commerce',
                'first_data',
                'g2a_pay',
                'global_payments',
                'gocardless',
                'heartland',
                'hipay',
                'ingenico',
                'interac',
                'internetsecure',
                'intuit_quickbooks_payments',
                'iugu',
                'klarna',
                'komoju',
                'lemon_way',
                'mastercard_payment_gateway',
                'mercadopago',
                'mercanet',
                'merchant_esolutions',
                'mirjeh',
                'mollie',
                'moneris_solutions',
                'nmi',
                'oceanpayment',
                'oney',
                'openpaymx',
                'optimal_payments',
                'orangepay',
                'other',
                'pacnet_services',
                'payeezy',
                'payfast',
                'paygate',
                'paylike',
                'payment_express',
                'paymentwall',
                'payone',
                'paypal',
                'payplus',
                'paysafecard',
                'paystation',
                'paytm',
                'paytrace',
                'paytrail',
                'payture',
                'payu',
                'payulatam',
                'payway',
                'payza',
                'pinpayments',
                'posconnect',
                'princeton_payment_solutions',
                'psigate',
                'qiwi',
                'quickpay',
                'raberil',
                'razorpay',
                'rede',
                'redpagos',
                'rewardspay',
                'sagepay',
                'securetrading',
                'simplify_commerce',
                'skrill',
                'smartcoin',
                'smartdebit',
                'solidtrust_pay',
                'sps_decidir',
                'stripe',
                'synapsefi',
                'systempay',
                'telerecargas',
                'towah',
                'transact_pro',
                'tsys',
                'usa_epay',
                'vantiv',
                'verepay',
                'vericheck',
                'vindicia',
                'virtual_card_services',
                'vme',
                'vpos',
                'wirecard',
                'worldpay',
            ]
        );
    }
}
