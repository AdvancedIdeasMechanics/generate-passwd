<?php
namespace Advancedideasmechanics\Generatepasswd;

use Advancedideasmechanics\Uniqueidgenerator\UniqueidService;

class GenerateSecretService implements GenerateSecretServiceInterface
{
    public function getSecret($secret, $saltLength = 0)
    {

        $saltLength = isset($saltLength) && (int)$saltLength >= 64 ? $saltLength : 64;
        $uniqueIdService = new UniqueidService();

        $salt = $uniqueIdService->getId($saltLength);
        return crypt($secret, "\$6\$$salt\$");
    }
}
