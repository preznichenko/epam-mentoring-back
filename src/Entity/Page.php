<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageRepository")
 */
class Page
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Page", inversedBy="sub_pages")
     */
    private $parent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="ownedPages")
     */
    private $author;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDeleted;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PageTemplate", inversedBy="templatedPages")
     */
    private $template;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PageSlot", inversedBy="pageSlot1")
     */
    private $slot1;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PageSlot", inversedBy="pageSlot2")
     */
    private $slot2;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PageSlot", inversedBy="pageSlot3")
     */
    private $slot3;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Page", mappedBy="parent")
     */
    private $sub_pages;


    public function __construct()
    {
        $this->sub_pages = new ArrayCollection();
        $this->slot1 = new PageSlot();

    }

    public function getSubPages(): ?Collection {
        return $this->sub_pages;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getParent(): ?Page
    {
        return $this->parent;
    }

    public function setPid(?Page $page): self
    {
        $this->parent = $page;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    public function getTemplate(): ?int
    {
        return $this->template;
    }

    public function setTemplate(int $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getSlot1(): ?PageSlot
    {
        return $this->slot1;
    }

    public function setSlot1(PageSlot $slot1): self
    {
        $this->slot1 = $slot1;

        return $this;
    }

    public function getSlot2(): ?PageSlot
    {
        return $this->slot2;
    }

    public function setSlot2(PageSlot $slot2): self
    {
        $this->slot2 = $slot2;

        return $this;
    }

    public function getSlot3(): ?PageSlot
    {
        return $this->slot3;
    }

    public function setSlot3(PageSlot $slot3): self
    {
        $this->slot3 = $slot3;

        return $this;
    }
}
