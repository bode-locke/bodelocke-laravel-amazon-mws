<?php

return [
    'actions' => [
        //FEEDS - VERSION 2009-01-01
        'SubmitFeed' => [
            'endpoint' => '/Feeds/2009-01-01',
            'method'   => 'POST',
        ],
        'GetFeedSubmissionList' => [
            'endpoint' => '/Feeds/2009-01-01',
            'method'   => 'POST',
        ],
        'GetFeedSubmissionListByNextToken' => [
            'endpoint' => '/Feeds/2009-01-01',
            'method'   => 'POST',
        ],
        'GetFeedSubmissionCount' => [
            'endpoint' => '/Feeds/2009-01-01',
            'method'   => 'POST',
        ],
        'CancelFeedSubmissions' => [
            'endpoint' => '/Feeds/2009-01-01',
            'method'   => 'POST',
        ],
        'GetFeedSubmissionResult' => [
            'endpoint' => '/Feeds/2009-01-01',
            'method'   => 'POST',
        ],
        //FINANCES - VERSION 2015-05-01
        'ListFinancialEventGroups' => [
            'endpoint' => '/Finances/2015-05-01',
            'method'   => 'POST',
        ],
        'ListFinancialEventGroupsByNextToken' => [
            'endpoint' => '/Finances/2015-05-01',
            'method'   => 'POST',
        ],
        'ListFinancialEvents' => [
            'endpoint' => '/Finances/2015-05-01',
            'method'   => 'POST',
        ],
        'ListFinancialEventsByNextToken' => [
            'endpoint' => '/Finances/2015-05-01',
            'method'   => 'POST',
        ],
        'GetServiceStatus' => [
            'endpoint' => '/Finances/2015-05-01',
            'method'   => 'POST',
        ],
        //FULFILLMENT INBOUND SHIPMENT - VERSION 2010-10-01

        //FULFILLMENT INVENTORY - VERSION 2010-10-01

        //FULFILLMENT OUTBOUND SHIPMENT - VERSION 2010-10-01
        'GetFulfillmentOrder' => [
            'endpoint' => '/FulfillmentOutboundShipment/2010-10-01/',
            'method'   => 'GET',
        ],
        //MERCHANT FULFILLMENT - VERSION 2010-10-01
        //ORDERS - VERSION 2013-09-01
        'GetOrder' => [
            'endpoint' => '/Orders/2013-09-01/',
            'method'   => 'GET',
        ],
        //PRODUCTS - VERSION 2011-10-01
        //REPORTS - VERSION 2009-01-01
        //SELLERS - VERSION 2011-07-01
        //SUBSCRIPTIONS - VERSION 2013-07-01

    ],
    'markets_places' => [
        //Amazon North America marketplaces
        'CA' => [
            'id'   => 'A2EUQ1WTGCTBG2',
            'host' => 'mws.amazonservices.com',
        ],
        'US' => [
            'id'   => 'ATVPDKIKX0DER',
            'host' => 'mws.amazonservices.com',
        ],
        'MX' => [
            'id'   => 'A1AM78C64UM0Y8',
            'host' => 'mws.amazonservices.com',
        ],
        //Amazon Europe marketplaces
        'ES' => [
            'id'   => 'A1RKKUPIHCS9HS',
            'host' => 'mws-eu.amazonservices.com',
        ],
        'UK' => [
            'id'   => 'A1F83G8C2ARO7P',
            'host' => 'mws-eu.amazonservices.com',
        ],
        'FR' => [
            'id'   => 'A13V1IB3VIYZZH',
            'host' => 'mws-eu.amazonservices.com',
        ],
        'DE' => [
            'id'   => 'A1PA6795UKMFR9',
            'host' => 'mws-eu.amazonservices.com',
        ],
        'IT' => [
            'id'   => 'APJ6JRA9NG5V4',
            'host' => 'mws-eu.amazonservices.com',
        ],
        //Other Amazon marketplaces
        'BR' => [
            'id'   => 'A2Q3Y263D00KWC',
            'host' => 'mws.amazonservices.com',
        ],
        'IN' => [
            'id'   => 'A21TJRUUN4KGV',
            'host' => 'mws.amazonservices.in',
        ],
        'CN' => [
            'id'   => 'AAHKV2X7AFYLW',
            'host' => 'mws.amazonservices.com.cn',
        ],
        'JP' => [
            'id'   => 'A1VC38T7YXB528',
            'host' => 'mws.amazonservices.jp',
        ],
        'AU' => [
            'id'   => 'A39IBJ37TRP1C6',
            'host' => 'mws.amazonservices.com.au',
        ],
    ]
];
