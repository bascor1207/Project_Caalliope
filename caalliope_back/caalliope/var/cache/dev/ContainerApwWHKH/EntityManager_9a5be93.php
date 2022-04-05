<?php

namespace ContainerApwWHKH;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3f7ea = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfee40 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese654b = [
        
    ];

    public function getConnection()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getConnection', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getMetadataFactory', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getExpressionBuilder', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'beginTransaction', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getCache', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'transactional', array('func' => $func), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'commit', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->commit();
    }

    public function rollback()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'rollback', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getClassMetadata', array('className' => $className), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'createQuery', array('dql' => $dql), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'createNamedQuery', array('name' => $name), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'createQueryBuilder', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'flush', array('entity' => $entity), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'clear', array('entityName' => $entityName), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->clear($entityName);
    }

    public function close()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'close', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->close();
    }

    public function persist($entity)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'persist', array('entity' => $entity), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'remove', array('entity' => $entity), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'refresh', array('entity' => $entity), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'detach', array('entity' => $entity), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'merge', array('entity' => $entity), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'contains', array('entity' => $entity), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getEventManager', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getConfiguration', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'isOpen', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getUnitOfWork', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getProxyFactory', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'initializeObject', array('obj' => $obj), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'getFilters', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'isFiltersStateClean', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'hasFilters', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return $this->valueHolder3f7ea->hasFilters();
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

        $instance->initializerfee40 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3f7ea) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3f7ea = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3f7ea->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, '__get', ['name' => $name], $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        if (isset(self::$publicPropertiese654b[$name])) {
            return $this->valueHolder3f7ea->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f7ea;

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

        $targetObject = $this->valueHolder3f7ea;
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
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f7ea;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3f7ea;
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
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, '__isset', array('name' => $name), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f7ea;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3f7ea;
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
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, '__unset', array('name' => $name), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3f7ea;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3f7ea;
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
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, '__clone', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        $this->valueHolder3f7ea = clone $this->valueHolder3f7ea;
    }

    public function __sleep()
    {
        $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, '__sleep', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;

        return array('valueHolder3f7ea');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfee40 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfee40;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfee40 && ($this->initializerfee40->__invoke($valueHolder3f7ea, $this, 'initializeProxy', array(), $this->initializerfee40) || 1) && $this->valueHolder3f7ea = $valueHolder3f7ea;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3f7ea;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3f7ea;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
