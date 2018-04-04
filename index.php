<?php
/**
 * Codon PHP Framework
 *	www.nsslive.net/codon
 * Software License Agreement (BSD License)
 *
 * Copyright (c) 2008 Nabeel Shahzad, nsslive.net
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2.  Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products
 *    derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR
 * IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 * IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 * NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF
 * THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * @author Nabeel Shahzad
 * @copyright Copyright (c) 2008, Nabeel Shahzad
 * @link http://www.nsslive.net/codon
 * @license BSD License
 * @package codon_core
 */

/**
 *Package modifications made by David Clark (simpilotgroup)
 * git hub notated as phpvms5.5.x
 */

define('CODON_MODULES_PATH', dirname(__FILE__).'/core/modules');
define('CODON_DEFAULT_MODULE', 'Profile');
include 'core/codon.config.php';

define('SKINS_PATH', LIB_PATH.DS.'skins'.DS.CURRENT_SKIN);
Template::setSkinPath(SKINS_PATH);

if(Config::Get('XDEBUG_BENCHMARK')) {
	$memory_start = xdebug_memory_usage();
}

$BaseTemplate = new TemplateSet();

# Load the main skin
$settings_file = SKINS_PATH.DS.CURRENT_SKIN . '.php';
if(file_exists($settings_file))
	include $settings_file;

$BaseTemplate->template_path = SKINS_PATH;
$BaseTemplate->skin_path = SKINS_PATH;

Template::Set('MODULE_NAV_INC', $NAVBAR);
Template::Set('MODULE_HEAD_INC', $HTMLHead);

ob_start();
MainController::RunAllActions();
$page_content = ob_get_clean();

// http://blogs.msdn.com/b/ieinternals/archive/2010/03/30/combating-clickjacking-with-x-frame-options.aspx?Redirected=true
header('X-Frame-Options: SAMEORIGIN');
// http://blogs.msdn.com/b/ieinternals/archive/2011/01/31/controlling-the-internet-explorer-xss-filter-with-the-x-xss-protection-http-header.aspx
header('X-XSS-Protection: 1');
// http://msdn.microsoft.com/en-us/library/ie/gg622941(v=vs.85).aspx
header('X-Content-Type-Options: nosniff');

$BaseTemplate->Set('title', MainController::$page_title .' - '.SITE_NAME);
$BaseTemplate->Set('page_title', MainController::$page_title .' - '.SITE_NAME);

if(file_exists(SKINS_PATH.'/layout.php'))
{
	$BaseTemplate->Set('page_htmlhead', Template::Get('core_htmlhead.php', true));
	$BaseTemplate->Set('page_htmlreq', Template::Get('core_htmlreq.php', true));
	$BaseTemplate->Set('page_content', $page_content);

	$BaseTemplate->ShowTemplate('layout.php');
}
else
{
	# It's a template sammich!
	$BaseTemplate->ShowTemplate('header.php');
	echo $page_content;
	$BaseTemplate->ShowTemplate('footer.php');
}

# Force connection close
DB::close();

if(Config::Get('XDEBUG_BENCHMARK'))
{
	$run_time = xdebug_time_index();
	$memory_end = xdebug_memory_usage();


	echo 'TOTAL MEMORY: '.($memory_end - $memory_start).'<br />';
	echo 'PEAK: '.xdebug_peak_memory_usage().'<br />';
	echo 'RUN TIME: '.$run_time.'<br />';
}