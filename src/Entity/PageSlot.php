<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageSlotRepository")
 */
class PageSlot
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Page", mappedBy="slot1")
     */
    private $pageSlot1;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Page", mappedBy="slot2")
     */
    private $pageSlot2;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Page", mappedBy="slot3")
     */
    private $pageSlot3;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Page", mappedBy="page_slot")
     */
    private $witgets;


    public function getId(): ?int
    {
        return $this->id;
    }
}
