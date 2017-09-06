<?php declare(strict_types=1);

namespace Goose\Images;

use DOMWrap\Element;

/**
 * Image
 *
 * @package Goose\Images
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 */
class Image {
    /**
     * @param mixed[] $options
     */
    public function __construct($options = []) {
        foreach ($options as $key => $value) {
            $method = 'set' . ucfirst($key);

            if (method_exists($this, $method)) {
                call_user_func([$this, $method], $value);
            }
        }
    }

    /** @var Element */
    private $topImageNode = null;

    /**
     * @param Element $topImageNode
     *
     * @return self
     */
    public function setTopImageNode($topImageNode): self {
        $this->topImageNode = $topImageNode;

        return $this;
    }

    /**
     * @return Element
     */
    public function getTopImageNode(): Element {
        return $this->topImageNode;
    }

    /** @var string */
    private $imageSrc = '';

    /**
     * @param string $imageSrc
     *
     * @return self
     */
    public function setImageSrc($imageSrc): self {
        $this->imageSrc = $imageSrc;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageSrc(): string {
        return $this->imageSrc;
    }

    /** @var double */
    private $imageScore = 0.0;

    /**
     * @param double $imageScore
     *
     * @return self
     */
    public function setImageScore($imageScore): self {
        $this->imageScore = $imageScore;

        return $this;
    }

    /**
     * @return float
     */
    public function getImageScore(): float {
        return $this->imageScore;
    }

    /** @var double */
    private $confidenceScore = 0.0;

    /**
     * @param double $confidenceScore
     *
     * @return self
     */
    public function setConfidenceScore($confidenceScore): self {
        $this->confidenceScore = $confidenceScore;

        return $this;
    }

    /**
     * @return float
     */
    public function getConfidenceScore(): float {
        return $this->confidenceScore;
    }

    /** @var int */
    private $height = 0;

    /**
     * @param int $height
     *
     * @return self
     */
    public function setHeight($height): self {
        $this->height = $height;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int {
        return $this->height;
    }

    /** @var int */
    private $width = 0;

    /**
     * @param int $width
     *
     * @return self
     */
    public function setWidth($width): self {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int {
        return $this->width;
    }

    /** @var string */
    private $imageExtractionType = 'NA';

    /**
     * @param string $imageExtractionType
     *
     * @return self
     */
    public function setImageExtractionType($imageExtractionType): self {
        $this->imageExtractionType = $imageExtractionType;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageExtractionType(): string {
        return $this->imageExtractionType;
    }

    /** @var int */
    private $bytes = 0;

    /**
     * @param int $bytes
     *
     * @return self
     */
    public function setBytes($bytes): self {
        $this->bytes = $bytes;

        return $this;
    }

    /**
     * @return int
     */
    public function getBytes(): int {
        return $this->bytes;
    }
}
