<?php

session_destroy();

header("Location: " . $GLOBALS['web_root']);
