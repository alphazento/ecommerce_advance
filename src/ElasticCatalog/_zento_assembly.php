<?php
return [
    "ZentoAdv_ElasticCatalog"=> [
        "version"=> "0.0.1",
        "commands"=> [
            "\\ZentoAdv\\ElasticCatalog\\Console\\Commands\\SyncCategory2Els"
        ],
        "providers"=> [
            "\\ZentoAdv\\ElasticCatalog\\Providers\\Entry"
        ],
        "depends"=> [
            "Zento_Catalog",
            "Zento_CatalogSearch"
        ]
    ]
];