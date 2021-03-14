<?php

/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 06/08/2016
 * Time: 22:38
 */

namespace Ghost\BlogBundle\Importer;

use Doctrine\ORM\EntityManager;
use Ghost\BlogBundle\Entity\InstaMedia;
use Ghost\BlogBundle\Manager\Instagram;
use Carbon\Carbon;

/**
 * Class InstagramImporter
 * @package Ghost\BlogBundle\Importer
 */
class InstagramImporter
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var Instagram
     */
    protected $instagram;

    /**
     * InstagramImporter constructor.
     *
     * @param EntityManager $entityManager
     * @param Instagram $instagram
     */
    public function __construct(EntityManager $entityManager, Instagram $instagram)
    {
        $this->em        = $entityManager;
        $this->instagram = $instagram;
    }

    /**
     * Import last media instagram in database
     *
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function import()
    {
        //Get instagram medias
        $medias = $this->instagram->getUserRecentMedias();

        if (is_array($medias)) {
            foreach ($medias as $media) {
                $this->processMedia($media);
            }

            $this->em->flush();
        }
    }

    /**
     * Process instagram media
     *
     * @param $media
     */
    private function processMedia($media)
    {
        $instaMedia = $this->em->getRepository('GhostBlogBundle:InstaMedia')->findOneBy([
            'externalId' => $media->id
        ]);

        if (null === $instaMedia) {
            $this->createInstaMedia($media);
        } else {
            $this->updateInstaMedia($instaMedia, $media);
        }
    }

    /**
     * Create instaMedia
     *
     * @param $media
     */
    private function createInstaMedia($media)
    {
        $instaMedia = new InstaMedia();
        $instaMedia->setExternalId($media->id)
            ->setComments(0)
            ->setLikes(0)
            ->setLink($media->permalink)
            ->setStandardResolution($media->media_url)
            ->setPublished(true)
            ->setCreated(Carbon::parse($media->timestamp));

        $this->em->persist($instaMedia);
    }

    /**
     * Update instaMedia
     *
     * @param InstaMedia $instaMedia
     * @param $media
     */
    private function updateInstaMedia(InstaMedia $instaMedia, $media)
    {
        $instaMedia
            //->setComments($media->comments->count)
            //->setLikes($media->likes->count)
            ->setLink($media->permalink)
            ->setStandardResolution($media->media_url)
            ->setUpdated(Carbon::now());
    }
}
