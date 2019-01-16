<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "TEST",
            "url" => "test",
            "title" => "Testande för möjligheter till utveckling.",
        ],
        [
            "text" => "Rapport om färger",
            "url" => "rapport/rapport",
            "title" => "rapport om färger",
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "blogg",
        ],
        [
            "text" => "Rapport om laddningstider",
            "url" => "rapport/laddningstid",
            "title" => "rapport om laddningstider",
        ],
        [
            "text" => "Rapport om designprinciper",
            "url" => "rapport/designprincip",
            "title" => "rapport om designprinciper",
        ],
        [
            "text" => "Rapport om designelement",
            "url" => "rapport/designelement",
            "title" => "rapport om designelement",
        ],
        [
            "text" => "Rapport om designprinciper del 2",
            "url" => "rapport/designprinciper",
            "title" => "rapport om designprinciper med tema",
        ],
        [
            "text" => "Rapport om Webbplatsdesign",
            "url" => "rapport/webbplatsdesign",
            "title" => "Webbplatsdesign",
        ],
    ],
];
