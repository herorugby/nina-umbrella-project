<footer id="footer">

    <div class="footer-wrap">
        <p class="footer__base-link">各アクセサリーのご購入は、<br>下記をクリックしてください。<br>※BASEネットショップ管理画面へ移動します。</p>
        <div class="links__btn">
            <a href="https://ninaumbrella.thebase.in/" target="_blank" rel="noopener"><img class="links__base-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/base_logo_horizontal_black.png" alt="BASEネットショップへ"></a>
        </div>

        <p class="official-sns">公式SNS</p>
        <ul class="footer__sns-icon">
            <li class="sns-icon__instagram">
                <a href="https://www.instagram.com/nina_bysakiokamura/?igshid=ir99440gxhwq" target="_blank" rel="noopener">
                    <i class="fab fa-instagram-square"></i>
                </a>
            </li>
            <li class="sns-icon__facebook">
                <a href="https://www.facebook.com/nina.umbrella.project/" target="_blank" rel="noopener">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
        </ul>

        <div class="footer__policy">
            <p class="policy__privacy"><a href="<?php echo esc_url(home_url('/privacy')); ?>">プライバシーポリシー</a></p>
            <p class="policy__trade"><a href="<?php echo esc_url(home_url('/trade')); ?>">特定商取引法に基づく表記</a></p>
        </div>

        <div class="footer__contents__copy-right">
            <p><small>&copy; <span id="copyRight"></span>nina umbrella project</small></p>
        </div>
    </div>

    <a href="#header" class="page-up-icon"><i class="fas fa-angle-double-up"></i><br>UP</a>

</footer>

<?php wp_footer(); ?>
</div>
</body>

</html>
