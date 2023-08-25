<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \App\Entity\Article implements \Doctrine\Persistence\Proxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
        __clone as private __doClone;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'category' => [parent::class, 'category', null],
        "\0".parent::class."\0".'categoryArticle' => [parent::class, 'categoryArticle', null],
        "\0".parent::class."\0".'datearticle' => [parent::class, 'datearticle', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'id_user' => [parent::class, 'id_user', null],
        "\0".parent::class."\0".'image' => [parent::class, 'image', null],
        "\0".parent::class."\0".'shortdescription' => [parent::class, 'shortdescription', null],
        "\0".parent::class."\0".'subject' => [parent::class, 'subject', null],
        "\0".parent::class."\0".'title' => [parent::class, 'title', null],
        'category' => [parent::class, 'category', null],
        'categoryArticle' => [parent::class, 'categoryArticle', null],
        'datearticle' => [parent::class, 'datearticle', null],
        'description' => [parent::class, 'description', null],
        'id' => [parent::class, 'id', null],
        'id_user' => [parent::class, 'id_user', null],
        'image' => [parent::class, 'image', null],
        'shortdescription' => [parent::class, 'shortdescription', null],
        'subject' => [parent::class, 'subject', null],
        'title' => [parent::class, 'title', null],
    ];

    /**
     * @internal
     */
    public bool $__isCloning = false;

    public function __construct(?\Closure $initializer = null)
    {
        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
            '__isCloning' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __clone()
    {
        $this->__isCloning = true;

        try {
            $this->__doClone();
        } finally {
            $this->__isCloning = false;
        }
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
