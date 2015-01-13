Installation (simplest)
-----------------------

Follow these simple instructions to get IE7 working immediately on your server:

    * download either ie7.zip or ie7-full.zip

    * unzip the entire contents to the root of your server (keep the
      folder names used in the zip file)

    * you will now have an IE7 directory in the root of your server

    * include the IE7 style sheet in the page you wish to test:

      <!-- compliance patch for microsoft browsers -->
      <!--[if lt IE 7]>
      <link rel="stylesheet" href="/IE7/ie7-html.css" type="text/css"/>
      <![endif]-->

    * make sure this also points to the same "IE7" directory

    * open the page in your web browser

    * the page should now be IE7 enabled.

You may also extract the contents of the zip file to the root of your
hard disk if you do not have access to a web server.

Enjoy ;-)
