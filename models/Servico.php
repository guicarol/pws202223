<?php

class Servico extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('referencia'),
        array('descricao', 'message' => 'It must be provided'),
        array('precohora', 'message' => 'It must be provided')
    );

    static $belongs_to = array(
        array('iva')
    );

}