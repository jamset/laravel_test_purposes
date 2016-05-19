<?php namespace App\Console\Commands;

use App\Console\Inventory\ConsoleConstants;
use App\Console\Inventory\ZmqSocketsConstants;
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
    protected $name = ConsoleConstants::REACT_PUBLISHER_PULSAR_GA;

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
        $publisherPulsarDto->setModuleName(ConsoleConstants::REACT_PUBLISHER_PULSAR_GA);
        $publisherPulsarDto->setReplyStackCommandName(ConsoleConstants::PHP_ARTISAN . ConsoleConstants::REACT_PULSAR_REPLY_STACK);
        $publisherPulsarDto->setPerformerContainerActionMaxExecutionTime(7);
        $publisherPulsarDto->setLogger(\Log::getMonolog());
        $publisherPulsarDto->setMaxWaitReplyStackResult(7);

        $pulsarSocketsParams = new PulsarSocketsParamsDto();
        $pulsarSocketsParams->setReplyToReplyStackSocketAddress(ZmqSocketsConstants::PULSAR_GA_REPLY_TO_REPLY_STACK_ADDRESS);
        $pulsarSocketsParams->setPushToReplyStackSocketAddress(ZmqSocketsConstants::PULSAR_GA_PUSH_TO_REPLY_STACK_ADDRESS);
        $pulsarSocketsParams->setPublishSocketAddress(ZmqSocketsConstants::PULSAR_GA_PUBLISH_ADDRESS);
        $pulsarSocketsParams->setPullSocketAddress(ZmqSocketsConstants::PULSAR_GA_PULL_ADDRESS);

        $pulsarSocketsParams->setReplyStackSocketAddress(ZmqSocketsConstants::PULSAR_GA_REPLY_STACK_ADDRESS);

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
