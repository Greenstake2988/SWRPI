<?php 
namespace backend\controllers; 
use Yii; 
use yii\web\Controller; 
use common\models\AccessHelpers; 
 
class BaseController extends Controller { 
 
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
            'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index','create','update','view'],
                        'rules' => [
                            // allow authenticated users
                            [
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                            // everything else is denied
                        ],
                    ],            
        ];
    }
}

$itemAdmin = [
            ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Proyectos', 'url'=>['#'],
        'template'=>'<a href="{url}" >{label}<i class= "fa fa-angle-left pull-right"></i></a>',
        'items'=>[
        ['label' => 'Proyectos Internos', 'url' => ['/proyectosinternos/proyectosinternos/index']],
        ['label' => 'Proyectos Externos', 'url' => ['/proyectosexternos/proyectosexternos/index']],
        ['label' => 'Colaborador', 'url' => ['/colaborador/colaborador/index']],
        ['label' => 'Cronograma de Actividades', 'url' => ['/cronogramadeactividades/cronogramadeactividades/index']],
        ],],

        ['label' => 'Usuarios', 'url'=>['#'],
        'template'=>'<a href="{url}" >{label}<i class= "fa fa-angle-left pull-right"></i></a>',
        'items'=>[
        ['label' => 'Perfiles', 'url' => ['/perfil/perfil/index']],
        ['label' => 'Roles', 'url' => ['/rol/rol/index']],
        ['label' => 'Usuarios', 'url' => ['/user/user/index']],
        ],],

        ['label' => 'Formatos', 'url'=>['#'],
        'template'=>'<a href="{url}" >{label}<i class= "fa fa-angle-left pull-right"></i></a>',
        'items'=>[
        ['label' => 'Membretes', 'url' => ['/membretes/membretes/index']],
        ['label' => 'Periodos', 'url' => ['/periodos/periodos/index']],
        ['label' => 'Fecha De Proyectos', 'url' => ['/fechadeproyecto/fechadeproyecto/index']],
        ],],


        ['label' => 'Academico', 'url'=>['#'],
        'template'=>'<a href="{url}" >{label}<i class= "fa fa-angle-left pull-right"></i></a>',
        'items'=>[
        ['label' => 'Grado Academico', 'url' => ['/gradoacademico/gradoacademico/index']],
        ['label' => 'Lineas de Investigación', 'url' => ['/lineadeinvestigacion/lineadeinvestigacion/index']],
        ['label' => 'Licenciatura Involucradas', 'url' => ['/licenciaturainvolucrada/licenciaturainvolucrada/index']],
        ],],

        ];