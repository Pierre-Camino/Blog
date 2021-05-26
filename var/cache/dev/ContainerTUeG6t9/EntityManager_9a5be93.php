<?php

namespace ContainerTUeG6t9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8ef4b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere41e9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb8a10 = [
        
    ];

    public function getConnection()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getConnection', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getMetadataFactory', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getExpressionBuilder', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'beginTransaction', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getCache', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getCache();
    }

    public function transactional($func)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'transactional', array('func' => $func), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->transactional($func);
    }

    public function commit()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'commit', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->commit();
    }

    public function rollback()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'rollback', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getClassMetadata', array('className' => $className), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'createQuery', array('dql' => $dql), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'createNamedQuery', array('name' => $name), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'createQueryBuilder', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'flush', array('entity' => $entity), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'clear', array('entityName' => $entityName), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->clear($entityName);
    }

    public function close()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'close', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->close();
    }

    public function persist($entity)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'persist', array('entity' => $entity), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'remove', array('entity' => $entity), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'refresh', array('entity' => $entity), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'detach', array('entity' => $entity), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'merge', array('entity' => $entity), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getRepository', array('entityName' => $entityName), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'contains', array('entity' => $entity), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getEventManager', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getConfiguration', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'isOpen', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getUnitOfWork', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getProxyFactory', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'initializeObject', array('obj' => $obj), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'getFilters', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'isFiltersStateClean', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'hasFilters', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return $this->valueHolder8ef4b->hasFilters();
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

        $instance->initializere41e9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8ef4b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8ef4b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8ef4b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, '__get', ['name' => $name], $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        if (isset(self::$publicPropertiesb8a10[$name])) {
            return $this->valueHolder8ef4b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ef4b;

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

        $targetObject = $this->valueHolder8ef4b;
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
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ef4b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8ef4b;
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
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, '__isset', array('name' => $name), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ef4b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8ef4b;
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
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, '__unset', array('name' => $name), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8ef4b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8ef4b;
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
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, '__clone', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        $this->valueHolder8ef4b = clone $this->valueHolder8ef4b;
    }

    public function __sleep()
    {
        $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, '__sleep', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;

        return array('valueHolder8ef4b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere41e9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere41e9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere41e9 && ($this->initializere41e9->__invoke($valueHolder8ef4b, $this, 'initializeProxy', array(), $this->initializere41e9) || 1) && $this->valueHolder8ef4b = $valueHolder8ef4b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8ef4b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8ef4b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
