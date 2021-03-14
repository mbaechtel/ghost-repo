<?php
/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 04/08/2016
 * Time: 10:13
 */

namespace Ghost\BlogBundle\Manager;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

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
            'base_uri' => 'https://graph.instagram.com/'
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
     * @return null|array|object
     * @throws GuzzleException
     */
    public function getUserRecentMedias()
    {
        return array_reverse($this->doRequest('me/media', 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username')->data);
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
     * @return array|object|null
     * @throws GuzzleException
     */
    public function getMediaInfos($mediaId)
    {
        return $this->doRequest($mediaId, 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username');
    }

    /**
     * Do request on api instagram
     *
     * @param $uri
     * @param null $fields
     * @return null|array|object
     * @throws GuzzleException
     */
    private function doRequest($uri, $fields = null)
    {
        $query = [];

        if (null !== $fields) {
            $query['fields'] = $fields;
        }
        $query['access_token'] = $this->accessToken;

        $response = $this->client->request('GET', $uri, ['query' => $query]);

        $obj_result = null;

        if (200 === $response->getStatusCode()) {
            $obj_result = json_decode($response->getBody()->getContents());
        }

        return $obj_result;
    }
}
