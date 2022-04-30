<?php

namespace ContainerHdrtMyk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderee6ff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerffc92 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa9bfd = [
        
    ];

    public function getConnection()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getConnection', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getMetadataFactory', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getExpressionBuilder', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'beginTransaction', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getCache', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getCache();
    }

    public function transactional($func)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'transactional', array('func' => $func), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'wrapInTransaction', array('func' => $func), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'commit', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->commit();
    }

    public function rollback()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'rollback', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getClassMetadata', array('className' => $className), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'createQuery', array('dql' => $dql), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'createNamedQuery', array('name' => $name), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'createQueryBuilder', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'flush', array('entity' => $entity), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'clear', array('entityName' => $entityName), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->clear($entityName);
    }

    public function close()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'close', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->close();
    }

    public function persist($entity)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'persist', array('entity' => $entity), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'remove', array('entity' => $entity), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'refresh', array('entity' => $entity), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'detach', array('entity' => $entity), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'merge', array('entity' => $entity), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getRepository', array('entityName' => $entityName), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'contains', array('entity' => $entity), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getEventManager', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getConfiguration', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'isOpen', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getUnitOfWork', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getProxyFactory', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'initializeObject', array('obj' => $obj), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'getFilters', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'isFiltersStateClean', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'hasFilters', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return $this->valueHolderee6ff->hasFilters();
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

        $instance->initializerffc92 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderee6ff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderee6ff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderee6ff->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, '__get', ['name' => $name], $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        if (isset(self::$publicPropertiesa9bfd[$name])) {
            return $this->valueHolderee6ff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee6ff;

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

        $targetObject = $this->valueHolderee6ff;
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
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee6ff;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderee6ff;
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
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, '__isset', array('name' => $name), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee6ff;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderee6ff;
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
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, '__unset', array('name' => $name), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderee6ff;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderee6ff;
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
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, '__clone', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        $this->valueHolderee6ff = clone $this->valueHolderee6ff;
    }

    public function __sleep()
    {
        $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, '__sleep', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;

        return array('valueHolderee6ff');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerffc92 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerffc92;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerffc92 && ($this->initializerffc92->__invoke($valueHolderee6ff, $this, 'initializeProxy', array(), $this->initializerffc92) || 1) && $this->valueHolderee6ff = $valueHolderee6ff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderee6ff;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderee6ff;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
