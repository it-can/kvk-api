<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Search;

use Appvise\KvkApi\Model\Link;

class ResultaatItem
{
    private $kvkNummer;

    private $rsin;

    private $vestigingsnummer;

    private $handelsnaam;

    private $adresType;

    private $straatnaam;

    private $postcode;

    private $plaats;

    private $huisnummer;

    private $huisnummerToevoeging;

    private $type;

    private $actief;

    private $vervallenNaam;

    /** @var Link[] */
    private $links;

    public function __construct(
        string  $kvkNumber,
        ?string $rsin,
        ?string $vestigingsnummer,
        ?string $handelsnaam,
        ?string $adresType,
        ?string $straatnaam,
        ?string $postcode,
        ?string $plaats,
        ?string $huisnummer,
        ?string $huisnummerToevoeging,
        ?string $type,
        ?string $actief,
        ?string $vervallenNaam,
        ?array  $links = null
    ) {
        $this->kvkNummer = $kvkNumber;
        $this->rsin = $rsin;
        $this->vestigingsnummer = $vestigingsnummer;
        $this->handelsnaam = $handelsnaam;
        $this->adresType = $adresType;
        $this->straatnaam = $straatnaam;
        $this->plaats = $plaats;
        $this->postcode = $postcode;
        $this->huisnummer = $huisnummer;
        $this->huisnummerToevoeging = $huisnummerToevoeging;
        $this->type = $type;
        $this->actief = $actief;
        $this->vervallenNaam = $vervallenNaam;
        $this->links = $links;
    }

    /**
     * @deprecated use getKvkNummer()
     */
    public function getKvkNumber(): string
    {
        return $this->kvkNummer;
    }

    public function getKvkNummer(): string
    {
        return $this->kvkNummer;
    }

    public function getRsin(): ?string
    {
        return $this->rsin;
    }

    public function getVestigingsnummer(): ?string
    {
        return $this->vestigingsnummer;
    }

    public function getHandelsnaam(): ?string
    {
        return $this->handelsnaam;
    }

    public function getAdresType(): ?string
    {
        return $this->adresType;
    }

    public function getStraatnaam(): ?string
    {
        return $this->straatnaam;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getVervallenNaam(): ?string
    {
        return $this->vervallenNaam;
    }

    public function getActief(): ?string
    {
        return $this->actief;
    }

    public function getLinks(): ?array
    {
        return $this->links;
    }

    public function getPostcode(): ?string
    {
        return $this->postcode;
    }

    public function getPlaats(): ?string
    {
        return $this->plaats;
    }

    public function getHuisnummer(): ?string
    {
        return $this->huisnummer;
    }

    public function getHuisnummerToevoeging(): ?string
    {
        return $this->huisnummerToevoeging;
    }

    public function toArray(): array
    {
        $linksArray = [];
        foreach ($this->links as $link) {
            $linksArray[] = $link->toArray();
        }

        return [
            'kvkNummer' => $this->kvkNummer,
            'rsin' => $this->rsin,
            'vestigingsnummer' => $this->vestigingsnummer,
            'handelsnaam' => $this->handelsnaam,
            'adresType' => $this->adresType,
            'straatnaam' => $this->straatnaam,
            'postcode' => $this->postcode,
            'plaats' => $this->plaats,
            'huisnummer' => $this->huisnummer,
            'huisnummerToevoeging' => $this->huisnummerToevoeging,
            'type' => $this->type,
            'actief' => $this->actief,
            'vervallenNaam' => $this->vervallenNaam,
            'links' => $linksArray,
        ];
    }
}
