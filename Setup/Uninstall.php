<?php
/**
 * Space48_SeoTitles
 *
 * @category    Space48
 * @package     Space48_SeoTitles
 * @Date        04/2017
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @author      @diazwatson
 */

namespace Space48\SeoTitles\Setup;

use Magento\Catalog\Model\Category;
use Magento\Catalog\Model\Product;
use Magento\Eav\Api\AttributeRepositoryInterface;
use Magento\Eav\Api\Data\AttributeInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UninstallInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\StateException;

class Uninstall implements UninstallInterface
{

    /**
     * @var AttributeRepositoryInterface
     */
    private $attributeRepository;

    /**
     * Uninstall constructor.
     *
     * @param AttributeRepositoryInterface $attributeRepository
     */
    public function __construct(AttributeRepositoryInterface $attributeRepository)
    {

        $this->attributeRepository = $attributeRepository;
    }

    /**
     * Invoked when remove-data flag is set during module uninstall.
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     *
     * @return void
     * @throws NoSuchEntityException
     * @throws StateException
     */
    public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $entities = [Category::ENTITY, Product::ENTITY];

        foreach ($entities as $entity) {
            if ($attribute = $this->getAttribute($entity)) {
                $this->attributeRepository->delete($attribute);
            }
        }
    }

    /**
     * Get attribute based on entity
     *
     * @param $entity
     * @return AttributeInterface
     * @throws NoSuchEntityException
     */
    private function getAttribute($entity)
    {
        try {
            $attribute = $this->attributeRepository->get($entity, 'h1_override');
        } catch (NoSuchEntityException $e) {
            $attribute = false;
        }
        return $attribute;
    }
}