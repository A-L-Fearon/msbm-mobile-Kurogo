<?php

require_once('/home/fearon/msbm-kurogo/sites/MSBM/app/modules/bookings/google-api-php-client/src/Google/autoload.php');
/**
 * Class BookingsWebModule
 * @package Modules
 * @subpackage Bookings
 */
class BookingsWebModule extends WebModule
{
    /**
     * Specifies the module name
     *
     * @var string
     */
    protected $id = 'bookings';

    private $service;
    private $email;
    private $password;
    protected $client;

    function __construct()
    {
        $this->client = new Google_Client();
        // OAuth2 client ID and secret can be found in the Google Developers Console.

        # test key, hard coded,
        # erase key when finished
        $this->client->setClientId('987849558796-5a1oa8h6la31s7l8ve5vsisjlhsahfrj.apps.googleusercontent.com');
        $this->client->setClientSecret('onkohzxipY8Rm-XTeouk8nyV');
        $this->client->setRedirectUri('urn:ietf:wg:oauth:2.0:oob');
        $this->client->addScope('https://www.googleapis.com/auth/calendar');
        //$this->client->addScope('antonio.l.fearon@gmail.com');

        $this->service = new Google_Service_Calendar($this->client);
	

	//

    }

    protected function initializeForPage()
    {

	$authUrl = $this->client->createAuthUrl();
        switch($this->page)
        {
            case 'index':
		//Request authorization
		print "Please visit:\n $authUrl \n\n";
		print "Please enter the auth code:\n";

		$this->assign('auth', $authUrl);
		//$authCode = trim(fgets(STDIN));

		// Exchange authorization code for access token
		//$accessToken = $client->authenticate($authCode);
		//$client->setAccessToken($accessToken);
                #$this->redirectTo('create');
                break;
            case 'create':
                
                $this->assign('formFields', $formFields);
                break;
            case 'list':


                break;
            case 'day';

                $this->redirectTo('/index');

                break;
            case 'week':
                # if the token is not set
                # redirect to login
                $this->redirectTo('/index');

                break;
            case 'logout':
                # if token is set, unset it
                # redirect to index
                $this->redirectTo('/index');

                break;
            default:
                parent::initializeForPage();
                break;
        }
    }
}
