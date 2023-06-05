<?php
require_once 'Controller.php';
require_once './models/Servico.php';

class LinhaobraController extends AuthController
{
    public function __construct()
    {
        $this->authorizationFilter(['Funcionario','Cliente','Admin']);

    }
    public function create($folhaobra_id,$servico_id)
    {
        $folhaobra=Folhaobra::find($folhaobra_id);
        //mostrar a vista create
        if($servico_id!=0){
            $quantidade=Linhaobra::find('quantidade', array('conditions' => "folhaobra_id LIKE '%$folhaobra_id'"));
            $servico=Servico::find($servico_id);
            $folhaobra->valortotal=$servico->precohora*$quantidade->quantidade;
            $folhaobra->ivatotal=($servico->iva->percentagem*$folhaobra->valortotal)/100;
            $linhaobra=Linhaobra::find('all', array('conditions' => "folhaobra_id LIKE '%$folhaobra_id'"));

            $this->renderView('linhasobra', 'create',['folhaobra'=>$folhaobra,'servico'=>$servico,'linhasobra'=>$linhaobra]);

        }else{
            $this->renderView('linhasobra', 'create',['folhaobra'=>$folhaobra,'servico'=>$servico,'linhasobra'=>0]);

        }
    }

    public function store($folhaobra_id,$servico_id){
        $linhaobra = new Linhaobra($this->getHTTPPost());
        $linhaobra->folhaobra_id=$folhaobra_id;
        $linhaobra->servico_id=$servico_id;
        $servico=Servico::find($servico_id);

        if($linhaobra->is_valid()){
            $linhaobra->save();
            $folhaobra=Folhaobra::find($folhaobra_id);
            $folhaobra->data=\Carbon\Carbon::now();
            $folhaobra->valortotal=$servico->precohora*$linhaobra->quantidade;
            $folhaobra->ivatotal=($servico->iva->percentagem*$folhaobra->valortotal)/100;
            $folhaobra->save();
            $this->redirectToRoute('linhasobra','create',['folhaobra_id'=>$folhaobra_id,'servico_id'=>$servico_id]);
        } else {
            $this->renderView('linhaobra', 'create', ['linhaobra'=>$linhaobra]);
        }
    }

    public function edit($id)
    {
        $chapter = Linhaobra::find($id);
        if (is_null($chapter)) {
            //TODO redirect to standard error page
            header('Location:index.php?' . INVALID_ACCESS_ROUTE);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('chapter', 'edit', ['chapter' => $chapter]);

        }
    }
    public function update($id)
    {

        $chapter = Linhaobra::find($id);
        $chapter->update_attributes($this-> getHTTPPost());
        if($chapter->is_valid()){
            $chapter->save();
            //redirecionar para o index
            $this->redirectToRoute('chapter','index',['id'=>$chapter->book_id]);
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('chapter', 'edit', ['chapter' => $chapter]);

        }
    }
    public function delete($id)
    {
        $chapter = Linhaobra::find($id);
        $chapter->delete();
        //redirecionar para o index
        $this->redirectToRoute('chapter','index');

    }
}

