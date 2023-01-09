<?php
namespace components;
use yii;

class menu {
    public function Creamenu ($id){
        if ($id !=1){
        $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Perfiles', 'url' => ['/perfil/perfil/index']],
        ['label' => 'Proyectos', 'url'=>['#'],
        'template'=>'<a href="{url}" >{label}<i class= "fa fa-angle-left pull-right"></i></a>',
        'items'=>[
        ['label' => 'Proyectos Internos', 'url' => ['/proyectosinternos/proyectosinternos/index']],
        ['label' => 'Proyectos Externos', 'url' => ['/proyectosexternos/proyectosexternos/index']],
        ],],
        ['label' => 'cerrar sesion(' . Yii::$app->user->identity->email. ')','url' => ['/site/logout']],
    

        ];
    } else{

        $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Proyectos', 'url'=>['#'],
        'template'=>'<a href="{url}" >{label}<i class= "fa fa-angle-left pull-right"></i></a>',
        'items'=>[
        ['label' => 'Proyectos Internos', 'url' => ['/proyectosinternos/proyectosinternos/index']],
        ['label' => 'Proyectos Externos', 'url' => ['/proyectosexternos/proyectosexternos/index']],
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
	['label' => 'Fecha De Proyectos', 'url' => ['/fechadeproyecto/fechadeproyecto/index']],
        ['label' => 'Periodos', 'url' => ['/periodos/periodos/index']],
        
        ],],


        ['label' => 'Academico', 'url'=>['#'],
        'template'=>'<a href="{url}" >{label}<i class= "fa fa-angle-left pull-right"></i></a>',
        'items'=>[
        ['label' => 'Grado Academico', 'url' => ['/gradoacademico/gradoacademico/index']],
        ['label' => 'Lineas de Investigación', 'url' => ['/lineadeinvestigacion/lineadeinvestigacion/index']],
        ['label' => 'Licenciatura Involucradas', 'url' => ['/licenciaturainvolucrada/licenciaturainvolucrada/index']],
        ],],

        ['label' => 'cerrar sesion(' . Yii::$app->user->identity->username. ')','url' => ['/site/logout']],
        ];
    }
    return $menuItems;
    }
} 
