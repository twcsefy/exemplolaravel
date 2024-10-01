<?php

namespace Tests\Unit;

use App\Models\Tarefa;
use Tests\TestCase;

class TarefaTest extends TestCase
{
    public function test_criar_tarefa_de_teste()
    {
        $tarefa = Tarefa::create([
            'titulo' => 'Tarefa de Teste',
            'descricao' => 'Criando uma tarefa de teste',
            'concluida' => false
        ]);

        $this->assertEquals('Tarefa de Teste', $tarefa->título);
        $this->assertEquals('Criando uma tarefa de teste', $tarefa->descricao);
        $this->assertFalse($tarefa->concluida);
    }
}
