<?php
return [         // Prueba cimmit | base contrller , programa formacion controller | genera un código css para un reset 
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
    '/programaFormacion/delete/(\d+)'=> [
        'controller' =>'App\Controllers\programaFormacionController',
        'action' => 'deleteProgramaFormacion'                          // Llama a la funcion deleteProgramaFormacion del programaFormacionModel
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

    //grupo # 1
    '/grupo/index'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'index'
    ],
    '/grupo/view'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'view'
    ],
    '/grupo/new' => [
        'controller' => 'App\Controllers\grupoController',
        'action' => 'newGrupo'     // Nombre de la funcion 
    ], 
    '/grupo/create'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'createGrupo'
    ],
    '/grupo/view/(\d+)'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'viewGrupo'
    ],
    '/grupo/edit/(\d+)'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'editGrupo'
    ],
    '/grupo/update'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'updateGrupo'
    ],
    '/grupo/delete/(\d+)'=> [
        'controller' =>'App\Controllers\grupoController',
        'action' => 'deleteGrupo'
    ],

    //registroIngreso # 2
    '/registroIngreso/index'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'index'
    ],
    '/registroIngreso/view'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'view'
    ],
    '/registroIngreso/new' => [
        'controller' => 'App\Controllers\registroIngresoController',
        'action' => 'newRegistroIngreso'     // Nombre de la funcion 
    ], 
    '/registroIngreso/create'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'createRegistroIngreso'
    ],
    '/registroIngreso/view/(\d+)'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'viewRegistroIngreso'
    ],
    '/registroIngreso/edit/(\d+)'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'editRegistroIngreso'
    ],
    '/registroIngreso/update'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'updateRegistroIngreso'
    ],
    '/registroIngreso/delete/(\d+)'=> [
        'controller' =>'App\Controllers\registroIngresoController',
        'action' => 'deleteRegistroIngreso'
    ],

    // tipoUsuarioGym # 3
    '/tipoUsuarioGym/index' => [
        'controller' => 'App\Controllers\tipoUsuarioGymController',
        'action' => 'index'
    ],
    '/tipoUsuarioGym/view' => [
        'controller' => 'App\Controllers\tipoUsuarioGymController',
        'action' => 'view'
    ],
    '/tipoUsuarioGym/new' => [
        'controller' => 'App\Controllers\tipoUsuarioGymController',
        'action' => 'newTipoUsuarioGym'
    ],
    '/tipoUsuarioGym/create' => [
        'controller' => 'App\Controllers\tipoUsuarioGymController',
        'action' => 'createTipoUsuarioGym'
    ],
    '/tipoUsuarioGym/view/(\d+)' => [
        'controller' => 'App\Controllers\tipoUsuarioGymController',
        'action' => 'viewTipoUsuarioGym'
    ],
    '/tipoUsuarioGym/edit/(\d+)' => [
        'controller' => 'App\Controllers\tipoUsuarioGymController',
        'action' => 'editTipoUsuarioGym'
    ],
    '/tipoUsuarioGym/update' => [
        'controller' => 'App\Controllers\tipoUsuarioGymController',
        'action' => 'updateTipoUsuarioGym'
    ],
    '/tipoUsuarioGym/delete/(\d+)' => [
        'controller' => 'App\Controllers\tipoUsuarioGymController',
        'action' => 'deleteTipoUsuarioGym'
    ],

    // controlProgreso # 4
    '/controlProgreso/index' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'index'
    ],
    '/controlProgreso/view' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'view'
    ],
    '/controlProgreso/new' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'newControlProgreso'
    ],
    '/controlProgreso/create' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'createControlProgreso'
    ],
    '/controlProgreso/view/(\d+)' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'viewControlProgreso'
    ],
    '/controlProgreso/edit/(\d+)' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'editControlProgreso'
    ],
    '/controlProgreso/update' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'updateControlProgreso'
    ],
    '/controlProgreso/delete/(\d+)' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'deleteControlProgreso'
    ],

    // usuario # 5
    '/usuario/index' => [
        'controller' => 'App\Controllers\controlProgresoController',
        'action' => 'index'
    ],
    '/usuario/view' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'view'
    ],
    '/usuario/new' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'newUsuario'
    ],
    '/usuario/create' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'createUsuario'
    ],
    '/usuario/view/(\d+)' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'viewUsuario'
    ],
    '/usuario/edit/(\d+)' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'editUsuario'
    ],
    '/usuario/update' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'updateUsuario'
    ],
    '/usuario/delete/(\d+)' => [
        'controller' => 'App\Controllers\usuarioController',
        'action' => 'deleteUsuario'
    ],



];