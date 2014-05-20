<?php
http_response_code($_ENV['STATUS']);
echo "responded with: ".$_ENV['STATUS'];
