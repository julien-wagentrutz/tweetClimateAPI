<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tweet
 *
 * @ORM\Table(name="Tweet", indexes={@ORM\Index(name="author_id", columns={"author_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\TweetRepository")
 */
class Tweet
{
    /**
     * @var string|null
     *
     * @ORM\Column(name="sentiment", type="string", length=9, nullable=true)
     */
    private $sentiment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=16777215, nullable=true)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="tweetId", type="string", length=18, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tweetid;

    /**
     * @var \Author
     *
     * @ORM\ManyToOne(targetEntity="Author")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="author_id")
     * })
     */
    private $author;

    public function getSentiment(): ?string
    {
        return $this->sentiment;
    }

    public function setSentiment(?string $sentiment): self
    {
        $this->sentiment = $sentiment;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getTweetid(): ?string
    {
        return $this->tweetid;
    }

    public function getAuthor(): ?Author
    {
        return $this->author;
    }

    public function setAuthor(?Author $author): self
    {
        $this->author = $author;

        return $this;
    }


}
