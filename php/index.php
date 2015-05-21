<?php
/** receive POST data from slack
	Sample:
	token=XXXXXXXXXXXXXXXXXX
	team_id=T0001
	team_domain=example
	channel_id=C2147483705
	channel_name=test
	timestamp=1355517523.000005
	user_id=U2147483697
	user_name=Steve
	text=googlebot: What is the air-speed velocity of an unladen swallow?
	trigger_word=googlebot:
**/

# map POST data to variables
$vars = array('token','team_id', 'team_domain', 'channel_id', 'channel_name', 'timestamp', 'user_id', 'user_name', 'text', 'trigger_word');
foreach ($vars as $v) {
  if (isset($_POST[$v])) {
    $$v = $_POST[$v];
  }
}

# authorization
if ($token != "abc123") {die('unauthorized token');}
if ($team_domain != "nfusion") {die('unauthorized domain');}

# authorized. output stuff.
echo "hello world!";

?>