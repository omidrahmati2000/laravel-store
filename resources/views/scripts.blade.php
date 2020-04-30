<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="vendor/nouislider/nouislider.min.js"></script>
<script src="vendor/photoswipe/photoswipe.min.js"></script>
<script src="vendor/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="vendor/select2/js/select2.min.js"></script>
<script src="js/number.js"></script>
<script src="js/main.js"></script>
<script src="js/header.js"></script>
<script>$(document).ready(function () {
        ConvertNumberToPersion();
    });

    function ConvertNumberToPersion() {
        persian = {0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹'};

        function traverse(el) {
            if (el.nodeType == 3) {
                var list = el.data.match(/[0-9]/g);
                if (list != null && list.length != 0) {
                    for (var i = 0; i < list.length; i++) el.data = el.data.replace(list[i], persian[list[i]]);
                }
            }
            for (var i = 0; i < el.childNodes.length; i++) {
                traverse(el.childNodes[i]);
            }
        }

        traverse(document.body);
    }</script>
