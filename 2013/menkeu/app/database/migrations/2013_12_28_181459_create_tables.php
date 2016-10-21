<?php

use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->engine = 'InnoDB';
			
			$table->increments('id');
			$table->string('email', 100);
			$table->string('passwd', 100);
			$table->string('fullname', 50);
			$table->smallInteger('level');
			$table->boolean('active');
			$table->timestamps();

			$table->unique('email');
		});

		Schema::create('accounts', function($table){
			$table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('accName');
			$table->text('description');
			$table->enum('type', array('dompet','bank','kredit'));
			$table->unsignedInteger('user_id');			
			$table->timestamps();
		});

		Schema::create('categories', function($table){
			$table->engine = 'InnoDB';
			
			$table->increments('id');
			$table->string('name');
			$table->unsignedInteger('parent');
			$table->timestamps();
		});

		Schema::create('transactions', function($table){
			$table->engine = 'InnoDB';
			
			$table->increments('id');
			$table->string('name', 100);
			$table->decimal('amount', 10, 2);
			$table->enum('type', array('in','out','transfer'));
			$table->date('day');
			$table->unsignedInteger('cat_id');
			$table->unsignedInteger('acc_id');
			
			$table->timestamps();
		});

		// Schema::table('accounts', function($table)
		// {
		//   $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
		// });

		// Schema::table('transactions', function($table)
		// {
		//   $table->foreign('cat_id')->references('id')->on('categories')->onDelete('restrict');
		// 	$table->foreign('acc_id')->references('id')->on('account')->onDelete('restrict');
		// });		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transactions', function($table){
			$table->drop('transactions');
		});

		Schema::table('accounts', function($table){
			$table->drop('accounts');
		});

		Schema::table('users', function($table){
			$table->drop('users');
		});			

		Schema::table('categories', function($table){
			$table->drop('categories');
		});
		
	}

}