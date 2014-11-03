rss-scraper
===========

An OO RSS scraper with open-ended options for publishing.  Currently setup to mail scrapes of individual feeds to a specified email.
My goal was to make a scraper that searched Reddit for new posts, but I generalized it a bit.  Also wanted to work with OO, namespaces, and design patterns.

To Use As Is
============
-Fork the file onto a 5.3+ PHP compatible host (due to namespaces)
-Change the feeds in HardCodedSource.
-Change the target email address in Main.php
-(Optional) Change the sender email in Backend/EmailCommand.php
-Verify that the scraping works (if it doesn't you need to look into Backend/RssScraper/RssScraper.php)
-(Optional) Add it to a Cron job to get updates as you want.

To Customize It Further
============
-Add different ways to get link sources by implementing Backend/DesignPatterns/SourceInterface.php
-Add different ways to report the data by implementing Backend/DesignPatterns/ReportCommand.php
-Add different ways to restrict the data by implementing Backend/DesignPatterns/DateConditional.php

My Critiques
============
-First time using Namespaces.  Seems to me that it helped clean up the code a bit by enforcing stricter file structure.  Didn't use an autoloader however considering this is a minor project.
-No error handling with mail().  According to the documentation it only returns if the mail was accepted for delivery.  Seems like just adding a check is the best I can do for now.
-I need to find a good coding standard, I feel like I'm using Javadoc in PHP.
