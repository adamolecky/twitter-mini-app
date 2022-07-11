<?php

namespace ContainerYcmBkVP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb6bd5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerba929 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbc983 = [
        
    ];

    public function getConnection()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getConnection', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getMetadataFactory', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getExpressionBuilder', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'beginTransaction', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getCache', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'transactional', array('func' => $func), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->transactional($func);
    }

    public function commit()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'commit', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->commit();
    }

    public function rollback()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'rollback', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getClassMetadata', array('className' => $className), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'createQuery', array('dql' => $dql), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'createNamedQuery', array('name' => $name), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'createQueryBuilder', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'flush', array('entity' => $entity), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'clear', array('entityName' => $entityName), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->clear($entityName);
    }

    public function close()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'close', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->close();
    }

    public function persist($entity)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'persist', array('entity' => $entity), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'remove', array('entity' => $entity), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'refresh', array('entity' => $entity), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'detach', array('entity' => $entity), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'merge', array('entity' => $entity), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'contains', array('entity' => $entity), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getEventManager', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getConfiguration', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'isOpen', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getUnitOfWork', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getProxyFactory', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'initializeObject', array('obj' => $obj), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'getFilters', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'isFiltersStateClean', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'hasFilters', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return $this->valueHolderb6bd5->hasFilters();
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

        $instance->initializerba929 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb6bd5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb6bd5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb6bd5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, '__get', ['name' => $name], $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        if (isset(self::$publicPropertiesbc983[$name])) {
            return $this->valueHolderb6bd5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6bd5;

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

        $targetObject = $this->valueHolderb6bd5;
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
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6bd5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb6bd5;
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
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, '__isset', array('name' => $name), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6bd5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb6bd5;
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
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, '__unset', array('name' => $name), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb6bd5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb6bd5;
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
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, '__clone', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        $this->valueHolderb6bd5 = clone $this->valueHolderb6bd5;
    }

    public function __sleep()
    {
        $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, '__sleep', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;

        return array('valueHolderb6bd5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerba929 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerba929;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerba929 && ($this->initializerba929->__invoke($valueHolderb6bd5, $this, 'initializeProxy', array(), $this->initializerba929) || 1) && $this->valueHolderb6bd5 = $valueHolderb6bd5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb6bd5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb6bd5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
