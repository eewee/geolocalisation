<html>
<head>
    <meta charset="UTF-8">
    <title>Geo localisation</title>
</head>
<body>
    <h1>Geo localisation</h1>
    <ul>
        <li><a href="?type=geoplugin">geoplugin</a> http://www.geoplugin.net/json.gp</li>
        <li><a href="?type=geobytes">geobytes</a> http://gd.geobytes.com/GetCityDetails</li>
        <li><a href="?type=geoiplookup">geoiplookup</a> https://json.geoiplookup.io/api</li>
        <li><a href="?type=ipapi">ipapi</a> https://ipapi.co/json/</li>
        <li><a href="?type=ip-api">ip-api</a> http://ip-api.com/json</li>
        <li><a href="?type=ipdata">ipdata</a> https://api.ipdata.com (HS)</li>        
        <li><a href="?type=ipfind">ipfind</a> https://ipfind.co/me?auth=< your api key > (need KEY API)</li>
        <li><a href="?type=ipgeolocation">ipgeolocation</a> https://api.ipgeolocation.io/ipgeo?apiKey=< your api key > (need KEY API)</li>
        <li><a href="?type=ipify">ipify</a> https://api.ipify.org/?format=json</li>
        <li><a href="?type=ipinfodb">ipinfodb</a> https://api.ipinfodb.com/v3/ip-city/?key=< your api key >&format=json (need KEY API)</li>
        <li><a href="?type=ipinfo">ipinfo</a> https://ipinfo.io/json</li>
        <li><a href="?type=ipregistry">ipregistry</a> https://api.ipregistry.co/?key=< your api key > (need KEY API)</li>
        <li><a href="?type=ipstack">ipstack</a> http://api.ipstack.com/< ip address >?access_key=< your api key > (need KEY API)</li>
        <li><a href="?type=jsonip">jsonip</a> https://jsonip.com</li>
        <li><a href="?type=jsontest">json test</a> http://ip.jsontest.com/</li>
        <li><a href="?type=nekudo">nekudo</a> https://geoip.nekudo.com/api</li>
        <li><a href="?type=smartip">smartip</a> https://api.smartip.io/?api_key=< your api key ></li>
    </ul>
    <p>
        NB : check result in console.
    </p>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <?php if (htmlentities($_GET['type']) == "geoplugin") { ?>
        <script>
            $.getJSON('http://www.geoplugin.net/json.gp?jsoncallback=?', function(data) {
                let geo = JSON.stringify(data, null, 2)
                $.each(data, function(i, field) {
                    if (i == "geoplugin_regionName") {
                        console.log( "Région: " + field );
                    }
                })
                console.log(geo);
            });
        </script>
    
    <?php } elseif (htmlentities($_GET['type']) == "geobytes") { ?>
        <script>
            $.getJSON('http://gd.geobytes.com/GetCityDetails?callback=?', function(data) {
                let geo = JSON.stringify(data, null, 2)
                $.each(data, function(i, field) {
                    if (i == "geobytesregion") {
                        console.log( "Région: " + field );
                    }
                })
                console.log(geo);
            });
        </script>
    
    <?php } elseif (htmlentities($_GET['type']) == "geoiplookup") { ?>
        <script>
            $.getJSON('https://json.geoiplookup.io/api?callback=?', function(data) {
                let geo = JSON.stringify(data, null, 2)
                $.each(data, function(i, field) {
                    if (i == "region") {
                        console.log( "Région: " + field );
                    }
                })
                console.log(geo);
            });
        </script>
    
    <?php } elseif (htmlentities($_GET['type']) == "ipapi") { ?>
        <script>
            $.getJSON('https://ipapi.co/json/', function(data) {
                let geo = JSON.stringify(data, null, 2)
                $.each(data, function(i, field) {
                    if (i == "region") {
                        console.log( "Région: " + field );
                    }
                })
                console.log(geo);
            });
        </script>
    
    <?php } elseif (htmlentities($_GET['type']) == "ip-api") { ?>
        <script>
            $.getJSON('http://ip-api.com/json?callback=?', function(data) {
                let geo = JSON.stringify(data, null, 2)
                $.each(data, function(i, field) {
                    if (i == "regionName") {
                        console.log( "Région: " + field );
                    }
                })
                console.log(geo);
            });
        </script>
    
    <?php } elseif (htmlentities($_GET['type']) == "ipdata") { ?>
        <script>
            $.getJSON('https://api.ipdata.co', function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>
    
    <?php } elseif (htmlentities($_GET['type']) == "ipfind") { ?>
        <script>
            let key_api_ipfind = ""
            $.getJSON('https://ipfind.co/me?auth=' + key_api_ipfind, function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } elseif (htmlentities($_GET['type']) == "ipgeolocation") { ?>
        <script>
            let key_api_ipfind = ""
            $.getJSON('https://api.ipgeolocation.io/ipgeo?apiKey=' + key_api_ipfind, function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } elseif (htmlentities($_GET['type']) == "ipify") { ?>
        <script>
            $.getJSON('https://api.ipify.org?format=jsonp&callback=?', function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } elseif (htmlentities($_GET['type']) == "ipinfodb") { ?>
        <script>
            let key_api_ipfind = ""
            $.getJSON('https://api.ipinfodb.com/v3/ip-city/?key='+key_api_ipfind+'&format=json&callback=?', function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } elseif (htmlentities($_GET['type']) == "ipinfo") { ?>
        <script>
            $.getJSON('https://ipinfo.io/json', function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>
    
    <?php } elseif (htmlentities($_GET['type']) == "ipregistry") { ?>
        <script>
            let key_api_ipfind = ""
            $.getJSON('https://api.ipregistry.co/?key=' + key_api_ipfind, function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } elseif (htmlentities($_GET['type']) == "ipstack") { ?>
        <script>
            let ip_address = ""
            let key_api_ipfind = ""
            $.getJSON('http://api.ipstack.com/'+ip_address+'?access_key=' + key_api_ipfind, function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } elseif (htmlentities($_GET['type']) == "jsonip") { ?>
        <script>
            $.getJSON('https://jsonip.com/?callback=?', function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } elseif (htmlentities($_GET['type']) == "jsontest") { ?>
        <script>
            $.getJSON('http://ip.jsontest.com/?callback=?', function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } elseif (htmlentities($_GET['type']) == "nekudo") { ?>
        <script>
            $.getJSON('https://geoip.nekudo.com/api', function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } elseif (htmlentities($_GET['type']) == "smartip") { ?>
        <script>
            let key_api_ipfind = ""
            $.getJSON('https://api.smartip.io/?api_key=' + key_api_ipfind, function(data) {
                let geo = JSON.stringify(data, null, 2)
                console.log(geo);
            });
        </script>

    <?php } ?>
</body>
</html>
