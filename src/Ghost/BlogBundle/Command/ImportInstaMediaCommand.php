<?php

/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 06/08/2016
 * Time: 16:21
 */

namespace Ghost\BlogBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ImportInstaMediaCommand
 * @package Ghost\BlogBundle\Command
 */
class ImportInstaMediaCommand extends BaseCommand
{
    protected function configure()
    {
        $this
            ->setName('ghost:instagram:import')
            ->setDescription('Import instagram medias in database')
            ->addOption('id', null, InputOption::VALUE_REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Execute import instagram medias</info>');

        $id = (int) $input->getOption('id') > 0 ? (int) $input->getOption('id') : null;

        $instaImporter = $this->getContainer()->get('gh.instagram_importer');

        if (null !== $id) {
            $instaImporter->importSingleMedia($id);
        } else {
            $instaImporter->import();
        }

        $output->writeln('<info>Exit import instagram medias</info>');
    }
}
