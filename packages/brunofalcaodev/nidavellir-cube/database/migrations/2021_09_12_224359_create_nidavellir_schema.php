<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Nidavellir\Database\Seeders\InitialDataSeeder;

class CreateNidavellirSchema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apis', function (Blueprint $table) {
            $table->id();

            $table->text('description')
                  ->nullable()
                  ->comment('A humanable description of what is this api used for');

            $table->foreignId('exchange_id')
                  ->constrained()
                  ->comment('The relatable Exchange that this api instance belongs to');

            $table->foreignId('user_id')
                  ->constrained()
                  ->comment('The relatable User that his api instance belongs to');

            $table->string('api_key')
                  ->nullable()
                  ->comment('The API key returned from the exchange api creation');

            $table->string('api_secret')
                  ->nullable()
                  ->comment('The API secret returned from the exchange api creation');

            $table->string('api_passphrase')
                  ->nullable()
                  ->comment('The API key returned from the exchange api creation');

            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'MyISAM';
        });

        Schema::create('tokens', function (Blueprint $table) {
            $table->id();

            $table->string('name')
                  ->comment('The token technical symbol name (e.g.: Cardano)');

            $table->string('canonical')
                  ->comment('The token canonical symbol (e.g.: ADA)');

            $table->string('site_url')
                  ->comment('The site url');

            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'MyISAM';
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'MyISAM';
        });

        Schema::create('alerts', function (Blueprint $table) {
            $table->id();

            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'MyISAM';
        });

        Schema::create('exchanges', function (Blueprint $table) {
            $table->id();

            $table->string('name')
                  ->unique()
                  ->comment('Exchange name');

            $table->string('canonical')
                  ->unique()
                  ->comment('Exchange canonical name used in queries');

            $table->string('site_url')
                  ->unique()
                  ->nullable()
                  ->comment('Exchange site URL');

            $table->string('api_url')
                  ->unique()
                  ->nullable()
                  ->comment('Exchange API URL');

            $table->string('sandbox_api_url')
                  ->unique()
                  ->nullable()
                  ->comment('Exchange sandbox API URL');

            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'MyISAM';
        });

        $seeder = new InitialDataSeeder();
        $seeder->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nidavellir_schema');
    }
}
