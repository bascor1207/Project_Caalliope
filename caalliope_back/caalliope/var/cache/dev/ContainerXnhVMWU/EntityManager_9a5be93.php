<?php

namespace ContainerXnhVMWU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder52de8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere219e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties786c5 = [
        
    ];

    public function getConnection()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getConnection', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getMetadataFactory', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getExpressionBuilder', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'beginTransaction', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getCache', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getCache();
    }

    public function transactional($func)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'transactional', array('func' => $func), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'wrapInTransaction', array('func' => $func), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'commit', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->commit();
    }

    public function rollback()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'rollback', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getClassMetadata', array('className' => $className), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'createQuery', array('dql' => $dql), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'createNamedQuery', array('name' => $name), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'createQueryBuilder', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'flush', array('entity' => $entity), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'clear', array('entityName' => $entityName), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->clear($entityName);
    }

    public function close()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'close', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->close();
    }

    public function persist($entity)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'persist', array('entity' => $entity), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'remove', array('entity' => $entity), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'refresh', array('entity' => $entity), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'detach', array('entity' => $entity), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'merge', array('entity' => $entity), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getRepository', array('entityName' => $entityName), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'contains', array('entity' => $entity), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getEventManager', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getConfiguration', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'isOpen', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getUnitOfWork', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getProxyFactory', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'initializeObject', array('obj' => $obj), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'getFilters', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'isFiltersStateClean', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'hasFilters', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return $this->valueHolder52de8->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializere219e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder52de8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder52de8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder52de8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, '__get', ['name' => $name], $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        if (isset(self::$publicProperties786c5[$name])) {
            return $this->valueHolder52de8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52de8;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder52de8;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52de8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder52de8;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, '__isset', array('name' => $name), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52de8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder52de8;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, '__unset', array('name' => $name), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder52de8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder52de8;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, '__clone', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        $this->valueHolder52de8 = clone $this->valueHolder52de8;
    }

    public function __sleep()
    {
        $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, '__sleep', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;

        return array('valueHolder52de8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere219e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere219e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere219e && ($this->initializere219e->__invoke($valueHolder52de8, $this, 'initializeProxy', array(), $this->initializere219e) || 1) && $this->valueHolder52de8 = $valueHolder52de8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder52de8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder52de8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
