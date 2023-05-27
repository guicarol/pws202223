<?php

class Chapter extends \ActiveRecord\Model
{
    static $belongs_to = array(
        array('servico')
    );

}