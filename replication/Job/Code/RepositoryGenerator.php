<?php
namespace Ls\Replication\Job\Code;


use Composer\Autoload\ClassLoader;
use Exception;
use Ls\Replication\Model\Anchor;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SortOrder;
use Magento\Framework\Data\SearchResultInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use ReflectionClass;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\FileGenerator;
use Zend\Code\Generator\GeneratorInterface;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;
use Zend\Code\Generator\PropertyGenerator;

class RepositoryGenerator implements GeneratorInterface
{
    /** @var string */
    static public $namespace = 'Ls\\Replication\\Model';
    /** @var  string */
    private $entity_fqn;
    /** @var FileGenerator */
    private $file;
    /** @var ClassGenerator */
    private $class;
    /** @var ReflectionClass */
    private $reflected_entity;
    /** @var string */
    private $table_name;

    /**
     * @param string $entity_fqn
     * @param string $table_name
     */
    public function __construct ( $entity_fqn, $table_name ) {
        $this->entity_fqn = $entity_fqn;
        $this->table_name = $table_name;
        $this->reflected_entity = new ReflectionClass( $entity_fqn );
        $this->file = new FileGenerator();
        $this->class = new ClassGenerator();
        $this->file->setClass( $this->class );
    }

    /**
     * @return string
     */
    public function generate () {

        $interface_name = $this->getRepositoryInterfaceName( FALSE );
        $model_interface_name = $this->getModelInterfaceName( FALSE );
        $model_name = $this->getModelName();
        $entity_name = $this->reflected_entity->getShortName();

        $this->class->setNamespaceName( self::$namespace );
        /*
use Ls\Workspace\Model\ResourceModel\Thing\CollectionFactory;
         */
        $search_factory =
            str_replace( 'SearchResultInterface', 'SearchResultInterfaceFactory', SearchResultInterface::class );
        $this->class->addUse( CouldNotDeleteException::class );
        $this->class->addUse( CouldNotSaveException::class );
        $this->class->addUse( NoSuchEntityException::class );
        $this->class->addUse( SearchCriteriaInterface::class );
        $this->class->addUse( SearchResultInterface::class );
        $this->class->addUse( Exception::class );
        $this->class->addUse( SortOrder::class );
        $this->class->addUse( $search_factory );
        $this->class->addUse( $this->getRepositoryInterfaceName() );
        $this->class->addUse( $this->getModelInterfaceName() );
        $this->class->addUse( "{$model_name}Factory" );

        $this->class->setName( $this->getName() );
        $this->class->setImplementedInterfaces( [ $interface_name ] );

        $this->class->addProperty( 'object_factory', NULL, [ PropertyGenerator::FLAG_PROTECTED ] );
        $this->class->addProperty( 'collection_factory', NULL, [ PropertyGenerator::FLAG_PROTECTED ] );
        $this->class->addProperty( 'result_factory', NULL, [ PropertyGenerator::FLAG_PROTECTED ] );

        $this->class->addMethodFromGenerator( $this->getConstructorMethod() );
        $this->class->addMethodFromGenerator( $this->getGetListMethod() );
        $this->class->addMethodFromGenerator( $this->getSaveMethod() );
        $this->class->addMethodFromGenerator( $this->getGetByIdMethod() );
        $this->class->addMethodFromGenerator( $this->getDeleteMethod() );
        $this->class->addMethodFromGenerator( $this->getDeleteByIdMethod() );

        $content = $this->file->generate();
        $content = str_replace( "\\{$entity_name}Interface \$object", "{$entity_name}Interface \$object", $content );
        $content = str_replace( "\\Magento\\Framework\\Api\\SearchCriteriaInterface \$criteria",
                                "SearchCriteriaInterface \$criteria", $content );


        return $content;
    }

    /**
     * @param bool $full
     *
     * @return string
     */
    protected function getRepositoryInterfaceName ( $full = TRUE ) {
        $generator = new RepositoryInterfaceGenerator( $this->entity_fqn );
        $name = $generator->getName();
        if ( $full ) {
            $name = "{$generator::$namespace}\\$name";
        }

        return $name;
    }

    /**
     * @param bool $full
     *
     * @return string
     */
    protected function getModelInterfaceName ( $full = TRUE ) {
        $generator = new ModelInterfaceGenerator( $this->entity_fqn, $this->table_name );
        $name = $generator->getName();
        if ( $full ) {
            $name = "{$generator::$namespace}\\$name";
        }

        return $name;
    }

    /**
     * @param bool $full
     *
     * @return string
     */
    protected function getModelName ( $full = TRUE ) {
        $generator = new ModelGenerator( $this->entity_fqn, $this->table_name );
        $name = $generator->getName();
        if ( $full ) {
            $name = "{$generator::$namespace}\\$name";
        }

        return $name;
    }

    /**
     * @return string
     */
    public function getName () {
        $short_name = $this->reflected_entity->getShortName();

        return "{$short_name}Repository";
    }

    /**
     * @return MethodGenerator
     */
    public function getConstructorMethod () {
        $method = new MethodGenerator();
        $method->setName( '__construct' );
        $search_factory =
            str_replace( 'SearchResultInterface', 'SearchResultInterfaceFactory', SearchResultInterface::class );


        $method->setParameters( [ new ParameterGenerator( 'object_factory', $this->getModelName() . 'Factory' ),
                                  new ParameterGenerator( 'collection_factory' ),
                                  new ParameterGenerator( 'result_factory', $search_factory ) ] );
        $method->setBody( <<<CODE
\$this->object_factory = \$object_factory;
\$this->collection_factory = \$collection_factory;
\$this->result_factory = \$result_factory;
CODE
        );

        return $method;
    }

    /**
     * @return MethodGenerator
     */
    public function getGetListMethod () {
        $method = new MethodGenerator();
        $method->setName( 'getList' );
        $method->setParameters( [ new ParameterGenerator( 'criteria', SearchCriteriaInterface::class ) ] );
        $method->setBody( <<<CODE
\$results = \$this->result_factory->create();
\$results->setSearchCriteria( \$criteria );
\$collection = \$this->collection_factory->create();
foreach ( \$criteria->getFilterGroups() as \$filter_group ) {
    \$fields = [ ];
    \$conditions = [ ];
    foreach ( \$filter_group->getFilters() as \$filter ) {
        \$condition = \$filter->getConditionType() ? \$filter->getConditionType() : 'eq';
        \$fields[] = \$filter->getField();
        \$conditions[] = [ \$condition => \$filter->getValue() ];
    }
    if ( \$fields ) {
        \$collection->addFieldToFilter( \$fields, \$conditions );
    }
}
\$results->setTotalCount( \$collection->getSize() );
\$sort_rrders = \$criteria->getSortOrders();
if ( \$sort_orders ) {
    /** @var SortOrder \$sort_order */
    foreach ( \$sort_orders as \$sort_order ) {
        \$collection->addOrder( \$sort_order->getField(),
                               ( \$sort_order->getDirection() == SortOrder::SORT_ASC ) ? 'ASC' : 'DESC'
        );
    }
}
\$collection->setCurPage( \$criteria->getCurrentPage() );
\$collection->setPageSize( \$criteria->getPageSize() );
\$objects = [ ];
foreach ( \$collection as \$object_model ) {
    \$objects[] = \$object_model;
}
\$results->setItems( \$objects );

return \$results;
CODE
        );


        return $method;
    }

    /**
     * @return MethodGenerator
     */
    public function getSaveMethod () {
        $method = new MethodGenerator();
        $method->setName( 'save' );
        $method->setParameters( [ new ParameterGenerator( 'object', $this->getModelInterfaceName( FALSE ) ) ] );
        $method->setBody( <<<CODE
try {
    \$object->save();
} catch ( Exception \$e ) {
    throw new CouldNotSaveException( \$e->getMessage() );
}

return \$object;
CODE
        );

        return $method;
    }

    /**
     * @return MethodGenerator
     */
    public function getGetByIdMethod () {
        $method = new MethodGenerator();
        $method->setName( 'getById' );
        $method->setParameters( [ new ParameterGenerator( 'id' ) ] );
        $method->setBody( <<<CODE
\$object = \$this->object_factory->create();
\$object->load( \$id );
if ( ! \$object->getId() ) {
    throw new NoSuchEntityException( "Object with id '\$id' does not exist." );
}

return \$object;
CODE
        );

        return $method;
    }

    /**
     * @return MethodGenerator
     */
    public function getDeleteMethod () {
        $method = new MethodGenerator();
        $method->setName( 'delete' );
        $method->setParameters( [ new ParameterGenerator( 'object', $this->getModelInterfaceName( FALSE ) ) ] );
        $method->setBody( <<<CODE
try {
    \$object->delete();
} catch ( Exception \$e) {
    throw new CouldNotDeleteException( \$e->getMessage() );
}

return TRUE;
CODE
        );

        return $method;
    }

    /**
     * @return MethodGenerator
     */
    public function getDeleteByIdMethod () {
        $method = new MethodGenerator();
        $method->setName( 'deleteById' );
        $method->setParameters( [ new ParameterGenerator( 'id' ) ] );
        $method->setBody( 'return $this->delete( $this->getById( $id ) );' );

        return $method;
    }

    /**
     * @return string
     */
    public function getPath () {
        /** @var ClassLoader $loader */
        $loader = $GLOBALS[ 'loader' ];
        $path = $loader->findFile( Anchor::class );
        $path = str_replace( 'Anchor', $this->getName(), $path );

        return $path;
    }
}
