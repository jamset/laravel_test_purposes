<?php namespace App\Console\Commands;

use App\Console\Inventory\ConsoleConstants;
use React\PublisherPulsar\Inventory\PublisherPulsarDto;
use React\PublisherPulsar\Inventory\PulsarSocketsParamsDto;
use React\PublisherPulsar\Pulsar;
use Illuminate\Console\Command;
use \Log;

class ReactPublisherPulsarGa extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'react:pulsar-ga';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init publisher pulsation due to sockets connections to
    protect requesters from exceed GA rps.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return null
     */
    public function fire()
    {
        $pulsar = new Pulsar();

        $publisherPulsarDto = new PublisherPulsarDto();

        $publisherPulsarDto->setPulsationIterationPeriod(1);
        $publisherPulsarDto->setSubscribersPerIteration(10);
        $publisherPulsarDto->setModuleName('react:pulsar-ga');
        $publisherPulsarDto->setReplyStackCommandName('php artisan react:pulsar-reply-stack');
        $publisherPulsarDto->setPerformerContainerActionMaxExecutionTime(7);

        //TODO: and if Logger wasn't set?
        $publisherPulsarDto->setLogger(\Log::getMonolog());
        $publisherPulsarDto->setMaxWaitReplyStackResult(7);

        $pulsarSocketsParams = new PulsarSocketsParamsDto();

        $pulsarSocketsParams->setReplyToReplyStackSocketAddress('tcp://127.0.0.1:6261');
        $pulsarSocketsParams->setPushToReplyStackSocketAddress('tcp://127.0.0.1:6262');
        $pulsarSocketsParams->setPublishSocketAddress('tcp://127.0.0.1:6263');
        $pulsarSocketsParams->setPullSocketAddress('tcp://127.0.0.1:6264');
        $pulsarSocketsParams->setReplyStackSocketAddress('tcp://127.0.0.1:6265');

        $publisherPulsarDto->setPulsarSocketsParams($pulsarSocketsParams);

        $pulsar->setPublisherPulsarDto($publisherPulsarDto);

        $pulsar->manage();

        return null;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            //['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            //['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }

}
