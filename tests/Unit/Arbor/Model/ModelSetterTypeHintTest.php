<?php

declare(strict_types=1);

namespace Arbor\Test\Unit\Arbor\Model;

use Arbor\Model\ModelBase;
use Arbor\Model\Student;
use Arbor\Model\TelephoneCall;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use ReflectionMethod;
use ReflectionNamedType;
use ReflectionUnionType;

#[CoversClass(ModelBase::class)]
#[CoversClass(TelephoneCall::class)]
class ModelSetterTypeHintTest extends TestCase
{
    // Fatal on autoload: declares a constant named CLASS, which PHP reserves.
    private const UNLOADABLE_MODELS = [
        'Arbor\\Model\\MarksheetTemplateContextualColumn',
    ];

    // Setters referencing models the generator never emitted; remove entries as those models are added.
    private const KNOWN_MISSING_MODEL_HINTS = [
        'Arbor\\Model\\ApplicationApplicantImport::setApplicationApplicantImportJob($applicationApplicantImportJob): Arbor\\Model\\ApplicationApplicantImportJob',
        'Arbor\\Model\\AssessmentDataCollection::setAssessmentDataCollectionPolicy($assessmentDataCollectionPolicy): Arbor\\Model\\AssessmentDataCollectionPolicy',
        'Arbor\\Model\\AssessmentImportColumn::setAssessmentImportJob($assessmentImportJob): Arbor\\Model\\AssessmentImportJob',
        'Arbor\\Model\\AssessmentImportError::setAssessmentImportJob($assessmentImportJob): Arbor\\Model\\AssessmentImportJob',
        'Arbor\\Model\\AssessmentImportRow::setAssessmentImportJob($assessmentImportJob): Arbor\\Model\\AssessmentImportJob',
        'Arbor\\Model\\CustomGroupMembership::setCustomGroup($customGroup): Arbor\\Model\\Group\\CustomGroup',
        'Arbor\\Model\\CustomGroupMembership::setGroupInstitution($groupInstitution): Arbor\\Model\\Group\\Institution',
        'Arbor\\Model\\CustomerAccountRefund::setStripeRefundTransaction($stripeRefundTransaction): Arbor\\Model\\StripeRefundTransaction',
        'Arbor\\Model\\CustomerPayment::setStripeIncomingCardTransaction($stripeIncomingCardTransaction): Arbor\\Model\\StripeIncomingCardTransaction',
        'Arbor\\Model\\CustomerPrepayment::setStripeIncomingCardTransaction($stripeIncomingCardTransaction): Arbor\\Model\\StripeIncomingCardTransaction',
        'Arbor\\Model\\Cymru\\DataReturnCompleter::setDataReturn($dataReturn): Arbor\\Model\\Statutory\\DataReturn',
        'Arbor\\Model\\Cymru\\PlascCensusClass::setDataReturn($dataReturn): Arbor\\Model\\Statutory\\DataReturn',
        'Arbor\\Model\\Cymru\\PlascCensusClassSizeException::setDataReturn($dataReturn): Arbor\\Model\\Statutory\\DataReturn',
        'Arbor\\Model\\Cymru\\PlascCensusPupilReconciliation::setDataReturn($dataReturn): Arbor\\Model\\Statutory\\DataReturn',
        'Arbor\\Model\\Cymru\\PlascCensusSchoolDetail::setDataReturn($dataReturn): Arbor\\Model\\Statutory\\DataReturn',
        'Arbor\\Model\\Cymru\\PlascCensusSupportStaff::setDataReturn($dataReturn): Arbor\\Model\\Statutory\\DataReturn',
        'Arbor\\Model\\Cymru\\PlascCensusTeacher::setDataReturn($dataReturn): Arbor\\Model\\Statutory\\DataReturn',
        'Arbor\\Model\\Cymru\\PlascCensusTeachingOfWelsh::setDataReturn($dataReturn): Arbor\\Model\\Statutory\\DataReturn',
        'Arbor\\Model\\Cymru\\ServiceChildConcern::setCtfImportJobStudent($ctfImportJobStudent): Arbor\\Model\\UkDfe\\CtfImportJobStudent',
        'Arbor\\Model\\Email::setEmailMailbox($emailMailbox): Arbor\\Model\\EmailMailbox',
        'Arbor\\Model\\EmailAddressImport::setEmailAddressImportJob($emailAddressImportJob): Arbor\\Model\\EmailAddressImportJob',
        'Arbor\\Model\\OutboundLetter::setOutboundLetterDraft($outboundLetterDraft): Arbor\\Model\\OutboundLetterDraft',
        'Arbor\\Model\\PaymentTransactionSnapshot::setStripeIncomingCardTransaction($stripeIncomingCardTransaction): Arbor\\Model\\StripeIncomingCardTransaction',
        'Arbor\\Model\\QualificationResult::setImportJob($importJob): Arbor\\Model\\UkJcq\\QualificationResultImportJob',
        'Arbor\\Model\\TimetableImportEndingTimetableSlot::setTimetableImportJob($timetableImportJob): Arbor\\Model\\TimetableImportJob',
        'Arbor\\Model\\TimetableImportTimetableSlot::setTimetableImportJob($timetableImportJob): Arbor\\Model\\TimetableImportJob',
        'Arbor\\Model\\UkDfe\\ServiceChildConcern::setCtfImportJobStudent($ctfImportJobStudent): Arbor\\Model\\UkDfe\\CtfImportJobStudent',
        'Arbor\\Model\\UserDefinedFieldImport::setUserDefinedImportJob($userDefinedImportJob): Arbor\\Model\\UserDefinedFieldImportJob',
    ];

    public function testSetCallerAcceptsArborModel(): void
    {
        $call = new TelephoneCall();
        $caller = new ModelBase('Student', ['href' => '/rest-v2/students/1']);

        $call->setCaller($caller);

        $this->assertSame($caller, $call->getCaller());
    }

    public function testSetCallerAcceptsConcreteModel(): void
    {
        $call = new TelephoneCall();
        $caller = new Student();

        $call->setCaller($caller);

        $this->assertSame($caller, $call->getCaller());
    }

    public function testSetCallerAcceptsNull(): void
    {
        $call = new TelephoneCall();

        $call->setCaller(null);

        $this->assertNull($call->getCaller());
    }

    public function testSetRecipientAcceptsArborModel(): void
    {
        $call = new TelephoneCall();
        $recipient = new ModelBase('Staff', ['href' => '/rest-v2/staff/1']);

        $call->setRecipient($recipient);

        $this->assertSame($recipient, $call->getRecipient());
    }

    /**
     * @param class-string<ModelBase> $className
     */
    #[DataProvider('modelBaseSetterProvider')]
    public function testModelBaseSetterAcceptsAnyArborModel(string $className, string $setter, string $getter): void
    {
        $model = new $className();
        $related = new ModelBase('Student', ['href' => '/rest-v2/students/1']);

        $model->$setter($related);

        $this->assertSame($related, $model->$getter());
    }

    public function testEveryModelSetterTypeHintReferencesAnExistingClass(): void
    {
        $unresolved = [];

        foreach (self::modelClasses() as $className) {
            foreach ((new ReflectionClass($className))->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
                if ($method->getDeclaringClass()->getName() !== $className) {
                    continue;
                }

                foreach ($method->getParameters() as $parameter) {
                    foreach (self::classTypeNames($parameter->getType()) as $typeName) {
                        if (!class_exists($typeName) && !interface_exists($typeName)) {
                            $unresolved[] = "{$className}::{$method->getName()}(\${$parameter->getName()}): {$typeName}";
                        }
                    }
                }
            }
        }

        sort($unresolved);

        $this->assertSame(self::KNOWN_MISSING_MODEL_HINTS, $unresolved, 'Model setters type-hint classes that do not exist');
    }

    public static function modelBaseSetterProvider(): array
    {
        $cases = [];

        foreach (self::modelClasses() as $className) {
            foreach ((new ReflectionClass($className))->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
                if (!str_starts_with($method->getName(), 'set') || $method->getNumberOfParameters() !== 1) {
                    continue;
                }

                $type = $method->getParameters()[0]->getType();
                if (!$type instanceof ReflectionNamedType || $type->getName() !== ModelBase::class) {
                    continue;
                }

                $getter = 'get' . substr($method->getName(), 3);
                $cases["{$className}::{$method->getName()}"] = [$className, $method->getName(), $getter];
            }
        }

        return $cases;
    }

    /**
     * @return list<class-string>
     */
    private static function modelClasses(): array
    {
        $basePath = dirname(__DIR__, 4) . '/src/Arbor/Model';
        $classes = [];

        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($basePath, RecursiveDirectoryIterator::SKIP_DOTS));
        foreach ($files as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }

            $relativePath = substr($file->getPathname(), strlen($basePath) + 1, -4);
            $className = 'Arbor\\Model\\' . str_replace('/', '\\', $relativePath);

            if (!in_array($className, self::UNLOADABLE_MODELS, true) && class_exists($className)) {
                $classes[] = $className;
            }
        }

        sort($classes);

        return $classes;
    }

    /**
     * @return list<string>
     */
    private static function classTypeNames(?\ReflectionType $type): array
    {
        if ($type instanceof ReflectionNamedType) {
            return $type->isBuiltin() || in_array($type->getName(), ['self', 'static'], true) ? [] : [$type->getName()];
        }

        if ($type instanceof ReflectionUnionType) {
            return array_merge(...array_map(self::classTypeNames(...), $type->getTypes()));
        }

        return [];
    }
}
