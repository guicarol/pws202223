<?php
require_once 'Controller.php';
require_once './models/Servico.php';

class ChapterController extends Controller
{
    public function index($id)
    {
        $book = Book::find($id);
        $this->renderView('chapter', 'index', ['servico' => $book]);
    }

    public function create($id)
    {
        //mostrar a vista create
        $book = Book::find($id);
        $this->renderView('chapter', 'create',['servico'=>$book]);


    }

    public function store(){
        $chapter = new Chapter($this-> getHTTPPost());
        if($chapter->is_valid()){
            $chapter->save();
            $this->redirectToRoute('chapter','index',['id'=>$chapter->book_id]);
        } else {
            $this->renderView('chapter', 'create', ['chapter'=>$chapter]);
        }
    }

    public function edit($id)
    {
        $chapter = Chapter::find($id);
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

        $chapter = Chapter::find($id);
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
        $chapter = Chapter::find($id);
        $chapter->delete();
        //redirecionar para o index
        $this->redirectToRoute('chapter','index');

    }
}