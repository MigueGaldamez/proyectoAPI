<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_tratamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_tratamiento',30);
            $table->string('via_administracion',30);
            $table->timestamps();
        });
        Schema::create('propietario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_propietario',50);
            $table->string('apellido_propietario',50);
            $table->string('telefono_propietario',9);
            $table->string('direccion_propietario',200);
            $table->string('correo_propietario',50);
            $table->timestamps();
        });
        Schema::create('especie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('especie',50);
            $table->timestamps();
        });
        Schema::create('mascota', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_propietario');
            $table->unsignedInteger('id_especie');
            $table->foreign('id_propietario')->references('id')->on('propietario')->onDelete('cascade');
            $table->foreign('id_especie')->references('id')->on('especie')->onDelete('cascade');
            $table->tinyInteger('sexo');
            $table->string('raza',50);
            $table->string('color',30);
            $table->string('nombre',30);
            $table->date('fecha_nacimiento');
            $table->decimal('peso',5,2);
            $table->tinyInteger('esterilizado');
            $table->timestamps();
        });
        Schema::create('expediente', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_mascota');
            $table->foreign('id_mascota')->references('id')->on('mascota')->onDelete('cascade');
            $table->date('fecha_creacion');
            $table->timestamps();
        });
        Schema::create('padecimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_expediente');
            $table->foreign('id_expediente')->references('id')->on('expediente')->onDelete('cascade');
            $table->string('padecimiento',50);
            $table->string('observaciones_padecimiento',200);
            $table->date('fecha_deteccion');
            $table->string('medicamento',100);
            $table->timestamps();
        });
        Schema::create('examen', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_expediente');
            $table->foreign('id_expediente')->references('id')->on('expediente')->onDelete('cascade');
            $table->string('nombre_examen',50);
            $table->date('fecha_examen');
            $table->time('hora_examen');
            $table->string('responsable',50);
            $table->string('observaciones',200);
            $table->timestamps();
        });
        Schema::create('tratamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_tipo_tratamiento');
            $table->foreign('id_tipo_tratamiento')->references('id')->on('tipo_tratamiento')->onDelete('cascade');
            $table->string('nombre_comercial',50);
            $table->string('descripcion',200);
            $table->tinyInteger('disponibilidad');
            $table->string('nombre_generico',50);
            $table->string('cantidad_unidades',10);
            $table->string('laboratorio_fabricante',50);
            $table->date('fecha_vencimiento');
            $table->integer('numero_lote');
            $table->timestamps();
        });
        Schema::create('servicio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('servicio',50);
            $table->string('descripcion_servicio',100)->nullable()->default('NULL');
            $table->timestamps();
        });
        Schema::create('vacunas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_expediente');
            $table->foreign('id_expediente')->references('id')->on('expediente')->onDelete('cascade');
            $table->unsignedInteger('id_tratamiento');
            $table->foreign('id_tratamiento')->references('id')->on('tratamiento')->onDelete('cascade');
            $table->date('fecha_vacunacion');
            $table->string('observaciones_vacunacion',200);
            $table->timestamps();
        });
        Schema::create('permiso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('permiso',50);
            $table->string('url',200);
            $table->timestamps();
        });
        Schema::create('rol', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rol',50);
            $table->timestamps();
        });
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombre_usuario',50);
            $table->string('clave',200);
            $table->timestamps();
        });
        Schema::create('user_has_role', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->unsignedInteger('id_usuario');
            $table->foreign('id_rol')->references('id')->on('rol')->onDelete('cascade');
            $table->unsignedInteger('id_rol');
            $table->timestamps();
        });
        Schema::create('user_has_permission', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_permiso')->references('id')->on('permiso')->onDelete('cascade');
            $table->unsignedInteger('id_permiso');
            $table->foreign('id_rol')->references('id')->on('rol')->onDelete('cascade');
            $table->unsignedInteger('id_rol');
            $table->timestamps();
        });
        Schema::create('veterinario', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('cascade');
            $table->unsignedInteger('id_usuario');
            $table->string('num_veterinario',10);
            $table->string('nombre_veterinario',50);
            $table->string('apellido_veterinario',50);
            $table->date('fecha_nacimient');
            $table->date('fecha_contratacion')->nullable();
            $table->string('telefono_veterinario',9)->nullable()->default('NULL');
            $table->string('direccion_veterinario',200)->nullable()->default('NULL');
            $table->timestamps();
        });
        Schema::create('consulta', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_expediente');
            $table->foreign('id_expediente')->references('id')->on('expediente')->onDelete('cascade');
            $table->unsignedInteger('id_veterinario');
            $table->foreign('id_veterinario')->references('id')->on('veterinario')->onDelete('cascade');
            $table->date('fecha_consulta');
            $table->time('hora_consulta');
            $table->timestamps();
        });
        Schema::create('detalle_consulta', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_consulta');
            $table->foreign('id_consulta')->references('id')->on('consulta')->onDelete('cascade');
            $table->unsignedInteger('id_servicio');
            $table->foreign('id_servicio')->references('id')->on('servicio')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('tratamiento_asignado', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_detalle_consulta');
            $table->foreign('id_detalle_consulta')->references('id')->on('detalle_consulta')->onDelete('cascade');
            $table->unsignedInteger('id_tratamiento');
            $table->foreign('id_tratamiento')->references('id')->on('tratamiento')->onDelete('cascade');
            $table->string('detalles_aplicacion',200)->nullable()->default('NULL');
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
        Schema::dropIfExists('tipo_tratamiento');
        Schema::dropIfExists('propietario');
        Schema::dropIfExists('especie');
        Schema::dropIfExists('mascota');
        Schema::dropIfExists('expediente');
        Schema::dropIfExists('padecimiento');
        Schema::dropIfExists('examen');
        Schema::dropIfExists('tratamiento');
        Schema::dropIfExists('servicio');
        Schema::dropIfExists('rol');
        Schema::dropIfExists('permiso');
        Schema::dropIfExists('vacunas');
        Schema::dropIfExists('usuario');
        Schema::dropIfExists('user_has_role');
        Schema::dropIfExists('user_has_permission');
        Schema::dropIfExists('veterinario');
        Schema::dropIfExists('consulta');
        Schema::dropIfExists('detalle_consulta');
        Schema::dropIfExists('tratamiento_asignado');
    }
};
