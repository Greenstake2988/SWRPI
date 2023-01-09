<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-backend',
    'name' => 'Sistema Web para Registro de Proyectos de Investigación',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'colaborador' => [
            'class' => 'backend\modules\colaborador\Colaborador',
        ],
        'cronogramadeactividades' => [
            'class' => 'backend\modules\cronogramadeactividades\Cronogramadeactividades',
        ],
        'entregablemeta' => [
            'class' => 'backend\modules\entregablemeta\Entregablemeta',
            ],
         'fechadeproyecto' => [
            'class' => 'backend\modules\fechadeproyecto\Fechadeproyecto',
        ],
        'formatos' => [
            'class' => 'backend\modules\formatos\Formatos',
        ],
         'gradoacademico' => [
            'class' => 'backend\modules\gradoacademico\Gradoacademico',
        ],
        'licenciaturainvolucrada' => [
            'class' => 'backend\modules\licenciaturainvolucrada\Licenciaturainvolucrada',
        ],
        'lineadeinvestigacion' => [
            'class' => 'backend\modules\lineadeinvestigacion\Lineadeinvestigacion',
        ],
         'membretes' => [
            'class' => 'backend\modules\membretes\Membretes',
        ],
         'perfil' => [
            'class' => 'backend\modules\perfil\Perfil',
        ],
        'periodos' => [
            'class' => 'backend\modules\periodos\Periodos',
        ],
          'proyectosexternos' => [
            'class' => 'backend\modules\proyectosexternos\Proyectosexternos',
        ],
        'proyectosinternos' => [
            'class' => 'backend\modules\proyectosinternos\Proyectosinternos',
        ],
        'proyectosinternos_has_licenciaturainvolucrada' => [
            'class' => 'backend\modules\proyectosinternos_has_licenciaturainvolucrada\Proyectosinternos_has_licenciaturainvolucrada',
        ],
          'proyectosinternos_has_lineadeinvestigacion' => [
            'class' => 'backend\modules\proyectosinternos_has_lineadeinvestigacion\Proyectosinternos_has_lineadeinvestigacion',
        ],
        'reportes' => [
            'class' => 'backend\modules\reportes\Reportes',
        ],
        'rol' => [
            'class' => 'backend\modules\rol\Rol',
        ],
         'user' => [
            'class' => 'backend\modules\user\User',
        ],
//termino de modules

    ],
    'components'=>array(
        'authManager'=>array(
            "class"=>"CDbAuthManager",
            "conntionID"=>"db",
        ),
        'user'=>array(
        // enable cookie-based authentication
            'allowAutoLogin'=>true,

            'class' => 'WebUser',
    )
    ),
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
