<?php

use App\Models\ListItem;
use App\Models\TodoList;
use App\Models\User;
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
        Schema::create('list_item_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(ListItem::class);
            $table->foreignIdFor(TodoList::class);
            $table->foreignIdFor(User::class, 'assigned_to');
            $table->timestamp('completed_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_item_user');
    }
};
