<?php
#parse("PHP File Header.php")

#if (${NAMESPACE})

namespace ${NAMESPACE};

#end

use yii\web\Controller;

class ${NAME} extends Controller {
    public \$defaultAction = 'index';
    
} 