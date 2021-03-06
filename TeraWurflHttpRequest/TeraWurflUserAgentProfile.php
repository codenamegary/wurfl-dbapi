<?php
/**
 * Copyright (c) 2014 ScientiaMobile, Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Refer to the COPYING.txt file distributed with this package.
 *
 * @package    WURFL_TeraWurflHttpRequest
 * @copyright  ScientiaMobile, Inc.
 * @author     Steve Kamerman <steve AT scientiamobile.com>
 * @license    GNU Affero General Public License
 * @version    $id$
 */
/**
 * User Agent Profile (UAProf)
 * @package TeraWurfHttpRequest
 */
class TeraWurflUserAgentProfile extends TeraWurflHttpRequestHeader {
	
	/**
	 * Checks if the UAProf contains a URL
	 * @return bool true if this user agent profile contains a URL
	 */
	public function containsValidUrl() {
		return ($this->startsWith('http') || $this->startsWith('"http'));
	}
}