<?php

/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 06/08/2016
 * Time: 16:21
 */

namespace Ghost\BlogBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ImportInstaMediaCommand
 * @package Ghost\BlogBundle\Command
 */
class ImportInstaMediaCommand extends BaseCommand
{
    /**
     * Configure
     */
    protected function configure()
    {
        $this
            ->setName('ghost:instagram:import')
            ->setDescription('Import instagram medias in database');
    }

    /**
     * Execute
     *
     * @param InputInterface $in
     * @param OutputInterface $out
     * @return int|null|void
     */
    protected function execute(InputInterface $in, OutputInterface $out)
    {
        $out->writeln('<info>Execute import instagram medias</info>');

        $instaImporter = $this->getContainer()->get('gh.instagram_importer');

        $instaImporter->import();

        $out->writeln('<info>Exit import instagram medias</info>');
    }
}
