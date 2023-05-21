{extends file="info.tpl"}
{block name="info"}
<footer class="main-footer">

    <div class="footer-header">
        <h6 class="uns">Über uns</h6>
        <img class="logo" src="./img/footer_logo.png" alt="">
        <h6 class="contacts">Kontakt</h6>
    </div>

    <div class="content">
        <div class="left-side">

            <ul class="general-nav">

                <li class="nav-link"><a class="link" href="">Geschichte</a></li>
                <li class="nav-link"><a class="link" href="">News</a></li>
                <li class="nav-link"><a class="link" href="">Kataloge</a></li>
                <li class="nav-link"><a class="link" href="">Referenzen</a></li>
                <li class="nav-link"><a class="link" href="">Videos</a></li>
                <li class="nav-link"><a class="link" href="">Kontakt</a></li>
                <li class="nav-link"><a class="link" href="">Jobs</a></li>
            </ul>
            <div class="left-side-footer">
                <h6 class="header">
                    Informationen
                </h6>
                <p class="footer-text">Versand- und Zahlungsbedingungen</p>
                <p class="footer-text">Widerrufsbelehrung</p>

            </div>
        </div>

        <div class="solutions">

            {assign var=img_name value=footer_info_icon}
            {$smarty.block.parent}
        </div>
        <button class="list-header">
            Informationen
        </button>
        <button class="list-header">
            kontakt
        </button>
        <button class="list-header">
            Über uns
        </button>
        <div class="right-side">

            <ul class="contacts-list">
                <li class="contact">
                    <p class="text">Kolberg Germany</p>
                    <img class="icon" src="./img/soc1.png" alt="">
                </li>

                <li class="contact">
                    <p class="text">#kolbergpercussion
                    </p>
                    <img class="icon" src="./img/soc2.png" alt="">
                </li>

                <li class="contact">
                    <p class="text">Kolberg Germany</p>
                    <img class="icon" src="./img/soc3.png" alt="">
                </li>
                <li class="contact">
                </li>
                <li class="contact">
                    <p class="text">Kolberg Germany</p>
                    <img class="icon" src="./img/geo.png" alt="">
                </li>
            </ul>

            <div class="right-side-footer">
                <p>Stuttgarter Straße 157
                    73066 Uhingen
                    Germany</p>
            </div>
        </div>
    </div>
</footer>
{/block}