<?php

namespace App\EventSubscriber;

use App\Entity\Post;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class SluggerSubscriber implements EventSubscriberInterface
{

    public function __construct(private SluggerInterface $slugger,private Security $security)
    {

    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ["addSlug"],
            BeforeEntityUpdatedEvent::class => ['updateSlug']
        ];
    }

    public function addSlug(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();
        $user =$this->security->getUser();
        if ($entity instanceof Post) {
            $slug = strtolower($this->slugger->slug($entity->getTitle()));
            $entity->setSlug($slug)
            ->setAuthor($user);
        } else {
            return;
        }
    }

    public function updateSlug(BeforeEntityUpdatedEvent $event)
    {
        $entity = $event->getEntityInstance();
        if ($entity instanceof Post) {
            $slug = strtolower($this->slugger->slug($entity->getTitle()));
            $entity->setSlug($slug);
        } else {
            return;
        }
    }
}