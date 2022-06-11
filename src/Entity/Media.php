<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Media
 * @package App\Entity
 * @ORM\Entity
 */
class Media
{
    /**
     * @var int|null
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @var string|null
     * @ORM\Column
     */
    private ?string $path = null;

    /**
     * @var Experience|null
     * @ORM\ManyToOne(targetEntity="Experience", inversedBy="medias")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private ?Experience $experience = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string|null $path
     */
    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    /**
     * @return Experience|null
     */
    public function getExperience(): ?Experience
    {
        return $this->experience;
    }

    /**
     * @param Experience|null $experience
     */
    public function setExperience(?Experience $experience): void
    {
        $this->experience = $experience;
    }
}
