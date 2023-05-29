<?php
require_once 'Controller.php';
require_once './models/Servico.php';
require_once './models/Folhaobra.php';

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('servico', 'index', ['servicos' => $servicos]);

    }

    public function show($id)
    {
        $servico = Servico::find($id);
        if (is_null($servico)) {
            //TODO redirect to standard error page
            header('Location:index.php?' . INVALID_ACCESS_ROUTE);

        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('servico', 'show', ['servico' => $servico]);

        }
    }

    public function create()
    {
        $ivas=Iva::all();
        //mostrar a vista create
        $this->renderView('servico', 'create',['ivas'=>$ivas]);


    }

    public function store()
    {
        $ivas=Iva::all();

        $servico = new Servico($this->getHTTPPost());
        if ($servico->is_valid()) {
            $servico->save();

            //redirecionar para o index
            $this->redirectToRoute('servico', 'index');

        } else {
            $this->renderView('servico', 'create', ['servico' => $servico,'ivas'=>$ivas]);

            //mostrar vista create passando o modelo como parâmetro
        }
    }

    public function edit($id)
    {
        $ivas=Iva::all();

        $servico = Servico::find($id);
        if (is_null($servico)) {
            //TODO redirect to standard error page
            header('Location:index.php?' . INVALID_ACCESS_ROUTE);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('servico', 'edit', ['servico' => $servico,'ivas'=>$ivas]);

        }
    }


    public function update($id)
    {
        $book = Book::find($id);
        $book->update_attributes($this-> getHTTPPost());
        if($book->is_valid()){
            $book->save();
            //redirecionar para o index
            $this->redirectToRoute('servico','index');
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('servico', 'edit', ['servico' => $book]);

        }
    }
    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        //redirecionar para o index
        $this->redirectToRoute('servico','index');

    }

    public function escolha_servico($folhaobra_id)
    {
        if (isset($_POST['pesquisa'])){
            $pesquisa = $_POST['pesquisa'];
        } else {
            $pesquisa = '';
        }
        $servicos = Servico::find('all', array('conditions' => "descricao LIKE '%$pesquisa%'"));

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('servico', 'escolha_servico', ['servicos' => $servicos, 'folhaobra_id' => $folhaobra_id]);
    }
}