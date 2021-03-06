<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeIngredientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipe_ingredients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('recipe_id');
			//$table->foreign('recipe_id')->references('id')->on('recipes');
			$table->integer('ingredient_id');
			//$table->foreign('ingredient_id')->references('id')->on('ingredients');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recipe_ingredients');
	}

}
