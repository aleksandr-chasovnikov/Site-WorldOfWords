
<footer class="footer"><!-- FOOTER =============== -->
  <div class="footer__logo logo">
    <img src="" alt="logo" class="logo__img logo__img_small">
  </div>

  <div class="copy">
    <p class="copy text-center">&copy; Компания </p>
  </div>      
</footer><!-- FOOTER END =============== -->

</div><!-- wrapper END -->

<a href="#" class="btn up-button" role="button" title="Кнопка вверх"></a>

    <!--[if lt IE 9]>
    <script src="libs/html5shiv/es5-shim.min.js"></script>
    <script src="libs/html5shiv/html5shiv.min.js"></script>
    <script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="libs/respond/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/my.js"></script>
    <script src="libs/fancybox/jquery.fancybox.pack.js"></script>
    <script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
    <script src="libs/scrollto/jquery.scrollTo.min.js"></script>
    <script src="libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="libs/countdown/jquery.plugin.js"></script>
    <script src="libs/countdown/jquery.countdown.min.js"></script>
    <script src="libs/countdown/jquery.countdown-ru.js"></script>
    <script src="libs/landing-nav/navigation.js"></script>
    <script src="js/common.js"></script>
    <!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
    <!-- Google Analytics counter --><!-- /Google Analytics counter -->
    <script src="js/custom.js"></script>
    <script>
      $(document).ready(function(){
        $(".add-to-cart").click(function () {
          var id = $(this).attr("data-id");
          $.post("/cart/addAjax/"+id, {}, function (data) {
            $("#cart-count").html(data);
          });
          return false;
        });
      });
    </script>

  </body>
  </html>