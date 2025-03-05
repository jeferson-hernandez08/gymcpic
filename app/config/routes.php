<?php
return [
    "/" => [
        'controller' => 'App\Controllers\HomeController',
        'action' => 'index'
    ],
    '/home'  => [
        'controller' => 'App\Controllers\HomeController',
        'action' => 'index'
    ],
    '/hello' => [
        'controller' => 'App\Controllers\HomeController',
        'action' => 'index'
    ], 

    // rol
    '/rol/index' => [
        'controller' => 'App\Controllers\RolController',
        'action' => 'index'
    ], 
    '/rol/view' => [
        'controller' => 'App\Controllers\RolController',
        'action' => 'view'
    ], 
    '/rol/new' => [
        'controller' => 'App\Controllers\RolController',
        'action' => 'newRol'     // Nombre de la funcion 
    ], 
    '/rol/create'=> [
        'controller' =>'App\Controllers\RolController',
        'action' => 'createRol'
    ],
    '/rol/view/(\d+)'=> [
        'controller' =>'App\Controllers\RolController',
        'action' => 'viewRol'
    ],
    '/rol/edit/(\d+)'=> [
        'controller' =>'App\Controllers\RolController',
        'action' => 'editRol'
    ],
    '/rol/update'=> [
        'controller' =>'App\Controllers\RolController',
        'action' => 'updateRol'
    ],
    '/rol/delete/(\d+)'=> [
        'controller' =>'App\Controllers\RolController',
        'action' => 'deleteRol'
    ],

    // centro formacion
    '/centroFormacion/index'=> [
        'controller' =>'App\Controllers\centroFormacionController',   // Todo lo que dice index lo eliminamos
        'action' => 'index'
    ],
    '/centroFormacion/view'=> [
        'controller' =>'App\Controllers\centroFormacionController',
        'action' => 'view'
    ],
    '/centroFormacion/new' => [
        'controller' => 'App\Controllers\centroFormacionController',
        'action' => 'newCentroFormacion'     // Nombre de la funcion 
    ], 
    '/centroFormacion/create'=> [
        'controller' =>'App\Controllers\centroFormacionController',
        'action' => 'createCentroFormacion'
    ],
    '/centroFormacion/view/(\d+)'=> [      // Edit
        'controller' =>'App\Controllers\centroFormacionController',
        'action' => 'viewCentroFormacion'
    ],
    '/centroFormacion/edit/(\d+)'=> [
        'controller' =>'App\Controllers\centroFormacionController',
        'action' => 'editCentroFormacion'
    ],
    '/centroFormacion/update'=> [
        'controller' =>'App\Controllers\centroFormacionController',
        'action' => 'updateCentroFormacion'
    ],
    '/centroFormacion/delete/(\d+)'=> [
        'controller' =>'App\Controllers\centroFormacionController',
        'action' => 'deleteCentroFormacion'
    ],

    // programa formacion
    '/programaFormacion/index'=> [
        'controller' =>'App\Controllers\programaFormacionController',
        'action' => 'index'
    ],
    '/programaFormacion/view'=> [
        'controller' =>'App\Controllers\programaFormacionController',
        'action' => 'view'
    ],
    '/programaFormacion/new' => [
        'controller' => 'App\Controllers\programaFormacionController',
        'action' => 'newProgramaFormacion'     // Nombre de la funcion 
    ], 
    '/programaFormacion/create'=> [
        'controller' =>'App\Controllers\programaFormacionController',
        'action' => 'createProgramaFormacion'
    ],
    '/programaFormacion/view/(\d+)'=> [
        'controller' =>'App\Controllers\programaFormacionController',
        'action' => 'viewProgramaFormacion'
    ],
    '/programaFormacion/edit/(\d+)'=> [
        'controller' =>'App\Controllers\programaFormacionController',
        'action' => 'editProgramaFormacion'
    ],
    '/programaFormacion/update'=> [
        'controller' =>'App\Controllers\programaFormacionController',
        'action' => 'updateProgramaFormacion'
    ],

    // actividad 
    '/actividad/index'=> [
        'controller' =>'App\Controllers\actividadController',
        'action' => 'index'
    ],
    '/actividad/view'=> [
        'controller' =>'App\Controllers\actividadController',
        'action' => 'view'
    ],
    '/actividad/new' => [
        'controller' => 'App\Controllers\actividadController',
        'action' => 'newActividad'     // Nombre de la funcion 
    ], 
    '/actividad/create'=> [
        'controller' =>'App\Controllers\actividadController',
        'action' => 'createActividad'
    ],
    '/actividad/view/(\d+)'=> [
        'controller' =>'App\Controllers\actividadController',
        'action' => 'viewActividad'
    ],
    '/actividad/edit/(\d+)'=> [
        'controller' =>'App\Controllers\actividadController',
        'action' => 'editActividad'
    ],
    '/actividad/update'=> [
        'controller' =>'App\Controllers\actividadController',
        'action' => 'updateActividad'
    ],
    '/actividad/delete/(\d+)'=> [
        'controller' =>'App\Controllers\actividadController',
        'action' => 'deleteActividad'
    ],
];