<?
namespace App\Services;

use Facebook\Facebook;

class FacebookService
{
    protected $fb;

    public function __construct()
    {
        $this->fb = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v17.0',
        ]);
    }

    public function postToFacebook($message, $link = null)
    {
        try {
            $response = $this->fb->post('/me/feed', [
                'message' => $message,
                'link' => $link,
            ], env('FACEBOOK_ACCESS_TOKEN'));

            return $response->getGraphNode();
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            throw new \Exception('Graph returned an error: ' . $e->getMessage());
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            throw new \Exception('Facebook SDK returned an error: ' . $e->getMessage());
        }
    }
}
