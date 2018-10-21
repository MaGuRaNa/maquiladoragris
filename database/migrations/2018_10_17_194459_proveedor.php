<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedor extends Migration
{
    
    public function up()
    {
       Schema::create('Proveedor', function (Blueprint $table) {
            $table->increments('Id_prov');
		    $table->string('Ap_pprov');
			$table->string('Ap_mprov');
			$table->string('RFC_prov');
			
            $table->integer('Id_empresa')->unsigned();
		    $table->foreign('Id_empresa')->references('Id_empresa')->on('Empresa');
					
			$table->rememberToken();
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
         Schema::drop('Proveedor');
    }
}
