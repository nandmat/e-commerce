<?php

use App\Models\Categoria;
use App\Models\Produto;
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
        $cat = new Categoria(['categoria' => "Geral"]);
        $cat->save();

        $produ1 = new Produto(['nome' => 'Produto 1', 'valor' => 10, 'foto' => 'images/produto01.jpg', 'descricao'=>'', 'categoria_id' => $cat->id]);
        $produ1->save();

        $produ2 = new Produto(['nome' => 'Produto 2', 'valor' => 10, 'foto' => 'images/produto02.jpg', 'descricao'=>'', 'categoria_id' => $cat->id]);
        $produ2->save();

        $produ3 = new Produto(['nome' => 'Produto 3', 'valor' => 10, 'foto' => 'images/produto03.jpg', 'descricao'=>'', 'categoria_id' => $cat->id]);
        $produ3->save();

        $produ4 = new Produto(['nome' => 'Produto 4', 'valor' => 10, 'foto' => 'images/produto04.jpg', 'descricao'=>'', 'categoria_id' => $cat->id]);
        $produ4->save();

        $produ5 = new Produto(['nome' => 'Produto 5', 'valor' => 10, 'foto' => 'images/produto05.jpg', 'descricao'=>'', 'categoria_id' => $cat->id]);
        $produ5->save();

        $produ6 = new Produto(['nome' => 'Produto 6', 'valor' => 10, 'foto' => 'images/produto06.jpg', 'descricao'=>'', 'categoria_id' => $cat->id]);
        $produ6->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
