<?php
/*
 * VERSION 0.2
 */



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
require "interfaces/CDICommandRegistryInterface.iface";
require "interfaces/CDIDataTypeRegistryInterface.iface";

require "interfaces/CDICommandDefinitionInterface.iface";

require "classes/CDI.class";

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
 * Default module configuration
 */

// Load module
define('CDI_MODULE_LOAD', 'load');
require "modules/load/CDILoadCommand.class";
require "modules/load/CDILoadFacade.class";
require "modules/load/CDILoadInterface.iface";
CDI::addDefaultCommandModule(CDI_MODULE_LOAD, 
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
CDI::addDefaultCommandModule(CDI_MODULE_SAVE, 
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
CDI::addDefaultCommandModule(CDI_MODULE_ID,
  new CDIDataObjectCommandDefinition(
    'ID',
    'CDIIDCommand',
    'CDIIDFacade',
    'CDIIDInterface',
    'id'
  )
);
