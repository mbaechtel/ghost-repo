<?php
/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 04/08/2016
 * Time: 10:13
 */

namespace Ghost\BlogBundle\Manager;

use GuzzleHttp\Client;

/**
 * Class Instagram
 * @package Ghost\BlogBundle\Manager
 */
class Instagram
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $accessToken;

    /**
     * Instagram constructor.
     */
    public function __construct($token)
    {
        $this->client = new Client([
            'base_uri' => 'https://api.instagram.com/v1/'
        ]);
        $this->accessToken = $token;
    }

    /**
     * Get user infos
     *
     * @return null|object
     */
    public function getUserInfos()
    {
        return $this->doRequest('users/self/');
    }

    /**
     * Get user recent medias
     *
     * @return null|object
     */
    public function getUserRecentMedias()
    {
        return $this->doRequest('users/self/media/recent/');
    }

    /**
     * Get user liked medias
     *
     * @return null|object
     */
    public function getUserLikedMedias()
    {
        return $this->doRequest('users/self/media/liked');
    }

    /**
     * Get information about a media
     *
     * @param $mediaId
     *
     * @return null|object
     */
    public function getMediaInfos($mediaId)
    {
        return $this->doRequest('media/'.$mediaId);
    }

    /**
     * Do request on api instagram
     *
     * @param $uri
     * @return null|object
     */
    private function doRequest($uri)
    {
        $response = $this->client->request('GET', $uri, [
            'query' => ['access_token' => $this->accessToken]
        ]);

        $obj_result_data = null;

        if (200 === $response->getStatusCode()) {
            $obj_result_data = json_decode($response->getBody()->getContents())->data;
        }

        return $obj_result_data;
    }
}
