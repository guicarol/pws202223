<?php
require_once 'Controller.php';
require_once './models/Servico.php';

class LinhaobraController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['Funcionario', 'Cliente', 'Admin']);

    }

    public function index($folhaobra_id)
    {
        $folhaobra = Folhaobra::find($folhaobra_id);
        //mostrar a vista create
        /*if($servico_id!=0){
            $servico=Servico::find($servico_id);

            $folhaobra->ivatotal=($servico->iva->percentagem*$folhaobra->valortotal)/100;
            $linhaobra=Linhaobra::find('all', array('conditions' => "folhaobra_id LIKE '%$folhaobra_id'"));

            $this->renderView('linhasobra', 'create',['folhaobra'=>$folhaobra,'servico'=>$servico,'linhasobra'=>$linhaobra]);

        }else if ($servico_id==0||$servico_id==null){*/
        $this->renderView('linhasobra', 'index', ['folhaobra' => $folhaobra]);

//        }
    }

    public function create($folhaobra_id, $servico_id)
    {
        $folhaobra = Folhaobra::find($folhaobra_id);
        $servico = Servico::find($servico_id);

        //mostrar a vista create
        /*if($servico_id!=0){
            $servico=Servico::find($servico_id);

            $folhaobra->ivatotal=($servico->iva->percentagem*$folhaobra->valortotal)/100;
            $linhaobra=Linhaobra::find('all', array('conditions' => "folhaobra_id LIKE '%$folhaobra_id'"));

            $this->renderView('linhasobra', 'create',['folhaobra'=>$folhaobra,'servico'=>$servico,'linhasobra'=>$linhaobra]);

        }else if ($servico_id==0||$servico_id==null){*/
        $this->renderView('linhasobra', 'create', ['folhaobra' => $folhaobra, 'servico' => $servico]);

//        }
    }

    public function store($folhaobra_id, $servico_id)
    {
        $linhaobra = new Linhaobra($this->getHTTPPost());
        $linhaobra->folhaobra_id = $folhaobra_id;
        $linhaobra->servico_id = $servico_id;
        $servico = Servico::find($servico_id);
        $linhaobra->valor = $servico->precohora * $linhaobra->quantidade;

        if ($linhaobra->is_valid()) {
            $linhaobra->save();
            $folhaobra = Folhaobra::find($folhaobra_id);
            //$folhaobra->data=\Carbon\Carbon::now();
            //$quantidade=Linhaobra::find('quantidade', array('conditions' => "folhaobra_id LIKE '%$folhaobra_id'"));
            //foreach ($folhaobra->linhaobras as $linhaobra) {
                var_dump($linhaobra);
                $folhaobra->subtotal += $linhaobra->valor;
var_dump($folhaobra->subtotal);
                $folhaobra->ivatotal += ($servico->iva->percentagem * $folhaobra->subtotal) / 100;
          //  }
            $folhaobra->valortotal=$folhaobra->subtotal+$folhaobra->ivatotal;
           // die();

            $folhaobra->save();
            $this->redirectToRoute('linhasobra', 'index', ['folhaobra_id' => $folhaobra_id]);
        } else {
            $this->renderView('linhaobra', 'create', ['linhaobra' => $linhaobra]);
        }
    }

    public function edit($id)
    {
        $folhaobra = Folhaobra::find($id);
        if (is_null($folhaobra)) {
            //TODO redirect to standard error page
            header('Location:index.php?' . INVALID_ACCESS_ROUTE);

        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('linhasobra', 'index', ['folhaobra' => $folhaobra]);

        }
    }

    public function update($id)
    {

        $chapter = Linhaobra::find($id);
        $chapter->update_attributes($this->getHTTPPost());
        if ($chapter->is_valid()) {
            $chapter->save();
            //redirecionar para o index
            $this->redirectToRoute('chapter', 'index', ['id' => $chapter->book_id]);
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('chapter', 'edit', ['chapter' => $chapter]);

        }
    }

    public function delete($id)
    {
        $linhaobra = Linhaobra::find($id);
        $linhaobra->delete();
        //redirecionar para o index
        $this->redirectToRoute('linhasobra', 'create', ['folhaobra_id' => $linhaobra->folhaobra_id, 'servico_id' => $linhaobra->servico_id]);

    }
}

