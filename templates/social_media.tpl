<section class="social-media">

    <h6 class="underline">Socialmedia</h6>
    <h4 class="header">#kolbergpercussion</h4>

    <div class="photos">
        {section name=numbers start=1 loop=6  step=1}
        <img class="img" src="./img/inst{$smarty.section.numbers.index}.png" alt="">
        {/section}
    </div>

    <div class="accounts">
        {section name=numbers start=1 loop=4  step=1}
        <img class="icon" src="./img/account{$smarty.section.numbers.index}.png" alt="">
        {/section}
    </div>
    <h6 class="fiollow-us">Folge uns</h6>

</section>