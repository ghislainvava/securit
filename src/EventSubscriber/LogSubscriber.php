<?php

namespace App\EventSubscriber;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class LogSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LoggerInterface $logger,
        private RequestStack $requestStack
    ) {
    }
    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        $this->logger->info(sprintf('Coucou Request from %s', $request->getClientIp()));
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest',
        ];
    }
}
