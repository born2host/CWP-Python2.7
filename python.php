<?php
        if (isset($_POST['updatePython'])) {
                $command = "yum -y install centos-release-SCL && yum -y install python27 && yum install python27-python-devel.x86_64";
                echo '<pre>';
                echo shell_exec($command);
                echo '</pre>';
        }
?>
<pre>
<center><h3>Update your CentOS 6 server to have Python 2.7 on it</h3></center><br>
<center><h4>Every time you need to use Python 2.7 instead of Python 2.6 just type in the console</h4></center><br>
<center><h4>"scl enable python27 bash" and execute the script you want.</h4></center><br>
<center><h3><font color="red">/!\DO NOT TRY TO REPLACE THE ORIGINAL PYTHON 2.6 IN THE SYSTEM OR YOU WILL BREAK YUM/!\</h3></center>
</pre>
<pre>
<center>
        <div class="panel-body" style="padding-bottom:0;">
                <form method="post">
                        <table cellpadding="5" border="0">
                                <tr>
                                        <td></td><td align="center"><button name="installRails">Install Ruby on Rails</button></td>
                                </tr>
                        </table>
                </form>
                <center>Script by <a href="https://www.born2host.com" target="_blank">Born 2 Host</a></center>
        </div>
</center>
</pre>
