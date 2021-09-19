<?php

namespace Nidavellir\Database\Seeders;

use Carbon\CarbonImmutable;
use Illuminate\Database\Seeder;
use Nidavellir\Cube\Models\Alert;
use Nidavellir\Cube\Models\Api;
use Nidavellir\Cube\Models\User;

class TestDataSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Database data structure creation.
         * Both will suport a user usage lifecycle:
         * =====
         * User registers into Nidavellir.
         * User subscribes after a certain period of time.
         * User creates at least one Api.
         * User uses the Api for some time, having alerts from TradingView
         * along time. Those alerts will trigger orders.
         * User will also disable a certain api, and the alerts will no longer
         * trigger orders.
         * User will after a certain moment possibly unsubscribe, but will
         * remain active.
         * Lifecycle timespan between 6 months to 1 year.
         */
        User::factory(50)->make()->each(function ($user) {

            // Generate user randomly created 6 months from now.
            $user->created_at = CarbonImmutable::now()
                                               ->subMonths(rand(1, 6))
                                               ->subDays(rand(1, 31))
                                               ->subHours(rand(1, 24))
                                               ->subMinutes(rand(1, 60))
                                               ->subSeconds(rand(1, 60));

            $user->saveQuietly();

            /**
             * All activity will happen beeteeen the user creation date
             * and now. First thing is the creation of N api's. These ones
             * are created inside the first 5% of duration.
             * As example, if a timespan is 100 days, then all N apis are
             * created inside the first 5 days (randomly). From these apis,
             * a random number of apis will be made active (at least one!).
             */

            // For better usage, all dates are used in seconds.
            $lifespan = now()->diffInSeconds($user->created_at);

            /**
             * The date timespan limit that will move forward on each
             * operation. Starts from created_at + 5% on this first case.
             */
            $pivot = CarbonImmutable::createFromTimestamp(
                $user->created_at
                     ->timestamp + $lifespan * 0.05
            );

            // Create N(5+) apis inside the first 5% lifespan.
            Api::factory(rand(1, 5))->make()->each(function ($api) use ($user, $lifespan) {

                $api->user_id = $user->id;
                $api->created_at = CarbonImmutable::createFromTimestamp(
                    $user->created_at->timestamp + rand(1, $lifespan * 0.05)
                );

                $api->saveQuietly();
            });

            /**
             * Alerts generator. For each api, generate a random number of
             * alerts during the duration of the api. If an api is enabled then
             * it will generate alerts until now(). If the api is disabled on
             * a certain moment of time, then alerts will be generated until
             * the moment the api is disabled. This will simulate the fact that
             * the user decided to disable an api so no more alerts can be
             * triggered for that api. Actually alerts can be triggered but
             * no order will be generated if the api is disabled.
             *
             * The alerts are not created via factories due to their
             * integration complexity.
             *
             * For now we just consider that all apis are active.
             */

            foreach (Api::all() as $api) {
                // How many alerts will be generated?
                $total = rand(1, 300);

                for ($i = 0; $i < $total; $i++) {
                }
            }
        });
    }

    protected function randomAction()
    {
    }

    protected function randomTicker()
    {
    }
}
