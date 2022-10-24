<?php
$search = [
    "searchType" => "ADVANCED",
    "searchRestrictionType" => "ENUM_POJO",
    "property" => "unidadeOrcamentaria.unidadeGestora",
    "label" => "<span>Unidade gestora</span>",
    "placeholder" => "",
    "searchDefault" => true,
    "allowAddChildren" => true,
    "condition" =>  [
        "value" => "IGUAL",
        "desc" => "Igual",
        "valueClass" => "com.publica.base.web.components.search.SearchCondition",
        "params" =>  [ ],
        "icon" => "epublica-icon-equals"
    ],
    "classEnum" => null,
];