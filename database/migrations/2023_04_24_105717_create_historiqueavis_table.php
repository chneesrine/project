<?php
use App\Models\Appariel;
use App\Models\Emplacement;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriqueavisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiqueavis', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('Avis');
            $table->foreignIdFor(Appariel::class);
            $table->foreignIdFor(Emplacement::class);
            //$table->date('Date_Heure');
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
        Schema::dropIfExists('historiqueavis');
    }
}
