<head>
</head>

<script nonce="random-secret" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore.js"></script>

  <script nonce="random" src=closure-library/closure/goog/base.js></script>
  <script nonce="random" src="data:,goog.require('goog.html.sanitizer.HtmlSanitizer');goog.require('goog.html.SafeHtml');"></script>
<script nonce="random">
    function getParam(name) {
      var params = location.search.slice(1).split("&");
      for (var i in params) {
        var param = params[i];
        var equalIndex = param.indexOf("=");
        var paramName = param.substring(0, equalIndex);
        var paramValue = param.substring(equalIndex + 1);

        if (paramName == name) {
          return unescape(paramValue);
        }
      }

      return undefined;
    }
  </script>
<script nonce="random">
  var sanitizer = new goog.html.sanitizer.HtmlSanitizer();
  document.write(goog.html.SafeHtml.unwrap(sanitizer.sanitize(getParam("inj"))));
</script>

<div type="underscore/template">Hi</div>
<div id="result">

</div>

<script nonce="random-secret">
 document.getElementById("result").innerHTML =
     _.template(document.querySelector("[type='underscore/template']").innerText)();
</script>

