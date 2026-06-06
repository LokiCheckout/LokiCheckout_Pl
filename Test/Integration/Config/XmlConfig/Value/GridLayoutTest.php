<?php
declare(strict_types=1);

namespace LokiCheckout\Pl\Test\Integration\Config\XmlConfig\Value;

use Magento\Framework\App\ObjectManager;
use Magento\Framework\ObjectManagerInterface;
use PHPUnit\Framework\TestCase;
use LokiCheckout\Core\Config\XmlConfig;

class GridLayoutTest extends TestCase
{
    public function testGetGridLayout()
    {
        $xmlConfig = $this->getObjectManager()->get(XmlConfig::class);
        $gridLayout = $xmlConfig->getGridLayout('default_grid');

        $grid = $gridLayout->getGridByCountryId('PL');
        $this->assertEquals('poland', $grid->getName());
    }

    /**
     * @return ObjectManagerInterface
     */
    private function getObjectManager(): ObjectManagerInterface
    {
        return ObjectManager::getInstance();
    }
}
