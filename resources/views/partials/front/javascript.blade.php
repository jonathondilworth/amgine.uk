<!-- TODO: compress assets using webpack -->

	<!-- jQuery -->
	<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="assets/js/particles.min.js"></script>
	<script src="assets/js/scrollreveal.min.js"></script>
	<script src="assets/js/jquery.downCount.js"></script>
	<script src="assets/js/parallax.min.js"></script>

	<!-- Global Init -->
	<script src="assets/js/particle-dark.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- custom - may not require this, at the very least should be rewritten -->

	<script>
        !function(c){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.onload=c,t.src="assets/js/donate.js";var z=document.getElementsByTagName("script")[0];z.parentNode.insertBefore(t,z)}(function(){

                var coins = {
                    'bitcoin': '15fWEVZHWwX7UTYW1rsK8QacdjNzgBC5cH',
                    'ethereum': '0xa469b39155e85fbffedf809d962d68c0d5e0d2f1',
                    'monero': '835q7JuD2xVGgkJKNnXrXtgxPVhm3adpPM3QtLFJHyYdVuro6tvsGyo4BRRy7723qqfnjtZDTao51TU8oCZ59WPjLbDzaFX'
                };
                var coinNames = Object.keys(coins);

                for (var i = 0;i < coinNames.length;i++) {
                    var coin = coinNames[i];
                    var address = coins[coin];
                    var elems = document.getElementsByClassName(coin);

                    for(var j = 0;j < elems.length;j++) {
                        var cd = new Fr.CryptoDonate({
                            coin: coin,
                            address: address,
                            baseURL: 'assets/',
                            buttonLarge: elems[j].className.match('large') !== null,

                            buttonClass: elems[j].getAttribute('data-theme'),
                            dialogClass: elems[j].getAttribute('data-theme')
                        });
                        cd.appendTo(elems[j]);
                    }
                }
          });
    </script>