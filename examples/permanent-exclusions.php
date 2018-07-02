<?php

require_once __DIR__ . '/example-bootstrap.php';

$permanentExclusions = $api->query(new \Arbor\Query\Query(\Arbor\Resource\ResourceType::PERMANENT_EXCLUSION));

foreach ($permanentExclusions as $permanentExclusion)
{
    printf(
        '
        Permanent Exclusion Display Name:  %s
        Permanent Exclusion from date: %s
        Permanent Exclusion narrative: %s
        Exclusion Reason Id: %s
        Exclusion Reason Name: %s
        Exclusion Reason Code: %s
        Student Id: %s
        Student First Name: %s
        Student Last Name: %s
        ',
        $permanentExclusion->getDisplayName(),
        $permanentExclusion->getFromDate(),
        $permanentExclusion->getNarrative(),
        $permanentExclusion->getExclusionReason()->getId(),
        $permanentExclusion->getExclusionReason()->getExclusionReasonName(),
        $permanentExclusion->getExclusionReason()->getCode(),
        $permanentExclusion->getStudent()->getId(),
        $permanentExclusion->getStudent()->getPerson()->getLegalFirstName(),
        $permanentExclusion->getStudent()->getPerson()->getLegalLastName(),
        PHP_EOL
    );
}
