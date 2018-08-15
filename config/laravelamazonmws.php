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
    'markets_places_ids' => [

    ],
    'markets_places_hosts' => [

    ],
];
