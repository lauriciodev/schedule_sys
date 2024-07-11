# schedule_sys

sistema de agendamento de tarefas e eventos com a framework novel

Duvidas

1\_ footer deve ser insedido em cada pagina criada ?;

2_como deve ser inserido parametros de url?°;

3\_ como deve ser inserido as rotas;?

==========================================
anotaçoes
==========================================

update

public function update(int $pat_id, $body){
return $this->my->update("bp_patient", $body, [
"pat_id" => $pat_id
]);
}
