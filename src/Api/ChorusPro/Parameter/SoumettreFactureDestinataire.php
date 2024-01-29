<?php

namespace PisteGouvFr\Api\ChorusPro\Parameter;


class SoumettreFactureDestinataire implements \JsonSerializable {

    /** @var string  */
    private $codeDestinataire;
    /** @var string  */
    private $codeServiceExecutant;

    /**
     * @param string      $codeDestinataire
     * @param string|null $codeServiceExecutant
     */
    public function __construct(string $codeDestinataire, string $codeServiceExecutant = null) {
        $this->codeDestinataire     = $codeDestinataire;
        $this->codeServiceExecutant = $codeServiceExecutant;
    }


    public function jsonSerialize(): mixed {
        return [
            'codeDestinataire'     => $this->codeDestinataire,
            'codeServiceExecutant' => $this->codeServiceExecutant,
        ];
    }
}
