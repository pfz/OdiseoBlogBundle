<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.grid.data_source_provider' shared service.

return $this->services['sylius.grid.data_source_provider'] = new \Sylius\Component\Grid\Data\DataSourceProvider(($this->services['sylius.registry.grid_driver'] ?? $this->load('getSylius_Registry_GridDriverService.php')));