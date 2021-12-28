<?php
const MENU = [
    [
        "titulo" => "Inicio",
        "index" => "",
        "link" => "",
        "icono" => "fas fa-tachometer-alt",
        "submenu" => []
    ],
    [
        "titulo" => "CRM",
        "index" => "",
        "link" => "",
        "icono" => "far fa-file-alt",
        "submenu" => [
            [
                "index" => "",
                "titulo" => "Registros",
                "link" => "registros/index"
            ],
            [
                "index" => "",
                "titulo" => "Estadistica",
                "link" => "registros/data"
            ],
        ]
    ],
    
    [
        "titulo" => "Reportes",
        "index" => "",
        "link" => "",
        "icono" => "fas fa-chart-line fa-2x",
        "submenu" => [
            [
                "index" => "",
                "titulo" => "Llamadas",
                "link" => "registros/index"
            ],
            [
                "index" => "",
                "titulo" => "Adherencias",
                "link" => "registros/data"
            ],
        ]
    ],

];
