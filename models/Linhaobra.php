<?php

class Linhaobra extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('quantidade', 'message' => 'Campo Obrigatorio'),
        array('valor', 'message' => 'Campo Obrigatorio'),
        array('servicos_id', 'message' => 'Campo Obrigatorio'),

    );

    static $belongs_to = array(
        array('servico'),
        array('folhaobra')
    );

}