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

namespace space48\seotitles\Setup;

use Magento\Catalog\Model\Product;
use Magento\Eav\Api\AttributeRepositoryInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Space48\DBUpdates\Model\Eav\Attribute;
use Magento\Eav\Setup\EavSetupFactory;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * @var AttributeRepositoryInterface
     */
    private $attributeRepository;

    /**
     * EAV setup factory
     *
     * @var EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     * UpgradeData constructor.
     *
     * @param AttributeRepositoryInterface $attributeRepository
     * @param EavSetupFactory              $eavSetupFactory
     */
    public function __construct(
        AttributeRepositoryInterface $attributeRepository,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->attributeRepository = $attributeRepository;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * Upgrades data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface   $context
     *
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $attributeCode = 'h1_override';
        $attribute = new Attribute($this->attributeRepository, Product::ENTITY);
        if ($attribute->getAttributeByCode($attributeCode)) {
            $attribute->delete($attributeCode);
        }

        /** @var \Magento\Eav\Setup\EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        if (!$attribute->getAttributeByCode($attributeCode)) {

            if (!$attribute->getAttributeByCode($attributeCode)) {
                $eavSetup->addAttribute(Product::ENTITY, $attributeCode,
                    [
                        'type'                    => 'varchar',
                        'backend'                 => '',
                        'frontend'                => '',
                        'label'                   => 'H1 Override',
                        'input'                   => 'text',
                        'class'                   => '',
                        'global'                  => ScopedAttributeInterface::SCOPE_STORE,
                        'visible'                 => true,
                        'required'                => false,
                        'user_defined'            => false,
                        'default'                 => null,
                        'nullable'                => true,
                        'searchable'              => false,
                        'filterable'              => false,
                        'comparable'              => false,
                        'visible_on_front'        => false,
                        'used_in_product_listing' => false,
                        'unique'                  => false,
//                        'group'                   => 'Meta Information', // TODO for this to work we need to remove migration-* from eav_attribute_group
                    ]
                );

            }
        }
    }
}