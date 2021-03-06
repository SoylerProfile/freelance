<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

// MY
require dirname(__DIR__) . '/../../vendor/autoload.php';

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\BaseSocket;


class ChatServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'chat_server:serve';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'That command will make a based on sockets chat for users';

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
    public function handle()
    {
        $this->info('Start server');

        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new BaseSocket()
                )
            ),
            8081
        );

        $server->run();
    }
}
