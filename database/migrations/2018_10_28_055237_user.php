<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('users', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken()->nullable();
            $table->timestamps();

            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }

    /*
    命令                            描述
    $table->bigIncrements('id');    自增ID，类型为bigint
    $table->bigInteger('votes');    等同于数据库中的BIGINT类型
    $table->binary('data');     等同于数据库中的BLOB类型
    $table->boolean('confirmed');   等同于数据库中的BOOLEAN类型
    $table->char('name', 4);    等同于数据库中的CHAR类型
    $table->date('created_at');     等同于数据库中的DATE类型
    $table->dateTime('created_at');     等同于数据库中的DATETIME类型
    $table->decimal('amount', 5, 2);    等同于数据库中的DECIMAL类型，带一个精度和范围
    $table->double('column', 15, 8);    等同于数据库中的DOUBLE类型，带精度, 总共15位数字，小数点后8位.
    $table->enum('choices', ['foo', 'bar']);    等同于数据库中的 ENUM类型
    $table->float('amount');    等同于数据库中的 FLOAT 类型
    $table->increments('id');   数据库主键自增ID
    $table->integer('votes');   等同于数据库中的 INTEGER 类型
    $table->json('options');    等同于数据库中的 JSON 类型
    $table->jsonb('options');   等同于数据库中的 JSONB 类型
    $table->longText('description');    等同于数据库中的 LONGTEXT 类型
    $table->mediumInteger('numbers');   等同于数据库中的 MEDIUMINT类型
    $table->mediumText('description');  等同于数据库中的 MEDIUMTEXT类型
    $table->morphs('taggable');     添加一个 INTEGER类型的 taggable_id 列和一个 STRING类型的 taggable_type列
    $table->nullableTimestamps();   和 timestamps()一样但允许 NULL值.
    $table->rememberToken();    添加一个remember_token 列： VARCHAR(100) NULL.
    $table->smallInteger('votes');  等同于数据库中的 SMALLINT 类型
    $table->softDeletes();  新增一个 deleted_at列 用于软删除.
    $table->string('email');    等同于数据库中的 VARCHAR 列 .
    $table->string('name', 100);    等同于数据库中的 VARCHAR，带一个长度
    $table->text('description');    等同于数据库中的 TEXT 类型
    $table->time('sunrise');    等同于数据库中的 TIME类型
    $table->tinyInteger('numbers');     等同于数据库中的 TINYINT 类型
    $table->timestamp('added_on');  等同于数据库中的 TIMESTAMP 类型
    $table->timestamps();   添加 created_at和updated_at列.
    $table->uuid('id');     等同于数据库的UUID



Laravel 方法                       列的类型

timestamps()       timestamps()与timestamp()不同。它是一个 Laravel 用来管理创建和修改作为created_at和updated_at TIMESTAMP列的便利方法。他们是 Laravel 可以自己修改的两个特殊的数据库列。created_at列为仅当行被创建时当前时间戳。另一方面， updated_at被修改为每次操作的行的数据时当前时间戳。

nullable()     将指定列允许NULL值。默认情况下，Laravel 使在数据库级别需要通过添加NOT NULL约束的列。

default($value)  设置要用于新行作为初始值的列的默认值。你永远不需要显式设置的默认值为 null。不设置它默认值就为null。

unsigned()       设置INTEGER列为UNSIGNED。
    */
}
