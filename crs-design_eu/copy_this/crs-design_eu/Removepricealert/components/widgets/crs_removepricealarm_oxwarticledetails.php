<?php
/**
 * @author cRs-Design.eu
 * @version 1.0
 * @package crs_remove_priceAlert
 */
class crs_removepricealarm_oxwarticledetails extends crs_removepricealarm_oxwarticledetails_parent {
	/**
     * Template variable getter. Returns if price alarm is disabled
     *
     * @return object
     */
    public function isPriceAlarm()
    {
    	return 0;
    }
}