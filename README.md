# CWP-Python2.7
https://www.born2host.com

Simple installer for CWP to install Python 2.7 on your CentOS 6 server

DO NOT TRY TO REPLACE PYTHON 2.6 IN THE SYSTEM OR YOU WILL BREAK YUM


How to install the module?

Step 1: Download python.php and place it in /usr/local/cwpsrv/htdocs/resources/admin/modules/

Step 2: Open /usr/local/cwpsrv/htdocs/resources/admin/include/3rdparty.php and put inside

<li><a href="index.php?module=python"><span class="icon16 icomoon-icon-arrow-right-3"></span>Python Updater</a></li>

Step 3: Navigate your browser to http://your-domain.tld:2030/ or https://your-domain.tld:2031/, go to Developers Menu -> Python Updater, press "Update Python". Don\`t refresh the page or go to another menu until the process is finished. You will see it in that page.

Step 4: Have fun and enjoy your Python 2.7!
