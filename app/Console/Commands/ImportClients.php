<?php
namespace App\Console\Commands;
use Storage;
use App\Models\Client;
use Illuminate\Console\Command;

class ImportClients extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'import:clients';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Import clients from a json file';

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
   * @return int
   */
  public function handle()
  {
    $clients = Storage::get('/imports/clients.json');
    $clients = json_decode($clients, true);
    foreach($clients as $client)
    {
      Client::create($client);
    }
  }
}
