<div id="slider">
    <div class="callbacks_container">
        <ul class="rslides" id="slider4">
            <!--<li>
                <img src="images/1.png" alt="">
                <p class="caption">This is a caption</p>
            </li>-->
            <li>
                <img src="images/2.png" alt="">
                <!--<p class="caption">This is another caption</p>-->
            </li>
            <li>
                <img src="images/3.png" alt="">
                <!--<p class="caption">The third caption</p>-->
            </li>
        </ul>
    </div>
    <script>
        $(function () {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 700,
                namespace: "callbacks"
            });
        });
    </script>
</div>