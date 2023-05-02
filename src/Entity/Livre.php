<?php

namespace App\Entity;

use App\Repository\LivreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LivreRepository::class)]
class Livre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $categorie = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $DatePublication = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(nullable: true)]
    private ?float $prix = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DescriptionEtatLivre = null;

    #[ORM\Column(nullable: true)]
    private ?int $note = null;

    #[ORM\OneToMany(mappedBy: 'livre', targetEntity: Item::class)]
    private Collection $items;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'livres')]
    private Collection $favoris;

    #[ORM\ManyToOne(inversedBy: 'livs')]
    private ?User $users = null;

    #[ORM\OneToMany(mappedBy: 'livre', targetEntity: LivreLike::class)]
    private Collection $likes;

    public function __construct()
    {
        $this->items = new ArrayCollection();
        $this->favoris = new ArrayCollection();
        $this->favoriUsers = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->DatePublication;
    }

    public function setDatePublication(?\DateTimeInterface $DatePublication): self
    {
        $this->DatePublication = $DatePublication;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDescriptionEtatLivre(): ?string
    {
        return $this->DescriptionEtatLivre;
    }

    public function setDescriptionEtatLivre(?string $DescriptionEtatLivre): self
    {
        $this->DescriptionEtatLivre = $DescriptionEtatLivre;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @return Collection<int, Item>
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(Item $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items->add($item);
            $item->setLivre($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getLivre() === $this) {
                $item->setLivre(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getFavoris(): Collection
    {
        return $this->favoris;
    }

    public function addFavori(?User $favori): self
    {
        if ($favori && !$this->favoris->contains($favori)) {
            $this->favoris->add($favori);
        }

        return $this;
    }

    public function removeFavoris(): self
    {
        $this->favoris->clear();

        return $this;
    }



    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): self
    {
        $this->users = $users;

        return $this;
    }
    public function addFavoriUser(User $user): self
    {
        if (!$this->favoriUsers->contains($user)) {
            $this->favoriUsers[] = $user;
        }

        return $this;
    }

    public function removeFavoriUser(User $user): self
    {
        if ($this->favoriUsers->contains($user)) {
            $this->favoriUsers->removeElement($user);
        }

        return $this;
    }

    public function getFavoriUsers(): Collection
    {
        return $this->favoriUsers;
    }

    public function addUser(User $user): void
    {
        if (!$this->favoris->contains($user)) {
            $this->favoris[] = $user;
            $user->addFavori($this);
        }
    }

    /**
     * @return Collection<int, LivreLike>
     */
    public function getLikes(): Collection
    {
        return $this->likes;
    }

    public function addLike(LivreLike $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes->add($like);
            $like->setLivre($this);
        }

        return $this;
    }

    public function removeLike(LivreLike $like): self
    {
        if ($this->likes->removeElement($like)) {
            // set the owning side to null (unless already changed)
            if ($like->getLivre() === $this) {
                $like->setLivre(null);
            }
        }

        return $this;
    }


}
