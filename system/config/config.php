<?php
function setReporting() {
if (MODE == 'DEV') {
error_reporting(E_ALL);
ini_set('display_errors','On');
} else {
error_reporting(E_ALL);
ini_set('display_errors','Off');
}
}

setReporting();