Enter your credentials
----------------------

1.  Open `/Samples/.config.inc.php`
2.  Edit the following lines replacing the `<>` values with your credentials

        define('AWS_ACCESS_KEY_ID', '<Your Access Key ID>');
        define('AWS_SECRET_ACCESS_KEY', '<Your Secret Key>');

        define('APPLICATION_NAME', '<Your Application Name>');
        define('APPLICATION_VERSION', '<Your Application Version or Build Number>');

        define('MERCHANT_ID', '<Your Merchant Id>'); // If you are making calls on another seller's behalf, put their merchantID here.
        define('MARKETPLACE_ID', '<Your Marketplace Id>');

Edit the samples
----------------

In the `/Samples` folder you will find files that correspond to a particular
Amazon Marketplace Web Service (Amazon MWS) operation. These files serve as
examples to illustrate the code required to make the call for that particular
operation. We will be using the SubmitFeed operation from the Feeds API section
as an example.

1.  Open `/Samples/SubmitFeedSample.php`
2.  Uncomment the appropriate `$serviceURL` for the marketplace that you want to
    sell in. Example:

        $serviceUrl = "https://mws.amazonservices.com";

3.  Populate the `$feed` variable with the feed contents. Examples:

        // From a string
        $feed = "Feed content";

        // From a file
        $feed = file_get_contents("feed.txt");

4.  Uncomment `$marketplaceIdArray` and fill the array with the MarketplaceId
    values that you want to submit the feed to.
5.  Uncomment one of the two Amazon MWS request building methods between lines
    126 - 170.
6.  Uncomment the following lines:

        invokeSubmitFeed($service, $request);

        @fclose($feedHandle);

7.  Start your server and navigate to the script's address to run it.


FAQ
===

Why does cURL return `Error Response Status Code: 0`?
-----------------------------------------------------

If you receive the error `Error Response Status Code: 0` from cURL when
attempting to send a request to Amazon MWS using cURL, find and set
`CURLOPT_SSL_VERIFYPEER` to `false`.

Why is FeedSubmissionResult being cut off?
------------------------------------------

This occurs when the server response is saved to memory. To avoid this, save
the response to a file.

    $responseFile = fopen("response.xml", "w");
    fwrite($responseFile, $dom->saveXML());
    fclose($responseFile);

What is in the `/Mock` folder?
------------------------------

The mock folder contains canned responses that simulate an Amazon MWS response.
Mock responses are useful for testing without actually sending a request to
Amazon MWS.

