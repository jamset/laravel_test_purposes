<?php namespace App\Console\Commands;

use App\Console\Inventory\ConsoleConstants;
use React\PublisherPulsar\ReplyStack;
use Illuminate\Console\Command;
use \Log;

class ReactPulsarReplyStack extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = ConsoleConstants::REACT_PULSAR_REPLY_STACK;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Init sub-process, that serve as zmq-queue to Pulsar requesters.';

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
     * @return mixed
     */
    public function fire()
    {
        $replyStack = new ReplyStack();
        $replyStack->startCommunication();

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
