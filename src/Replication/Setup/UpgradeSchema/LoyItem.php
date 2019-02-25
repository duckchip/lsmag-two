<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 * @codingStandardsIgnoreFile
 */


namespace Ls\Replication\Setup\UpgradeSchema;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class LoyItem
{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $table_name = $setup->getTable( 'ls_replication_loy_item' ); 
        if ( ! $setup->tableExists( $table_name ) ) {
        
        	$table = $setup->getConnection()->newTable( $table_name );
        
        	$table->addColumn( 'loy_item_id', Table::TYPE_INTEGER, NULL, 
        	                    [ 'identity' => TRUE, 'primary' => TRUE,
        	                      'unsigned' => TRUE, 'nullable' => FALSE, 'auto_increment'=> TRUE ] );
        	$table->addColumn( 'scope', Table::TYPE_TEXT, 8);
        	$table->addColumn( 'scope_id', Table::TYPE_INTEGER, 11);
        	$table->addColumn( 'processed', Table::TYPE_BOOLEAN, null, [ 'default' => 0 ],'flag to check if data is already coped into magento 0 means needs to be copied into Magento tables, 1 means already copied' );
        	$table->addColumn( 'is_updated', Table::TYPE_BOOLEAN, null, [ 'default' => 0 ],'flag to check if data is already updated from Omni into magento 0 means already updated, 1 means  needs to be updated into Magento tables' );
        	$table->addColumn( 'AllowedToSell' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'BlockDiscount' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'BlockManualPriceChange' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'Blocked' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'Description' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'Details' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'GrossWeight' , Table::TYPE_FLOAT, '' );
        	$table->addColumn( 'IsDeleted' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'ItemCategoryCode' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'ItemFamilyCode' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'Price' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'ProductGroupId' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'SalesUomId' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'SeasonCode' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'UnitVolume' , Table::TYPE_FLOAT, '' );
        	$table->addColumn( 'UnitsPerParcel' , Table::TYPE_FLOAT, '' );
        	$table->addColumn( 'nav_id' , Table::TYPE_TEXT, '' );
        
        	$setup->getConnection()->createTable( $table );
        }
    }


}

