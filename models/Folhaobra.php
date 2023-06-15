<?php

class Folhaobra extends \ActiveRecord\Model
{

    static $belongs_to = array(
        array('user'),
        array('cliente','class_name'=>'User','foreign_key'=>'cliente_id'),
        array('func','class_name'=>'User','foreign_key'=>'user_id')
    );

    static $has_many = array(
        array('linhaobras')
    );
}