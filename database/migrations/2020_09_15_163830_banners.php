<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Banners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
			$table->id(); //ID ÚNICO
			$table->boolean('active'); //ATIVO/INATIVO
			$table->string('title', 120); //TÍTULO			
			$table->longText('description')->nullable(); //DESCRIÇÃO	
			$table->enum('window_type', ['new_tab', 'new_window', 'current_tab']); //TIPO DE JANELA
			$table->enum('content_type', ['content_pdf','internal_link','external_link','video_youtube','video_vimeo','content_html']);	//TIPO DE CONTEÚDO	
			$table->Integer('view_order'); //ORDEM DE VISUALIZAÇÃO
			$table->string('internal_link', 200)->nullable(); //LINK DE CONTEÚDO INTERNO	
			$table->string('external_link', 200)->nullable(); //LINK DE CONTEÚDO EXTERNO		
			$table->longText('internal_content')->nullable(); //CONTEÚDO INTERNO
			$table->longText('content_html')->nullable(); //CONTEÚDO EM HTML
			$table->string('banner_img_fileurl'); //BANNER IMG
			$table->longText('permission_users')->nullable(); //PERMISSÕES POR PERFIL DE USUÁRIO	
			$table->longText('permission_location')->nullable(); //PERMISSÃO DE LOCALIDADE (SÃO PAULO, INTERIOR, TODAS)		
			$table->longText('permission_serie')->nullable(); //PERMISSÃO CÓDIGO DA ESCOLA				
			$table->longText('permission_school')->nullable(); //PERMISSÃO CÓDIGO DA ESCOLA				
			$table->dateTime('date_start'); //DATA INICIAL		
			$table->dateTime('date_end');//DATA FINAL
			
			$table->timestamps(); //ADD CREAT AT E UPDATE AT
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
