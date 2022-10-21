<?php

namespace Ljfreelancer88\Client;

use Ljfreelancer88\Exceptions\ConfigurationException;
use Ljfreelancer88\Interface\ConfigurationInterface;
use GuzzleHttp\ClientInterface;

class Client {	
	protected $client;
	protected $domain;
	protected $property;

    public function __construct($guzzleHttpClient ClientInterface, $config ConfigurationInterface) {
    	$this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
    }

    public function domain(string $domain): void {
    	$this->domain = $domain;
    }

    public function setProperty(array $property): void {
    	$this->property = ['properties' => $property];
    }

    public function resetProperty(array $property): void {
    	$this->property = ['properties' => $property];
    }

    protected function sdfs() {
    	try {
    		$this->client->sendAsync($request, $this->createHttpClientOption());
    	} catch () {

    	}
    	/*
$api_key = '559d00281ce7ae7e154aed436537e8829298ed3488bd2d37339886874fee59c6s';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.daily.co/v1/rooms?limit=5');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($ch, CURLOPT_GET, 1);

        $headers = [
          'Authorization: Bearer ' . $api_key,
          'Content-Type: application/json'
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        echo "Status code: $httpcode\n";
        $data = json_decode($response);
        print_r($data);
    	*/
    }
}
