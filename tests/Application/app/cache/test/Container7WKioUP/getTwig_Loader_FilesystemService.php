<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.loader.filesystem' shared service.

$this->privates['twig.loader.filesystem'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(($this->privates['templating.locator'] ?? $this->load('getTemplating_LocatorService.php')), ($this->privates['templating.name_parser'] ?? $this->privates['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)))), $this->targetDirs[3]);

$instance->addPath(($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
$instance->addPath(($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
$instance->addPath(($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
$instance->addPath(($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
$instance->addPath(($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
$instance->addPath(($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
$instance->addPath(($this->targetDirs[5].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
$instance->addPath(($this->targetDirs[5].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
$instance->addPath(($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/views'), 'SyliusResource');
$instance->addPath(($this->targetDirs[5].'/vendor/sylius/resource-bundle/Resources/views'), '!SyliusResource');
$instance->addPath(($this->targetDirs[5].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

return $instance;