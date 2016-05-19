<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 27.09.15
 * Time: 19:43
 */
namespace App\Console\Inventory;

class ConsoleConstants
{
    const PHP_ARTISAN = 'php artisan ';
    const ARTISAN = 'artisan ';

    const CONSIDER_QUEUE_LC = 'consider-queue';

    const GEARMAN_PM_INITIALIZER = 'Gearman process manager initializer';

    const GEARMAN_HOST = '127.0.0.1';
    const GEARMAN_PORT = '4730';

    /*console commands names*/

    const FETCH_STAT = 'fetch:stat';
    const FETCH_STAT_ADWORDS = 'fetch:stat:adwords';
    const GEARMAN_FETCH_STAT_PM = 'gearman:fetch:stat:pm';
    const GEARMAN_FETCH_STAT_WORKER = 'gearman:fetch:stat:worker';
    const GEARMAN_FETCH_STAT_ADWORDS_WORKER = 'gearman:fetch:stat:adwords:worker';

    const MERGE_STAT = 'merge:stat';
    const GEARMAN_MERGE_STAT_PM = 'gearman:merge:stat:pm';
    const GEARMAN_MERGE_STAT_WORKER = 'gearman:merge:stat:worker';

    const REPORTS_MAKE = 'reports:make';
    const GEARMAN_REPORTS_MAKE_PM = 'gearman:reports:make:pm';
    const GEARMAN_REPORTS_MAKE_WORKER = 'gearman:reports:make:worker';

    const REPORTS_CREATE_TASKS = 'reports:create-tasks';
    const GEARMAN_REPORTS_TASKS_CREATOR_PM = 'gearman:reports:create-tasks:pm';
    const GEARMAN_REPORTS_TASKS_CREATOR_WORKER = 'gearman:reports:create-tasks:worker';

    const REACT_LOAD_MANAGER = 'react:load-manager';

    const REACT_PUBLISHER_PULSAR_GA = 'react:pulsar-ga';
    const REACT_PULSAR_REPLY_STACK = 'react:pulsar-reply-stack';

    const ADD_COMMAND_INTO_QUEUE = 'add-command-into-queue';

    /*Load distribution*/

    /*FETCH_STAT*/
    //TODO: change
    const FETCH_STAT_MEM_USAGE = 80;
    const FETCH_STAT_CPU_USAGE = 100;
    const FETCH_STAT_STANDARD_MEMORY_GAP = 200000; //Kb

    /*MERGE_STAT*/
    const MERGE_STAT_MEM_USAGE = 20;
    const MERGE_STAT_CPU_USAGE = 100;

    /*REPORTS*/
    const REPORTS_MEM_USAGE = 30;
    const REPORTS_CPU_USAGE = 100;

    const REPORTS_TASKS_CREATOR_MEM_USAGE = 20;
    const REPORTS_TASKS_CREATOR_CPU_USAGE = 100;


}
