<?php
/**
 * THIS IS AN AUTOGENERATED FILE
 * DO NOT MODIFY
 */


namespace Ls\Replication\Setup\UpgradeSchema;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\DB\Ddl\Table;

class ReplLoyVendorItemMapping
{

    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $table_name = $setup->getTable( 'ls_replication_repl_loy_vendor_item_mapping' ); 
        if ( ! $setup->tableExists( $table_name ) ) {
        
        	$table = $setup->getConnection()->newTable( $table_name );
        
        	$table->addColumn( 'repl_loy_vendor_item_mapping_id', Table::TYPE_INTEGER, NULL, 
        	                    [ 'identity' => TRUE, 'primary' => TRUE,
        	                      'unsigned' => TRUE, 'nullable' => FALSE, 'auto_increment'=> TRUE ] );
        	$table->addColumn( 'scope', Table::TYPE_TEXT, 8);
        	$table->addColumn( 'scope_id', Table::TYPE_INTEGER, 11);
        	$table->addColumn( 'processed', Table::TYPE_BOOLEAN, null, [ 'default' => 0 ],'flag to check if data is already coped into magento 0 means needs to be copied into Magento tables, 1 means already copied' );
        	$table->addColumn( 'is_updated', Table::TYPE_BOOLEAN, null, [ 'default' => 0 ],'flag to check if data is already updated from Omni into magento 0 means already updated, 1 means  needs to be updated into Magento tables' );
        	$table->addColumn( 'Deleted' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'DisplayOrder' , Table::TYPE_INTEGER, '' );
        	$table->addColumn( 'IsDeleted' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'IsFeaturedProduct' , Table::TYPE_BOOLEAN, '' );
        	$table->addColumn( 'NavManufacturerId' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'NavManufacturerItemId' , Table::TYPE_TEXT, '' );
        	$table->addColumn( 'NavProductId' , Table::TYPE_TEXT, '' );
        
        	$setup->getConnection()->createTable( $table );
        }
    }


}

