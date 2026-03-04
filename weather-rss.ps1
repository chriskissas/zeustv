$api = "92baaa4862b147cf88d133043250608"

$cities = @(
    @{gr="Αθήνα"; q="Athens"},
    @{gr="Θεσσαλονίκη"; q="Thessaloniki"},
    @{gr="Πάτρα"; q="Patras"},
    @{gr="Ηράκλειο"; q="Heraklion"},
    @{gr="Λάρισα"; q="Larissa"},
    @{gr="Κέρκυρα"; q="Corfu"}
)

function XMLEscape([string]$s) {
    if ($null -eq $s) { return "" }
    return [System.Security.SecurityElement]::Escape($s)
}

$sb = New-Object System.Text.StringBuilder
[void]$sb.AppendLine("<?xml version='1.0' encoding='UTF-8'?>")
[void]$sb.AppendLine("<rss version='2.0'>")
[void]$sb.AppendLine("  <channel>")
[void]$sb.AppendLine("    <title>Καιρός Ελλάδα</title>")
[void]$sb.AppendLine("    <link>http://localhost/</link>")
[void]$sb.AppendLine("    <description>Live θερμοκρασίες πόλεων</description>")

foreach($c in $cities){
    $url  = "https://api.weatherapi.com/v1/current.json?key=$api&q=$($c.q)&lang=el"
    $data = Invoke-RestMethod -Uri $url -Method Get

    $temp = $data.current.temp_c
    $cond = XMLEscape $data.current.condition.text
    $city = XMLEscape $c.gr

    [void]$sb.AppendLine("    <item>")
    [void]$sb.AppendLine("      <title>$city</title>")
    [void]$sb.AppendLine("      <description>$temp°C - $cond</description>")
    [void]$sb.AppendLine("    </item>")
}

[void]$sb.AppendLine("  </channel>")
[void]$sb.AppendLine("</rss>")

$path = "C:\vmix\weather.xml"
$sb.ToString() | Set-Content -Path $path -Encoding utf8
