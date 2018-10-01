<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToEmployeesTable extends Migration
{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::table('employees', function (Blueprint $table) {
				//
				$table->string('position')->nullable();
				$table->string('street')->nullable();
				$table->string('colonia')->nullable();
				$table->string('city')->nullable();
				$table->string('state')->nullable();
				$table->integer('zip')->nullable();
				$table->string('phone')->nullable();
				$table->string('aditional_phone')->nullable();
				$table->string('cellphone')->nullable();
				$table->string('section')->nullable();
				$table->integer('payroll')->nullable();
				$table->string('contact_email')->nullable();

				/*rh fields*/
				$table->string('sgmm')->nullable();
				$table->string('rfc')->nullable();
				$table->string('imss')->nullable();
				$table->string('inactive_date')->nullable();
				$table->string('foreign')->nullable();
				$table->string('identification')->nullable();
				$table->integer('id_number')->nullable();
				$table->string('infonavit')->nullable();
				$table->string('psi_exam')->nullable();
				$table->string('fm')->nullable();
				$table->integer('no_fm')->nullable();
				$table->string('exp_date')->nullable();
				$table->string('date_carta')->nullable();
				$table->string('date_lexis')->nullable();
				$table->string('marital_status')->nullable();
				
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
				Schema::table('employees', function (Blueprint $table) {
						//
				});
		}
}
