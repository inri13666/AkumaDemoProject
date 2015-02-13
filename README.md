Akuma Demo Project
========================

Welcome

How to install?
--------------

  * composer create-project akuma/sf2-demo-project path/
  * php app/console doctrine:migrations:diff
  * php app/console doctrine:migrations:migrate -n

What's inside?
--------------

  * The Symfony Standard Edition

It comes pre-configured with the following bundles:

  * **Akuma Core Bundle** - The Core Akuma bundle
  * **Akuma User Bundle** - The Akuma User bundle
  * **Akuma Social Bundle** - The Akuma User bundle

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Note:
-------------
By default application generates urls like http(s)://YOUR_DOMAIN/[SOCIAL_NAME]/connect,
example : http://demo.akuma.in/microsoft/connect

Facebook:
--------------
  * Create project here : https://developers.facebook.com/quickstarts/?platform=web
  * App Settings Set Email
  * App review-status Go Live

Google:
--------------
  * Create project here : https://console.developers.google.com/project
  * Configure "permissions" if needed
  * Enabled "Google+ API"
  * Create new credentials "Web Application" type

Microsoft:
--------------
  * Create project here : https://account.live.com/developers/applications/create?tou=1
  * Configure "API Settings" set to "Yes" => "Mobile or desktop client app"
  * Configure redirect urls

**Enjoy!**
