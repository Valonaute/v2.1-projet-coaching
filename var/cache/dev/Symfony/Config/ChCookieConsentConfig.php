<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class ChCookieConsentConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $categories;
    private $theme;
    private $position;
    private $useLogger;
    private $simplified;
    private $httpOnly;
    private $formAction;
    private $csrfProtection;
    private $_usedProperties = [];

    /**
     * @default array (
      0 => 'tracking',
      1 => 'marketing',
      2 => 'social_media',
    )
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function categories(mixed $value = array (
      0 => 'tracking',
      1 => 'marketing',
      2 => 'social_media',
    )): static
    {
        $this->_usedProperties['categories'] = true;
        $this->categories = $value;

        return $this;
    }

    /**
     * @default 'light'
     * @param ParamConfigurator|'light'|'dark' $value
     * @return $this
     */
    public function theme($value): static
    {
        $this->_usedProperties['theme'] = true;
        $this->theme = $value;

        return $this;
    }

    /**
     * @default 'top'
     * @param ParamConfigurator|'top'|'bottom' $value
     * @return $this
     */
    public function position($value): static
    {
        $this->_usedProperties['position'] = true;
        $this->position = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function useLogger($value): static
    {
        $this->_usedProperties['useLogger'] = true;
        $this->useLogger = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function simplified($value): static
    {
        $this->_usedProperties['simplified'] = true;
        $this->simplified = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function httpOnly($value): static
    {
        $this->_usedProperties['httpOnly'] = true;
        $this->httpOnly = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formAction($value): static
    {
        $this->_usedProperties['formAction'] = true;
        $this->formAction = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function csrfProtection($value): static
    {
        $this->_usedProperties['csrfProtection'] = true;
        $this->csrfProtection = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'ch_cookie_consent';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('categories', $value)) {
            $this->_usedProperties['categories'] = true;
            $this->categories = $value['categories'];
            unset($value['categories']);
        }

        if (array_key_exists('theme', $value)) {
            $this->_usedProperties['theme'] = true;
            $this->theme = $value['theme'];
            unset($value['theme']);
        }

        if (array_key_exists('position', $value)) {
            $this->_usedProperties['position'] = true;
            $this->position = $value['position'];
            unset($value['position']);
        }

        if (array_key_exists('use_logger', $value)) {
            $this->_usedProperties['useLogger'] = true;
            $this->useLogger = $value['use_logger'];
            unset($value['use_logger']);
        }

        if (array_key_exists('simplified', $value)) {
            $this->_usedProperties['simplified'] = true;
            $this->simplified = $value['simplified'];
            unset($value['simplified']);
        }

        if (array_key_exists('http_only', $value)) {
            $this->_usedProperties['httpOnly'] = true;
            $this->httpOnly = $value['http_only'];
            unset($value['http_only']);
        }

        if (array_key_exists('form_action', $value)) {
            $this->_usedProperties['formAction'] = true;
            $this->formAction = $value['form_action'];
            unset($value['form_action']);
        }

        if (array_key_exists('csrf_protection', $value)) {
            $this->_usedProperties['csrfProtection'] = true;
            $this->csrfProtection = $value['csrf_protection'];
            unset($value['csrf_protection']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['categories'])) {
            $output['categories'] = $this->categories;
        }
        if (isset($this->_usedProperties['theme'])) {
            $output['theme'] = $this->theme;
        }
        if (isset($this->_usedProperties['position'])) {
            $output['position'] = $this->position;
        }
        if (isset($this->_usedProperties['useLogger'])) {
            $output['use_logger'] = $this->useLogger;
        }
        if (isset($this->_usedProperties['simplified'])) {
            $output['simplified'] = $this->simplified;
        }
        if (isset($this->_usedProperties['httpOnly'])) {
            $output['http_only'] = $this->httpOnly;
        }
        if (isset($this->_usedProperties['formAction'])) {
            $output['form_action'] = $this->formAction;
        }
        if (isset($this->_usedProperties['csrfProtection'])) {
            $output['csrf_protection'] = $this->csrfProtection;
        }

        return $output;
    }

}
