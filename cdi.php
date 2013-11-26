<?php
/*
 * VERSION 0.2
 */

include "interfaces/CDICommandInterface.iface";
include "interfaces/CDIDataInterface.iface";
include "interfaces/CDIDataObjectCommandInterface.iface";
include "interfaces/CDIDataObjectFacadeInterface.iface";
include "interfaces/CDIDataObjectInterface.iface";
include "interfaces/CDIDataTypeCommandInterface.iface";
include "interfaces/CDIDataTypeFacadeInterface.iface";
include "interfaces/CDIDataTypeInterface.iface";
include "interfaces/CDIFacadeInterface.iface";
include "interfaces/CDIReceiverInterface.iface";
include "interfaces/CDIRegistryInterface.iface";
include "interfaces/CDITypedCommandInterface.iface";
include "interfaces/CDITypedReceiverInterface.iface";

include "classes/CDIAbstractData.class";
include "classes/CDIAbstractDataObjectCommand.class";
include "classes/CDIAbstractDataObjectFacade.class";
include "classes/CDIAbstractDataTypeCommand.class";
include "classes/CDIAbstractDataTypeFacade.class";
include "classes/CDIAbstractTypedCommand.class";
include "classes/CDIAbstractTypedReceiver.class";
include "classes/CDIDataObject.class";
include "classes/CDIDataType.class";
include "classes/CDIRegistry.class";

include "modules/load/CDILoadCommand.class";
include "modules/load/CDILoadFacade.class";
include "modules/load/CDILoadInterface.iface";

include "modules/save/CDISaveCommand.class";
include "modules/save/CDISaveFacade.class";
include "modules/save/CDISaveInterface.iface";