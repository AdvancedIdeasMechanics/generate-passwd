<?php
namespace Advancedideasmechanics\Generatepasswd;

interface GenerateSecretServiceInterface {
    public function getSecret($secret, $saltLength);
}
