<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageSlotWitgetsRepository")
 */
class PageSlotWitgets
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PageSlot", inversedBy="witgets")
     */
    private $page_slot;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Witget", inversedBy="usedSlots")
     */
    private $witget;

    /**
     * @ORM\Column(type="integer")
     */
    private $sort;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPageSlotId(): ?int
    {
        return $this->page_slot_id;
    }

    public function setPageSlotId(int $page_slot_id): self
    {
        $this->page_slot_id = $page_slot_id;

        return $this;
    }

    public function getWitgetId(): ?int
    {
        return $this->witget_id;
    }

    public function setWitgetId(int $witget_id): self
    {
        $this->witget_id = $witget_id;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }
}
