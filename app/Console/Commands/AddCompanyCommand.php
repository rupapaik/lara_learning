<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Company;
class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new company';

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
      $name = $this->ask('What Is The Company Name ?');
      $phone = $this->ask('What Is The Company\'s phone number ?');

      if($this->confirm('Are You Ready To Insert "'.$name.'"?')){
        $company = Company::create([
          'name' => $name,
          'phone' => $phone,
        ]);
      return  $this->info('Added:' .$company->name);
      }
       $this->warn('No New Company Was Added');
      // $this->info($phone);
      // $this->info($name);


      //anything can pass...

      // $this->info('Info String here');
      // $this->warn('Info String warning');
      // $this->error('Info String error');
    }
}
