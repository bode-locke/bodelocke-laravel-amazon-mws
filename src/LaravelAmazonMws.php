<?php
namespace LaravelAmazonMws\LaravelAmazonMws;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use LaravelAmazonMws\LaravelAmazonMws\ArrayToXml;
class LaravelAmazonMws //TODO Commenter et typer les fonctions
{
    public function __construct($config)
    {
        $this->config = $config;
    }
    public function connect($action, $query)
    {
        $merge              = $this->getDatasToMerge($this->config, $action);
        $body               = '';
        $md5_base64         = base64_encode(md5($body,true));
        $query              = array_merge($merge, $query);
        $query_for_xml      = $query;
        $body               = ArrayToXml::convert($query_for_xml, 'AmazonEnvelope');
        ksort($query);
        $endpoint           = $this->getEndpoint($action);
        $method             = $this->getMethod($action);
        $query['Signature'] = $this->getSignature($this->config, $method ,$query, $endpoint);
        $request_options    = $this->getRequestOptions($md5_base64, $query, $method == 'POST' ? $body : null);
        $client             = $this->getClient($this->config, $endpoint);
        try{
            $request = $client->get(
                'https://'. $this->config['Marketplace_Host'] . $endpoint,
                $request_options
            );
            return $this->getResponseArray($request->getBody()->getContents()) ;
        }catch (\GuzzleHttp\Exception\ClientException $e){
            $error = $this->getResponseArray($e->getResponse()->getBody()->getContents());
            return $error["Error"]["Message"] ;
        }
    }
    public static function getMarketPlaceId($country)
    {
        return config('laravelamazonmws.markets_places.' . $country . '.id');
    }
    public static function getMarketPlaceHost($country)
    {
        return config('laravelamazonmws.markets_places.' . $country . '.host');
    }
    private function getMethod($action)
    {
        return config('laravelamazonmws.actions.' . $action . '.method');
    }
    private function getEndpoint($action)
    {
        return config('laravelamazonmws.actions.' . $action . '.endpoint');
    }
    private function getDatasToMerge($config, $action)
    {
        return
        [
            'Timestamp'        => Carbon::now('UTC')->format('Y-m-d\TH:i:s\Z'),
            'AWSAccessKeyId'   => $config['Access_Key_ID'],
            'Action'           => $action,
            'SellerId'         => $config['Seller_Id'],
            'SignatureMethod'  => 'HmacSHA256',
            'SignatureVersion' => '2',
            'Version'          => '2010-10-01',
        ];
    }
    private function getSignature($config, $action, $query, $endpoint)
    {
        return  base64_encode(
                    hash_hmac(
                        'sha256',
                        $action
                        . "\n"
                        . $config['Marketplace_Host']
                        . "\n"
                        . $endpoint
                        . "\n"
                        . http_build_query($query, null, '&', PHP_QUERY_RFC3986),
                        $config['Secret_Access_Key'],
                        true
                    )
                );
    }
    private function getRequestOptions($md5_base64, $query, $body = null)
    {
        return
        [
            'headers' => [
                'Accept'       => 'application/xml',
                'Content-MD5'  => $md5_base64,
                'Content-Type' => 'text/xml; charset=iso-8859-1',
            ],
            isset($body) ?? 'body' => $body,
            'query'  => $query
        ];
    }
    private function getClient($config, $endpoint)
    {
        return new Client(
                [
                    'base_uri'        => 'https://'. $config['Marketplace_Host'] . $endpoint,
                    'timeout'         => 0,
                    'allow_redirects' => false,
                ]);
    }
    private function getResponseArray($response_xml)
    {
        $response_xml_object = collect(simplexml_load_string($response_xml))->toArray();
        return json_decode( json_encode($response_xml_object) , 1);
    }

    public static function getTrackingLink($response)
    {
        $carrier         = $response["GetPackageTrackingDetailsResult"]["CarrierCode"];
        $tracking_number = $response['GetPackageTrackingDetailsResult']['TrackingNumber'];
        $tracking_link   = config('laravelamazonmws.tracking_links.' . $carrier);
        /*
        switch ($case) {
            case 'La Poste':
                $tracking_link =  "https://www.laposte.fr/particulier/outils/suivre-vos-envois";
                break;
        }
        */
        return $tracking_link;
    }
}