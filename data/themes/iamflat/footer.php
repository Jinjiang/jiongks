</div>

<div id="footer">
    <a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a> <?php _e('is powered by'); ?> <a href="http://www.typecho.org">Typecho)))</a><br /><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章'); ?> RSS</a> and <a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论'); ?> RSS</a>
    <?php $this->footer(); ?>
</div>

</div>

<script>
(function () {
    var pages = document.querySelectorAll('.page-navigator a');
    pages = [].slice.call(pages);
    pages.forEach(function (page) {
        page.className = 'pure-button';
        if (page.parentNode.className === 'current') {
            page.className += ' pure-button-disabled';
        }
    });
})();
(function () {
    var header = document.querySelector('#header');
    if (header) {
        var bgImage = '<?php $this->options->themeUrl('bg'); ?>/bg_' + Math.ceil(Math.random() * 16) + '.jpg';
        if (window.innerWidth <= 640) {
            bgImage = bgImage.replace('.jpg', '_m.jpg');
        }
        header.style.background = '#09c none no-repeat center center';
        header.style.backgroundSize = 'cover';
        header.style.backgroundImage = '-webkit-linear-gradient(top, rgba(0, 144, 192, 1), rgba(0, 144, 192, 0.5)), url(' + bgImage + ')';
        header.style.backgroundImage = '-moz-linear-gradient(top, rgba(0, 144, 192, 1), rgba(0, 144, 192, 0.5)), url(' + bgImage + ')';
        header.style.backgroundImage = '-ms-linear-gradient(top, rgba(0, 144, 192, 1), rgba(0, 144, 192, 0.5)), url(' + bgImage + ')';
        header.style.backgroundImage = 'linear-gradient(top, rgba(0, 144, 192, 1), rgba(0, 144, 192, 0.5)), url(' + bgImage + ')';
    }
})();
(function () {
    var footer = document.querySelector('#footer');
    if (footer) {
        var bgImage = '<?php $this->options->themeUrl('bg'); ?>/bg_' + Math.ceil(Math.random() * 16) + '.jpg';
        if (window.innerWidth <= 640) {
            bgImage = bgImage.replace('.jpg', '_m.jpg');
        }
        footer.style.background = '#f60 none no-repeat center center';
        footer.style.backgroundSize = 'cover';
        footer.style.backgroundImage = '-webkit-linear-gradient(top, rgba(255, 96, 0, 0.5), rgba(255, 96, 0, 1)), url(' + bgImage + ')';
        footer.style.backgroundImage = '-moz-linear-gradient(top, rgba(255, 96, 0, 0.5), rgba(255, 96, 0, 1)), url(' + bgImage + ')';
        footer.style.backgroundImage = '-ms-linear-gradient(top, rgba(255, 96, 0, 0.5), rgba(255, 96, 0, 1)), url(' + bgImage + ')';
        footer.style.backgroundImage = 'linear-gradient(top, rgba(255, 96, 0, 0.5), rgba(255, 96, 0, 1)), url(' + bgImage + ')';
    }
})();
(function () {
    var title = document.querySelector('#header h1 a');
    var text = title.innerText;
    var firstLetter = document.createElement('span');
    firstLetter.className = 'first-letter';
    firstLetter.innerText = text.substr(0, 1);
    var otherLetters = document.createTextNode(text.substr(1));
    title.innerHTML = '';
    title.appendChild(firstLetter);
    title.appendChild(otherLetters);
})();
</script>

</body>
</html>
