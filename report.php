// (A) GET ALL RESERVATIONS
require "2-reserve.php";
$all = $_RSV->getDay();

// (B) OUTPUT CSV
header("Content-Type: text/csv");
header("Content-Disposition: attachment;filename=reservations.csv");
if (count($all)==0) { echo "No reservations"; }
else {
  // (B1) FIRST ROW - HEADERS
  foreach ($all[0] as $k=>$v) { echo "$k,"; }
  echo "\r\n";
  
  // (B2) RESERVATION DETAILS
  foreach ($all as $r) { 
    foreach ($r as $k=>$v) { echo "$v,"; }
    echo "\r\n";
  }
}