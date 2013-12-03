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
define('CDI_COMMAND_LOAD', 'load');
require "modules/load/CDILoadCommand.class";
require "modules/load/CDILoadFacade.class";
require "modules/load/CDILoadInterface.iface";
CDI::addCommandModule(CDI_MODULE_LOAD, 
  new CDIDataTypeCommandDefinition(
    'Load',
    'CDILoadCommand', 
    'CDILoadFacade', 
    'CDILoadInterface',
    CDI_COMMAND_LOAD
  )
);

// Save module
define('CDI_MODULE_SAVE', 'save');
define('CDI_COMMAND_SAVE', 'save');
require "modules/save/CDISaveCommand.class";
require "modules/save/CDISaveFacade.class";
require "modules/save/CDISaveInterface.iface";
CDI::addCommandModule(CDI_MODULE_SAVE, 
  new CDIDataObjectCommandDefinition(
    'Save',
    'CDISaveCommand', 
    'CDISaveFacade', 
    'CDISaveInterface',
    CDI_COMMAND_SAVE
  )
);

// ID module
define('CDI_MODULE_ID', 'id');
define('CDI_COMMAND_ID', 'id');
require "modules/id/CDIIDCommand.class";
require "modules/id/CDIIDFacade.class";
require "modules/id/CDIIDInterface.iface";
CDI::addCommandModule(CDI_MODULE_ID,
  new CDIDataObjectCommandDefinition(
    'ID',
    'CDIIDCommand',
    'CDIIDFacade',
    'CDIIDInterface',
    CDI_COMMAND_ID
  )
);

// Delete module
define('CDI_MODULE_DELETE', 'delete');
define('CDI_COMMAND_DELETE', 'delete');
require "modules/delete/CDIDeleteCommand.class";
require "modules/delete/CDIDeleteFacade.class";
require "modules/delete/CDIDeleteInterface.iface";
CDI::addCommandModule(CDI_MODULE_DELETE,
  new CDIDataObjectCommandDefinition(
    'Delete',
    'CDIDeleteCommand',
    'CDIDeleteFacade',
    'CDIDeleteInterface',
    CDI_COMMAND_DELETE
  )
);

// Exim module
define('CDI_MODULE_EXPORT', 'export');
define('CDI_MODULE_IMPORT', 'import');
define('CDI_COMMAND_EXPORT', 'export');
define('CDI_COMMAND_IMPORT', 'import');
require "modules/exim/CDIExportChunk.class";
require "modules/exim/CDIExportCommand.class";
require "modules/exim/CDIExportFacade.class";
require "modules/exim/CDIExportInterface.iface";
require "modules/exim/CDIImportCommand.class";
require "modules/exim/CDIImportFacade.class";
require "modules/exim/CDIImportInterface.iface";
CDI::addCommandModule(CDI_MODULE_EXPORT,
  new CDIDataObjectCommandDefinition(
    'Export',
    'CDIExportCommand',
    'CDIExportFacade',
    'CDIExportInterface',
    CDI_COMMAND_EXPORT
  )
);
CDI::addCommandModule(CDI_MODULE_IMPORT,
  new CDIDataTypeCommandDefinition(
    'Import',
    'CDIImportCommand',
    'CDIImportFacade',
    'CDIImportInterface',
    CDI_COMMAND_IMPORT
  )
);  

// Label module
define('CDI_MODULE_LABEL', 'label');
define('CDI_COMMAND_LABEL', 'label');
require "modules/label/CDILabelCommand.class";
require "modules/label/CDILabelFacade.class";
require "modules/label/CDILabelInterface.iface";
CDI::addCommandModule(CDI_MODULE_LABEL,
  new CDIDataObjectCommandDefinition(
    'Label',
    'CDILabelCommand',
    'CDILabelFacade',
    'CDILabelInterface',
    CDI_COMMAND_LABEL
  )
);

// GUID module
define('CDI_MODULE_GUID', 'guid');
define('CDI_COMMAND_GUID', 'guid');
require 'modules/guid/CDIGuidCommand.class';
require "modules/guid/CDIGuidFacade.class";
require "modules/guid/CDIGuidInterface.iface";
CDI::addCommandModule(CDI_MODULE_GUID,
  new CDIDataObjectCommandDefinition(
    'GUID',
    'CDIGuidCommand',
    'CDIGuidFacade',
    'CDIGuidInterface',
    CDI_COMMAND_GUID
  )
);

define('CDI_MODULE_GUID_DELETE', 'guid_delete');
define('CDI_COMMAND_GUID_DELETE', 'guid_delete');
require 'modules/guid/CDIGuidDeleteCommand.class';
require "modules/guid/CDIGuidDeleteFacade.class";
require "modules/guid/CDIGuidDeleteInterface.iface";
CDI::addCommandModule(CDI_MODULE_GUID_DELETE,
  new CDIDataObjectCommandDefinition(
    'Delete by GUID',
    'CDIGuidDeleteCommand',
    'CDIGuidDeleteFacade',
    'CDIGuidDeleteInterface',
    CDI_COMMAND_GUID_DELETE
  )
);

define('CDI_MODULE_GUID_LOAD', 'guid_load');
define('CDI_COMMAND_GUID_LOAD', 'guid_load');
require 'modules/guid/CDIGuidLoadCommand.class';
require "modules/guid/CDIGuidLoadFacade.class";
require "modules/guid/CDIGuidLoadInterface.iface";
CDI::addCommandModule(CDI_MODULE_GUID_LOAD,
  new CDIDataObjectCommandDefinition(
    'Load by GUID',
    'CDIGuidLoadCommand',
    'CDIGuidLoadFacade',
    'CDIGuidLoadInterface',
    CDI_COMMAND_GUID_LOAD
  )
);

define('CDI_MODULE_GUID_SAVE', 'guid_save');
define('CDI_COMMAND_GUID_SAVE', 'guid_save');
require 'modules/guid/CDIGuidSaveCommand.class';
require "modules/guid/CDIGuidSaveFacade.class";
require "modules/guid/CDIGuidSaveInterface.iface";
CDI::addCommandModule(CDI_MODULE_GUID_SAVE,
  new CDIDataObjectCommandDefinition(
    'Save by GUID',
    'CDIGuidSaveCommand',
    'CDIGuidSaveFacade',
    'CDIGuidSaveInterface',
    CDI_COMMAND_GUID_SAVE
  )
);

define('CDI_MODULE_STUB', 'stub');
define('CDI_COMMAND_STUB', 'stub');
require 'modules/stub/CDIStubCommand.class';
require 'modules/stub/CDIStubFacade.class';
require 'modules/stub/CDIStubInterface.iface';
CDI::addCommandModule(CDI_MODULE_STUB,
  new CDIDataTypeCommandDefinition(
    'Create Stub',
    'CDIStubCommand',
    'CDIStubFacade',
    'CDIStubInterface',
    CDI_COMMAND_STUB
  )
);

define('CDI_MODULE_URL', 'url');
define('CDI_COMMAND_URL', 'url');
require 'modules/stub/CDICanonUrlCommand.class';
require 'modules/stub/CDICanonUrlFacade.class';
require 'modules/stub/CDICanonUrlInterface.iface';
CDI::addCommandModule(CDI_MODULE_URL,
  new CDIDataObjectCommandDefinition(
    'Get URL',
    'CDICanonUrlCommand',
    'CDICanonUrlFacade',
    'CDICanonUrlInterface',
    CDI_COMMAND_URL
  )
);