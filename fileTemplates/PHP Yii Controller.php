<?php
#parse("PHP File Header.php")

class ${NAME} extends BaseController{
    public \$defaultAction = 'index';
    public \$menuSub = array(
        'items' => array(
            array('label' => 'Temp Label', 'url' => array('temController/tempAction')),
        )
    );
}