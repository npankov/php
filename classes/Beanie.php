<?php

class Beanie
{
    public const AVAILABLE_SIZES = ['S', 'M', 'L', 'XL', 'XXL'];
    public const MATERIAL_TYPES = ['Laine', 'Laine bio', 'Laine et cachemire', 'Arc-en-ciel'];
    protected int $id;
    protected string $name;
    protected float $price;
    protected string $description;
    protected string $image;
    protected array $sizes;
    protected array $materials;

    /**
     * @param int $id
     * @param string $name
     * @param float $price
     * @param string $description
     * @param string $image
     * @param array $sizes
     * @param array $materials
     */
    public function __construct(int $id, string $name, float $price, string $description, string $image, array $sizes, array $materials)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->sizes = $sizes;
        $this->materials = $materials;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return array
     */
    public function getSizes(): array
    {
        return $this->sizes;
    }

    /**
     * @param array $sizes
     */
    public function setSizes(array $sizes): void
    {
        $this->sizes = $sizes;
    }

    /**
     * @return array
     */
    public function getMaterials(): array
    {
        return $this->materials;
    }

    /**
     * @param array $materials
     */
    public function setMaterials(array $materials): void
    {
        $this->materials = $materials;
    }


}