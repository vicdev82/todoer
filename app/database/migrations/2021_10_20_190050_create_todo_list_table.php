<?php

use App\Models\Author;
use App\Models\TodoTask;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoListTable extends Migration
{
    public function up() {
        Schema::create('todoList', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Author::class, `author`);
            $table->foreignIdFor(TodoTask::class, `tasks`);
            $table->softDeletes();
        });
    }
}
