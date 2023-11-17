<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transactions = [
            [
                'state' => 'running',
                'pairs' => 'gbpcad',
                'created_at' => new Carbon('2023-11-13'),
                'action' => 1,
                'entry' => 1.70139,
                'stop_loss' => 1.69457,
                'take_profit_1' => 1.70821,
                'take_profit_2' => 1.71503,
                'take_profit_1_status' => 1,
            ],
            [
                'state' => 'done',
                'pairs' => 'gbpnzd',
                'created_at' => new Carbon('2023-11-13'),
                'action' => 1,
                'entry' => 2.08184,
                'stop_loss' => 2.07700,
                'take_profit_1' => 2.08668,
                'take_profit_2' => 2.09152,
                'stop_loss_status' => 1
            ],
            [
                'state' => 'active',
                'pairs' => 'cadchf',
                'created_at' => new Carbon('2023-11-13'),
                'action' => 0,
                'entry' => 0.65166,
                'stop_loss' => 0.65337,
                'take_profit_1' => 0.64995,
                'take_profit_2' => 0.64824,
            ],
            [
                'state' => 'active',
                'pairs' => 'eurcad',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 1,
                'entry' => 1.47763,
                'stop_loss' => 1.47423,
                'take_profit_1' => 1.48097,
                'take_profit_2' => 1.48343,
            ],
            [
                'state' => 'active',
                'pairs' => 'eurjpy',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 1,
                'entry' => 162.785,
                'stop_loss' => 162.36,
                'take_profit_1' => 163.21,
                'take_profit_2' => 163.635,
            ],
            [
                'state' => 'done',
                'pairs' => 'eurnzd',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 1,
                'entry' => 1.80064,
                'stop_loss' => 1.79369,
                'take_profit_1' => 1.80759,
                'take_profit_2' => 1.81454,
                'take_profit_1_status' => 1,
                'take_profit_2_status' => 1,
            ],
            [
                'state' => 'cancel',
                'pairs' => 'eurusd',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 1,
                'entry' => 1.07326,
                'stop_loss' => 1.06855,
                'take_profit_1' => 1.07797,
                'take_profit_2' => 1.08268,
            ],
            [
                'state' => 'done',
                'pairs' => 'nzdchf',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 1,
                'entry' => 0.53365,
                'stop_loss' => 0.53152,
                'take_profit_1' => 0.53578,
                'take_profit_2' => 0.53791,
                'stop_loss_status' => 1
            ],
            [
                'state' => 'active',
                'pairs' => 'nzdjpy',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 1,
                'entry' => 90.176,
                'stop_loss' => 89.821,
                'take_profit_1' => 90.531,
                'take_profit_2' => 90.886
            ],
            [
                'state' => 'running',
                'pairs' => 'nzdusd',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 1,
                'entry' => 0.5979,
                'stop_loss' => 0.5995,
                'take_profit_1' => 0.6003,
                'take_profit_2' => 0.6027,
                'take_profit_1_status' => 1
            ],
            [
                'state' => 'done',
                'pairs' => 'usdjpy',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 0,
                'entry' => 150.679,
                'stop_loss' => 151.034,
                'take_profit_1' => 150.324,
                'take_profit_2' => 149.969,
                'take_profit_1_status' => 1,
                'stop_loss_status' => 1
            ],
            [
                'state' => 'done',
                'pairs' => 'audnzd',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 0,
                'entry' => 1.08195,
                'stop_loss' => 1.08444,
                'take_profit_1' => 1.07946,
                'take_profit_2' => 1.07697,
                'stop_loss_status' => 1
            ],
            [
                'state' => 'cancel',
                'pairs' => 'cadjpy',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 1,
                'entry' => 109.727,
                'stop_loss' => 109.586,
                'take_profit_1' => 109.868,
                'take_profit_2' => 110.009
            ],
            [
                'state' => 'cancel',
                'pairs' => 'chfjpy',
                'created_at' => new Carbon('2023-11-15'),
                'action' => 1,
                'entry' => 168.361,
                'stop_loss' => 167.947,
                'take_profit_1' => 168.775,
                'take_profit_2' => 169.189
            ],
            [
                'state' => 'active',
                'pairs' => 'audcad',
                'created_at' => new Carbon('2023-11-16'),
                'action' => 1,
                'entry' => 0.88169,
                'stop_loss' => 0.87635,
                'take_profit_1' => 0.88703,
                'take_profit_2' => 0.89237
            ],
            [
                'state' => 'done',
                'pairs' => 'cadjpy',
                'created_at' => new Carbon('2023-11-16'),
                'action' => 1,
                'entry' => 109.93,
                'stop_loss' => 109.739,
                'take_profit_1' => 110.121,
                'take_profit_2' => 110.312,
                'stop_loss_status' => 1
            ],
            [
                'state' => 'running',
                'pairs' => 'gbpchf',
                'created_at' => new Carbon('2023-11-16'),
                'action' => 0,
                'entry' => 1.10251,
                'stop_loss' => 1.10431,
                'take_profit_1' => 1.10071,
                'take_profit_2' => 1.09891,
            ],
            [
                'state' => 'active',
                'pairs' => 'gbpjpy',
                'created_at' => new Carbon('2023-11-16'),
                'action' => 1,
                'entry' => 186.722,
                'stop_loss' => 186.007,
                'take_profit_1' => 187.437,
                'take_profit_2' => 188.152,
            ],
            [
                'state' => 'active',
                'pairs' => 'chfjpy',
                'created_at' => new Carbon('2023-11-16'),
                'action' => 1,
                'entry' => 169.432,
                'stop_loss' => 168.718,
                'take_profit_1' => 170.146,
                'take_profit_2' => 170.86,
            ],
            [
                'state' => 'active',
                'pairs' => 'gbpcad',
                'created_at' => new Carbon('2023-11-16'),
                'action' => 1,
                'entry' => 1.70158,
                'stop_loss' => 1.69648,
                'take_profit_1' => 1.70668,
                'take_profit_2' => 1.71178
            ],
        ];

        DB::beginTransaction();

        foreach ($transactions as $transaction) {
            $transaction['timeframe'] = 'H1';
            Transaction::create($transaction);
        }

        DB::commit();
    }
}
