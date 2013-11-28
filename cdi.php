<?php
/**
 * @file
 * This file contains all the includes needed to setup CDI and its default
 * command modules.
 * 
 * @author Robert Turnbull <robert@ottawadeveloper.com>
 * @version 0.2
 * 
 * CDI (Common Data Interface) is a library that provides a data access 
 * framework that is extensible both in terms of adding new methods (called
 * commands) and in terms of adding new data types. The new data types need 
 * share nothing and only need to implement the commands that are feasible. Data
 * types provide implementations of commands through receiver objects and each
 * data type may have many receiver objects, which are used transparently 
 * through a series of facades.
 * 
 * 
 */

// Includes for CDI

require "interfaces/CDICommandInterface.iface";
require "interfaces/CDITypedCommandInterface.iface";
require "interfaces/CDIDataObjectCommandInterface.iface";
require "interfaces/CDIDataTypeCommandInterface.iface";


require "interfaces/CDIDataInterface.iface";
require "interfaces/CDIDataObjectInterface.iface";
require "interfaces/CDIDataTypeInterface.iface";

require "interfaces/CDIFacadeInterface.iface";
require "interfaces/CDIDataObjectFacadeInterface.iface";
require "interfaces/CDIDataTypeFacadeInterface.iface";

require "interfaces/CDIReceiverInterface.iface";
require "interfaces/CDITypedReceiverInterface.iface";

require "interfaces/CDIRegistryInterface.iface";
require "interfaces/CDICommandModuleRegistryInterface.iface";
require "interfaces/CDIDataTypeRegistryInterface.iface";

require "interfaces/CDICommandModuleDefinitionInterface.iface";

require "classes/CDI.class";

require "classes/CDIException.class";

require "classes/CDIAbstractData.class";

require "classes/CDIAbstractTypedCommand.class";
require "classes/CDIAbstractDataObjectCommand.class";
require "classes/CDIAbstractDataTypeCommand.class";

require "classes/CDIAbstractDataObjectFacade.class";
require "classes/CDIAbstractDataTypeFacade.class";

require "classes/CDIAbstractTypedReceiver.class";

require "classes/CDIAbstractCommandDefinition.class";
require "classes/CDIDataObjectCommandDefinition.class";
require "classes/CDIDataTypeCommandDefinition.class";

require "classes/CDIDataObject.class";
require "classes/CDIDataType.class";

require "classes/CDIRegistry.class";



/*
 * Default command module configuration
 */

// Load module
define('CDI_MODULE_LOAD', 'load');
require "modules/load/CDILoadCommand.class";
require "modules/load/CDILoadFacade.class";
require "modules/load/CDILoadInterface.iface";
CDI::addCommandModule(CDI_MODULE_LOAD, 
  new CDIDataTypeCommandDefinition(
    'Load',
    'CDILoadCommand', 
    'CDILoadFacade', 
    'CDILoadInterface',
    'load'
  )
);

// Save module
define('CDI_MODULE_SAVE', 'save');
require "modules/save/CDISaveCommand.class";
require "modules/save/CDISaveFacade.class";
require "modules/save/CDISaveInterface.iface";
CDI::addCommandModule(CDI_MODULE_SAVE, 
  new CDIDataObjectCommandDefinition(
    'Save',
    'CDISaveCommand', 
    'CDISaveFacade', 
    'CDISaveInterface',
    'save'
  )
);

// ID module
define('CDI_MODULE_ID', 'id');
require "modules/id/CDIIDCommand.class";
require "modules/id/CDIIDFacade.class";
require "modules/id/CDIIDInterface.iface";
CDI::addCommandModule(CDI_MODULE_ID,
  new CDIDataObjectCommandDefinition(
    'ID',
    'CDIIDCommand',
    'CDIIDFacade',
    'CDIIDInterface',
    'id'
  )
);
