<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shops
 *
 * @ORM\Table(name="shops")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShopsRepository")
 */
class Shops
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="shopName", type="string", length=100)
     */
    private $shopName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="affUrl", type="string", length=150)
     */
    private $affUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=3000)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="keywordsExtra", type="string", length=3000, nullable=true)
     */
    private $keywordsExtra;

    /**
     * @var int
     *
     * @ORM\Column(name="keywordsQuote", type="integer", nullable=true)
     */
    private $keywordsQuote;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=100)
     */
    private $country;

    /**
     * @var int
     *
     * @ORM\Column(name="quote", type="integer")
     */
    private $quote;

    /**
     * @var int
     *
     * @ORM\Column(name="adv", type="integer", nullable=true)
     */
    private $adv;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set shopName
     *
     * @param string $shopName
     *
     * @return Shops
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;

        return $this;
    }

    /**
     * Get shopName
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Shops
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Shops
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set affUrl
     *
     * @param string $affUrl
     *
     * @return Shops
     */
    public function setAffUrl($affUrl)
    {
        $this->affUrl = $affUrl;

        return $this;
    }

    /**
     * Get affUrl
     *
     * @return string
     */
    public function getAffUrl()
    {
        return $this->affUrl;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return Shops
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set keywordsExtra
     *
     * @param string $keywordsExtra
     *
     * @return Shops
     */
    public function setKeywordsExtra($keywordsExtra)
    {
        $this->keywordsExtra = $keywordsExtra;

        return $this;
    }

    /**
     * Get keywordsExtra
     *
     * @return string
     */
    public function getKeywordsExtra()
    {
        return $this->keywordsExtra;
    }

    /**
     * Set keywordsQuote
     *
     * @param integer $keywordsQuote
     *
     * @return Shops
     */
    public function setKeywordsQuote($keywordsQuote)
    {
        $this->keywordsQuote = $keywordsQuote;

        return $this;
    }

    /**
     * Get keywordsQuote
     *
     * @return int
     */
    public function getKeywordsQuote()
    {
        return $this->keywordsQuote;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Shops
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set quote
     *
     * @param integer $quote
     *
     * @return Shops
     */
    public function setQuote($quote)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return int
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * Set adv
     *
     * @param integer $adv
     *
     * @return Shops
     */
    public function setAdv($adv)
    {
        $this->adv = $adv;

        return $this;
    }

    /**
     * Get adv
     *
     * @return int
     */
    public function getAdv()
    {
        return $this->adv;
    }
}

