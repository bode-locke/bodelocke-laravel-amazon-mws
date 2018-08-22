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
        'GetPackageTrackingDetails' => [
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
    ],
    'tracking_links' => [
        'An Post'         => 'https://track.anpost.ie/TrackOne.aspx',
        'Arrow XL'        => 'https://www.arrowxl.co.uk/',
        'ASM'             => 'https://www.gls-spain.es/en/',
        'Bpost'           => 'https://www.bpost.be',
        'Chronopost'      => 'http://www.chronotrace.chronopost.com/chronotrace/external.jsp',
        'CitySprint'      => 'https://www.citysprint.co.uk/track',
        'Colis Privé'     => 'https://www.colisprive.fr',
        'Correos'         => 'https://www.correos.es/ss/Satellite/site/aplicacion-4000003382119-herramientas_y_apps/detalle_app-sidioma=es_ES',
        'Deutsche Post'   => 'https://www.deutschepost.de/sendung/simpleQuery.html?locale=en_GB',
        'DHL'             => 'https://www.logistics.dhl/global-en/home/tracking/tracking-ecommerce.html',
        'DHL Netherlands' => 'https://www.dhlparcel.nl/en/consumer/track-and-trace',
        'DHL Poland'      => 'https://www.logistics.dhl/pl-pl/home/nasze-oddzialy/spedycja-miedzynarodowa/obsluga-klienta/lifetrack.html',
        'DPD'             => 'https://www.dpd.co.uk/content/how-can-we-help/index.jsp',
        'myHermes'        => 'https://www.myhermes.co.uk/',
        'i-Parcel'        => 'https://tracking.i-parcel.com/',
        'Jersey Post'     => 'https://www.jerseypost.com/tools/track-trace',
        'La Poste'        => 'https://www.laposte.fr/particulier/outils/en/track-a-parcel',
        'MNG Kargo'       => 'http://www.mngkargo.com.tr/',
        'MRW'             => 'https://www.mrw.es/',
        'Pilot'           => 'https://amazoneurope.pilotdelivers.com/#home',
        'Polish Post'     => 'https://ecommerce.poczta-polska.pl/en/shipping/emonitoring',
        'Post AT'         => 'https://www.post.at/en/index.php',
        'Post DK'         => 'https://www.postnord.se/en/online-tools/tools/track/track-and-trace',
        'Post NL'         => 'https://postnl.post/tracktrace',
        'P&T Luxembourg'  => 'http://www.trackandtrace.lu/',
        'Royal Mail'      => 'http://www.trackandtrace.lu/',
        'SDA'             => 'https://www.poste.it/cerca/index.html#/',
        'Seur'            => 'https://www.seur.com/livetracking/',
        'Swedish Post'    => 'https://www.postnord.se/en',
        'UPS'             => 'https://www.ups.com/track',
        'XPO'             => 'https://www.xpo.com/tracking',
        'Yodel'           => 'https://www.yodel.co.uk/',
    ],
];