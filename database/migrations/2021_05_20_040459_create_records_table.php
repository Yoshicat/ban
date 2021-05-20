<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
	/**
	 * Run the migrations.
	 * @return void
	 */
	public function up()
	{
		Schema::create('records', function (Blueprint $table) {
			$table->id();
			$table->string('nickname');
			$table->unsignedBigInteger('moderator');
			$table->unsignedBigInteger('server');
			$table->unsignedBigInteger('rule');
			$table->unsignedBigInteger('punishment');
			$table->timestamp('upto');
			
			$table->foreign('moderator')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('server')->references('id')->on('servers')->onDelete('cascade');
			$table->foreign('rule')->references('id')->on('rules')->onDelete('cascade');
			$table->foreign('punishment')->references('id')->on('punishments')->onDelete('cascade');
			
			$table->timestamps();
		});
	}
	
	/**
	 * Reverse the migrations.
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('records');
	}
}
