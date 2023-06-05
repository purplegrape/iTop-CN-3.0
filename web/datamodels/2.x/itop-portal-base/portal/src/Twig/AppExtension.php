<?php
/**
 * Copyright (C) 2013-2021 Combodo SARL
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 */

namespace Combodo\iTop\Portal\Twig;

use AttributeDate;
use AttributeDateTime;
use AttributeText;
use Closure;
use Dict;
use Exception;
use IssueLog;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\Loader\FilesystemLoader;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use utils;


/**
 * Class AppExtension
 *
 * @package Combodo\iTop\Portal\Twig
 * @since   2.7.0
 * @author  Bruno Da Silva <bruno.dasilva@combodo.com>
 * @deprected 3.1.0 N°4287
 */
class AppExtension extends AbstractExtension
{
	/**
	 * @return array|\Twig\TwigFilter[]|\Twig_SimpleFilter[]
	 */
	public function getFilters()
	{
		$filters = array();
		// Filter to translate a string via the Dict::S function
		// Usage in twig: {{ 'String:ToTranslate'|dict_s }}
		$filters[] = new Twig_SimpleFilter('dict_s',
			function ($sStringCode, $sDefault = null, $bUserLanguageOnly = false) {
				return Dict::S($sStringCode, $sDefault, $bUserLanguageOnly);
			}
		);

		// Filter to format a string via the Dict::Format function
		// Usage in twig: {{ 'String:ToTranslate'|dict_format() }}
		$filters[] = new Twig_SimpleFilter('dict_format',
			function ($sStringCode, $sParam01 = null, $sParam02 = null, $sParam03 = null, $sParam04 = null) {
				return Dict::Format($sStringCode, $sParam01, $sParam02, $sParam03, $sParam04);
			}
		);

		/**
		 * Filter to format output
		 * example a DateTime is converted to user format
		 * Usage in twig: {{ 'String:ToFormat'|output_format }}
		 *
		 * @since 3.0.0
		 */
		$filters[] = new Twig_SimpleFilter('date_format',
			function ($sDate) {
				try
				{
					if (preg_match('@^\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d$@', trim($sDate)))
					{
						return AttributeDateTime::GetFormat()->Format($sDate);
					}
					if (preg_match('@^\d\d\d\d-\d\d-\d\d$@', trim($sDate)))
					{
						return AttributeDate::GetFormat()->Format($sDate);
					}
				}
				catch (Exception $e)
				{
				}

				return $sDate;
			}
		);

		/**
		 * Filter to format output
		 * example a DateTime is converted to user format
		 * Usage in twig: {{ 'String:ToFormat'|output_format }}
		 *
		 * @since 3.0.0
		 */
		$filters[] = new Twig_SimpleFilter('size_format',
			function ($sSize) {
				return utils::BytesToFriendlyFormat($sSize);
			}
		);

		// Filter to enable base64 encode/decode
		// Usage in twig: {{ 'String to encode'|base64_encode }}
		$filters[] = new Twig_SimpleFilter('base64_encode', 'base64_encode');
		$filters[] = new Twig_SimpleFilter('base64_decode', 'base64_decode');

		// Filter to enable json decode  (encode already exists)
		// Usage in twig: {{ aSomeArray|json_decode }}
		$filters[] = new Twig_SimpleFilter('json_decode', function ($sJsonString, $bAssoc = false) {
				return json_decode($sJsonString, $bAssoc);
			}
		);

		/**
		 * Filter to sanitize a text
		 * Usage in twig: {{ 'variable_name:to-sanitize'|sanitize(constant('utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME')) }}
		 *
		 * @uses \utils::Sanitize()
		 * @since 3.0.0
		 */
		$filters[] = new Twig_SimpleFilter('sanitize', function (string $sString, string $sFilter) {
				return utils::Sanitize($sString, '', $sFilter);
			}
		);

		/**
		 * Filter to transform the wiki syntax ONLY into HTML.
		 *
		 * @uses \AttributeText::RenderWikiHtml()
		 * @since 3.0.0
		 */
		$filters[] = new Twig_SimpleFilter('render_wiki_to_html', function ($sString) {
				return AttributeText::RenderWikiHtml($sString, true /* Important, otherwise hyperlinks will be tranformed as well */);
			}
		);

		// Filter to add itopversion to an url
		$filters[] = new Twig_SimpleFilter('add_itop_version', function ($sUrl) {
			$sUrl = utils::AddParameterToUrl($sUrl, 'itopversion', ITOP_VERSION);

			return $sUrl;
		});

		// Filter to add a module's version to an url
		$filters[] = new Twig_SimpleFilter('add_module_version', function ($sUrl, $sModuleName) {
			$sModuleVersion = utils::GetCompiledModuleVersion($sModuleName);
			$sUrl = utils::AddParameterToUrl($sUrl, 'moduleversion', $sModuleVersion);

			return $sUrl;
		});

		/**
		 * var_export can be used for example to transform a PHP boolean to 'true' or 'false' strings
		 * @see https://www.php.net/manual/fr/function.var-export.php
		 *
		 * @since 3.0.0
		 */
		$filters[] = new Twig_SimpleFilter('var_export', 'var_export');

		//since 2.7.7 3.0.2 3.1.0 N°4867 "Twig content not allowed" error when use the extkey widget search icon in the user portal
		// Since 2.7.8 filter more functions as filter 'filter' is used by the portal
		$filters[] = new Twig_SimpleFilter('filter', function ($array, $arrow) {
			$ret = $this->SanitizeFilter($array, $arrow);
			if ($ret !== false) {
				IssueLog::Error('Twig "filter" filter has limited capabilities');
				return [$ret];
			}
			$oEnv = new Environment(new FilesystemLoader());
			return twig_array_filter($oEnv, $array, $arrow);
		});
		// Since 2.7.8 deactivate map
		$filters[] = new Twig_SimpleFilter('map', function ($array, $arrow) {
			IssueLog::Error('Twig "map" filter is deactivated');
			return $array;
		});
		// Since 2.7.8 deactivate reduce
		$filters[] = new Twig_SimpleFilter('reduce', function ($array, $arrow, $initial = null) {
			IssueLog::Error('Twig "reduce" filter is deactivated');
			return $array;
		});

		return $filters;
	}

	private function SanitizeFilter($array, $arrow)
	{
		$aRestricted = [
			'system',
			'exec',
			'passthru',
			'popen',
			'proc_open',
			'shell_exec',
			'file_get_contents',
			'file_put_contents',
			'eval',
			'pcntl_exec',
			'chgrp',
			'chmod',
			'chown',
			'lchgrp',
			'lchown',
			'umask',
			'copy',
			'delete',
			'unlink',
			'link',
			'mkdir',
			'rmdir',
			'rename',
			'symlink',
			'tempnam',
			'tmpfile',
			'touch',
			'fgetc',
			'fgetcsv',
			'fgets',
			'fgetss',
			'file',
			'flock',
			'fopen',
			'fpassthru',
			'fputcsv',
			'fputs',
			'fread',
			'fscanf',
			'ftruncate',
			'fwrite',
			'glob',
			'readfile',
			'readlink',
			'parse_ini_file',
			'mail',
		];
		$aRestrictedStartWith = ['ftp_', 'zip_', 'stream_'];

		if (is_string($arrow)) {
			if (in_array(strtolower($arrow), $aRestricted)) {
				return json_encode($array);
			}
			foreach ($aRestrictedStartWith as $sRestrictedStartWith) {
				if (utils::StartsWith($arrow, $sRestrictedStartWith)) {
					return json_encode($array);
				}
			}
		} elseif ($arrow instanceof Closure) {
			return json_encode($array);
		}
		return false;
	}

	/**
	 * @return array|\Twig\TwigFunction[]|\Twig_SimpleFunction[]
	 */
	public function getFunctions()
	{
		$functions = array();

		// Function to check our current environment
		// Usage in twig:   {% if is_development_environment() %}
		$functions[] = new Twig_SimpleFunction('is_development_environment', function () {
			return utils::IsDevelopmentEnvironment();
		});

		/**
		 * Function to get iTop's app root absolute URL (eg. https://aaa.bbb.ccc/xxx/yyy/)
		 * Usage in twig: {{ get_absolute_url_app_root() }}
		 *
		 * @since 3.0.0
		 */
		$functions[] = new Twig_SimpleFunction('get_absolute_url_app_root', function () {
			return utils::GetAbsoluteUrlAppRoot();
		});

		/**
		 * Function to get iTop's modules root absolute URL (eg. https://aaa.bbb.ccc/xxx/yyy/env-zzz/)
		 * Usage in twig: {{ get_absolute_url_modules_root() }}
		 *
		 * @since 3.0.0
		 */
		$functions[] = new Twig_SimpleFunction('get_absolute_url_modules_root', function () {
			return utils::GetAbsoluteUrlModulesRoot();
		});

		return $functions;
	}


}