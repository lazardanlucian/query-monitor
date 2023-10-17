<?php declare(strict_types = 1);
/**
 * This file is generated by the generate.mjs script.
 * Do not edit it manually.
 *
 * Source schema: src/schemas/data/request.json
 */

/**
 * Request data transfer object.
 *
 * @package query-monitor
 */

class QM_Data_Request extends QM_Data {
	/**
	 * @phpstan-var array{
	 *   title: string,
	 *   data: WP_User|false,
	 * }
	 */
	public $user;

	/**
	 * @phpstan-var array{
	 *   current_site?: array{
	 *     title: string,
	 *     data: WP_Site,
	 *   },
	 *   current_network?: array{
	 *     title: string,
	 *     data: WP_Network,
	 *   },
	 * }
	 */
	public $multisite;

	/**
	 * @phpstan-var array{
	 *   request: string,
	 *   matched_rule?: string,
	 *   matched_query?: string,
	 *   query_string: string,
	 * }
	 */
	public $request;

	/**
	 * @var array<string, mixed>
	 */
	public $qvars;

	/**
	 * @var array<string, mixed>
	 */
	public $plugin_qvars;

	/**
	 * @phpstan-var ?array{
	 *   title: string,
	 *   data?: WP_Term|WP_Post_Type|WP_Post|WP_User,
	 *   type?: 'WP_Term'|'WP_Post_Type'|'WP_Post'|'WP_User',
	 * }
	 */
	public $queried_object;

	/**
	 * @var string
	 */
	public $request_method;

	/**
	 * @var array<string, string>
	 */
	public $matching_rewrites;
}
