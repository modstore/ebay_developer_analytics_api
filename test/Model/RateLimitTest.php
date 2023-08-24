<?php
/**
 * RateLimitTest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Modstore\EbayDeveloperAnalyticsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Analytics API
 *
 * The <b>Analytics API</b> retrieves call-limit data and the quotas that are set for the RESTful APIs and the legacy Trading API.  <br><br>Responses from calls made to <b>getRateLimits</b> and <b>getUerRateLimits</b> include a list of the applicable resources and the \"call limit\", or quota, that is set for each resource. In addition to quota information, the response also includes the number of remaining calls available before the limit is reached, the time remaining before the quota resets, and the length of the \"time window\" to which the quota applies.  <br><br>The <b>getRateLimits</b> and <b>getUserRateLimits</b> methods retrieve call-limit information for either an application or user, respectively, and each method must be called with an appropriate OAuth token. That is, <b>getRateLimites</b> requires an access token generated with a client credentials grant and <b>getUserRateLimites</b> requires an access token generated with an authorization code grant. For more information, see <a href=\"/api-docs/static/oauth-tokens.html\">OAuth tokens</a>.  <br><br>Users can analyze the response data to see whether or not a limit might be reached, and from that determine if any action needs to be taken (such as programmatically throttling their request rate). For more on call limits, see <a href=\"https://developer.ebay.com/support/app-check \" target=\"_blank\">Compatible Application Check</a>.
 *
 * The version of the OpenAPI document: v1_beta.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Modstore\EbayDeveloperAnalyticsApi\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * RateLimitTest Class Doc Comment
 *
 * @category    Class
 * @description This complex types defines the resource (such as an API method) for which the rate-limit data is returned.  &lt;br&gt;&lt;br&gt;A method is included in an API, and an API is part of an API context for the API version specified.
 * @package     Modstore\EbayDeveloperAnalyticsApi
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class RateLimitTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "RateLimit"
     */
    public function testRateLimit()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "api_context"
     */
    public function testPropertyApiContext()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "api_name"
     */
    public function testPropertyApiName()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "api_version"
     */
    public function testPropertyApiVersion()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "resources"
     */
    public function testPropertyResources()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
