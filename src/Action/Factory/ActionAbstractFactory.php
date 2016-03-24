<?php
namespace Acelaya\Website\Action\Factory;

use Acelaya\Website\Action\AbstractAction;
use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ActionAbstractFactory implements AbstractFactoryInterface
{
    /**
     * Determine if we can create a service with name
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @param $name
     * @param $requestedName
     * @return bool
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        return is_subclass_of($requestedName, AbstractAction::class);
    }

    /**
     * Create service with name
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @param $name
     * @param $requestedName
     * @return mixed
     */
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        /** @var TemplateRendererInterface $renderer */
        $renderer = $serviceLocator->get('renderer');
        return new $requestedName($renderer);
    }
}
