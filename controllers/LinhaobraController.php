<?php
require_once 'Controller.php';
require_once './models/Servico.php';

class LinhaobraController extends Controller
{

    public function create($id_servico,$id_folhaobra)
    {
        $servico=Servico::find($id_servico);
        $folhaobra=Folhaobra::find($id_folhaobra);
        //mostrar a vista create
        $this->renderView('linhasobra', 'create',['servico'=>$servico,'folhaobra'=>$folhaobra]);


    }

    public function store(){
        $chapter = new Linhaobra($this-> getHTTPPost());
        if($chapter->is_valid()){
            $chapter->save();
            $this->redirectToRoute('chapter','index',['id'=>$chapter->book_id]);
        } else {
            $this->renderView('chapter', 'create', ['chapter'=>$chapter]);
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

