<?php
header("Content-Type: application/rss+xml; charset=UTF-8");

// OpenWeatherMap API key
$API_KEY = "c3fe817b6f40048cc1eaf96960bfbe4f";

$cities = [
  "Αθήνα" => "Athens,gr",
  "Θεσσαλονίκη" => "Thessaloniki,gr",
  "Πάτρα" => "Patras,gr",
  "Ηράκλειο" => "Heraklion,gr",
  "Λάρισα" => "Larisa,gr",
  "Κέρκυρα" => "Corfu,gr",
];

function x($s) {
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}

function fetch_json($url) {
  $ctx = stream_context_create([
    "http" => ["timeout" => 6],
    "https" => ["timeout" => 6],
  ]);
  $resp = @file_get_contents($url, false, $ctx);
  if ($resp === false) return null;
  return json_decode($resp, true);
}

$nowLocal = new DateTime("now", new DateTimeZone("Europe/Athens"));
$pubDate = gmdate("D, d M Y H:i:s") . " GMT";

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<rss version="2.0">
  <channel>
    <title>Live Καιρός - Ελλάδα</title>
    <link>https://YOURDOMAIN.GR/weather-rss.php</link>
    <description>Αθήνα, Θεσσαλονίκη, Πάτρα, Ηράκλειο, Λάρισα, Κέρκυρα</description>
    <language>el-gr</language>
    <ttl>10</ttl>

<?php
foreach ($cities as $labelGR => $query) {

  $url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($query) .
         "&appid=" . urlencode($API_KEY) . "&units=metric&lang=el";

  $data = fetch_json($url);

  $temp = null;
  $humidity = null;
  $wind = null;
  $desc = "μη διαθέσιμο";

  if ($data && isset($data["main"])) {
    $temp = round($data["main"]["temp"]);
    $humidity = $data["main"]["humidity"] ?? null;
    $wind = $data["wind"]["speed"] ?? null;
    $desc = $data["weather"][0]["description"] ?? $desc;
  }

  $title = $labelGR . " — " . ($temp !== null ? $temp . "°C" : "N/A");
  $guid = "weather-" . strtolower($query) . "-" . $nowLocal->format("YmdHi");

  $descriptionHtml =
    "Πόλη: " . x($labelGR) . "<br/>" .
    "Βαθμοί: " . ($temp !== null ? $temp . "°C" : "N/A") . "<br/>" .
    "Περιγραφή: " . x($desc) . "<br/>" .
    "Υγρασία: " . ($humidity !== null ? $humidity . "%" : "N/A") . "<br/>" .
    "Άνεμος: " . ($wind !== null ? $wind . " m/s" : "N/A") . "<br/>" .
    "Ενημέρωση: " . $nowLocal->format("Y-m-d H:i");
?>
    <item>
      <title><?= x($title) ?></title>
      <description><![CDATA[<?= $descriptionHtml ?>]]></description>
      <guid isPermaLink="false"><?= x($guid) ?></guid>
      <pubDate><?= $pubDate ?></pubDate>
    </item>
<?php } ?>

  </channel>
</rss>