<?php
/**
 * Created by PhpStorm.
 * User: ww
 * Date: 11.10.15
 * Time: 18:33
 */
namespace App\Console\Inventory;

class ZmqSocketsConstants
{
    /* NAMING PATTERN: <module general name (n/n_m/n_m_k)><module specific name><zmq socket type>"address"*/

    /*GA*/
    const PULSAR_GA_REPLY_TO_REPLY_STACK_ADDRESS = 'tcp://127.0.0.1:6261';
    const PULSAR_GA_PUSH_TO_REPLY_STACK_ADDRESS = 'tcp://127.0.0.1:6262';
    const PULSAR_GA_PUBLISH_ADDRESS = 'tcp://127.0.0.1:6263';
    const PULSAR_GA_PULL_ADDRESS = 'tcp://127.0.0.1:6264';

    const PULSAR_GA_REPLY_STACK_ADDRESS = 'tcp://127.0.0.1:6265';

    /*FETCH_STAT*/
    const PM_LM_FETCH_STAT_REPLY_ADDRESS = 'tcp://127.0.0.1:6267';
    const PM_FETCH_STAT_PUBLISH_ADDRESS = 'tcp://127.0.0.1:6268';

    /*MERGE_STAT*/
    const PM_LM_MERGE_STAT_REPLY_ADDRESS = 'tcp://127.0.0.1:6269';
    const PM_MERGE_STAT_PUBLISH_ADDRESS = 'tcp://127.0.0.1:6270';

    /*REPORTS*/
    const PM_LM_REPORTS_REPLY_ADDRESS = 'tcp://127.0.0.1:6278';
    const PM_REPORTS_PUBLISH_ADDRESS = 'tcp://127.0.0.1:6279';

    /*FETCH_ACCOUNT*/
    //
    const PM_FETCH_ACCOUNT_PUBLISH_ADDRESS = 'tcp://127.0.0.1:6281';

    /*FETCH_PROFILE*/
    //
    const PM_FETCH_PROFILE_PUBLISH_ADDRESS = 'tcp://127.0.0.1:6283';

    /*FETCH_PROPERTY*/
    //
    const PM_FETCH_PROPERTY_PUBLISH_ADDRESS = 'tcp://127.0.0.1:6285';

    /*REPORTS_TASKS_CREATOR*/
    const PM_LM_REPORTS_TASKS_CREATOR_REPLY_ADDRESS = 'tcp://127.0.0.1:6286';
    const PM_REPORTS_TASKS_CREATOR_PUBLISH_ADDRESS = 'tcp://127.0.0.1:6287';


}
