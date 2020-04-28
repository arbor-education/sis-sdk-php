<?php

require_once __DIR__ . '/example-bootstrap.php';

$label = ["EAL","Ever 6 FSM","FSM","In Care","Pupil Premium","Gifted + Talented","Gifted","Talented"];

$query = new \Arbor\Query\Query(Arbor\Resource\ResourceType::INVERSE_DEMOGRAPHIC);
$query->addPropertyFilter(\Arbor\Model\InverseDemographic::DEMOGRAPHIC, \Arbor\Query\Query::OPERATOR_IN, "EAL");
$demographics = \Arbor\Model\InverseDemographic::query($query);

foreach ($demographics as $demographic) {
    printf(
        '
        Demographics Display Name:  %s
        %s
        ',
        $demographic->getDemographic()->getCode(),
        PHP_EOL
    );
}
