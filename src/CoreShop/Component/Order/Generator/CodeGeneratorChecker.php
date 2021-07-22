<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) CoreShop GmbH (https://www.coreshop.org)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

namespace CoreShop\Component\Order\Generator;

use CoreShop\Component\Order\Model\CartPriceRuleVoucherGeneratorInterface;
use CoreShop\Component\Order\Repository\CartPriceRuleVoucherRepositoryInterface;
use Webmozart\Assert\Assert;

class CodeGeneratorChecker implements CodeGeneratorCheckerInterface
{
    private $voucherCodeRepository;
    private $letterResolver;
    private $ratio;

    public function __construct(
        CartPriceRuleVoucherRepositoryInterface $voucherCodeRepository,
        CodeGeneratorLetterResolver $letterResolver,
        float $ratio = 0.5
    )
    {
        $this->voucherCodeRepository = $voucherCodeRepository;
        $this->letterResolver = $letterResolver;
        $this->ratio = $ratio;
    }

    /**
     * {@inheritdoc}
     */
    public function isGenerationPossible(CartPriceRuleVoucherGeneratorInterface $generator)
    {
        $amountToBeCreated = $generator->getAmount();
        $possibleAmount = $this->calculatePossibleGenerationAmount($generator);

        return $possibleAmount >= $amountToBeCreated;
    }

    /**
     * {@inheritdoc}
     */
    public function getPossibleGenerationAmount(CartPriceRuleVoucherGeneratorInterface $generator)
    {
        return $this->calculatePossibleGenerationAmount($generator);
    }

    /**
     * @throws \InvalidArgumentException
     */
    private function calculatePossibleGenerationAmount(CartPriceRuleVoucherGeneratorInterface $generator)
    {
        $amountToBeCreated = $generator->getAmount();
        $length = $generator->getLength();

        Assert::allNotNull(
            [$amountToBeCreated, $length],
            'Code length or amount cannot be null.'
        );

        $generatedAmount = $this->voucherCodeRepository->countCodes(
            $length,
            $generator->getPrefix(),
            $generator->getSuffix()
        );

        $letters = $this->letterResolver->findLetters($generator);

        $codeCombination = strlen($letters) ** $length * $this->ratio;
        if ($codeCombination >= \PHP_INT_MAX) {
            return \PHP_INT_MAX - $generatedAmount;
        }

        return (int)$codeCombination - $generatedAmount;
    }
}
