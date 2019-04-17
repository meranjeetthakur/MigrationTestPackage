<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Ranjeet\TestMigration;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProcessCommand extends Command
{
    protected $signature = 'ranjeet:process';
    
    protected $description = 'add migrations';
    
    public function handle()
    {
        $this->runMigration();
    }
    
    
    public function runMigration()
    {
        
        if(Schema::hasTable('products'))
        {
            Schema::create('carts', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('user_id');
            $table->string('product_id');
            $table->timestamps();
            });
        }
        else 
        {
            Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('description');
            $table->timestamps();
            });
            
            Schema::create('carts', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('user_id');
            $table->string('product_id');
            $table->timestamps();
            });
        }
       
    }
}