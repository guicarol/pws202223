<?php
class EmpresaController extends Controller
{
    public function index()
    {
        if (Empresas::all() == null){
            $this->renderView('empresa','create');
        }
        else{
            $empresas = Empresas::all();
            $this->renderView('empresa','index',['empresas' => $empresas]);
        }
    }

    public function create(){
        if (Empresas::all() == null){
            $this->renderView('empresa','create');
        }
        else{
            $empresas = Empresas::all();
            $this->renderView('empresa','index',['empresas' => $empresas]);
        }
    }

    public function show($id)
    {
        $empresa = Empresas::find($id);

        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('empresa','show', ['empresa' => $empresa]);
        }
    }

    public function edit($id)
    {
        $empresa = Empresas::find($id);
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('empresa','edit', ['empresa' => $empresa]);
        }
    }

    public function update($id)
    {
        $empresa = Empresas::find($id);
        $empresa->update_attributes($_POST);
        if($empresa->is_valid()){
            $empresa->save();
            //redirecionar para o index
            $empresas = Empresas::all();
            $this->renderView('empresa','index', ['empresas' => $empresas]);
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('empresa','edit', ['empresa' => $empresa]);
        }
    }



    public function store()
    {
        $empresa = new Empresas($this->getHTTPPost());
        if ($empresa->is_valid()) {
            $empresa->save();
            $this->redirectToRoute('empresa', 'index');
        } else {
            $this->renderView('empresa', 'create', ['empresa' => $empresa]);
        }
    }
}
