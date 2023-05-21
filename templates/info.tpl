{assign var=img_name value=info_icon}

{block name=info}<section class="info-section">
    <button class="arrow">
        <img class="left" src="./img/left.png" alt="">
    </button>

    <div class="content">
        <div class="item">
            <img class="icon" src="./img/{$img_name}1.png" alt="">

            <h4 class="header">Deutsche Qualitätsarbeit</h4>
            <p class="description">Alle Kolberg Produkte werden durch unsere Instrumentenbauer und Facharbeiter im
                eigenen
                Werk in Deutschland produziert – zu großen Teilen in Handarbeit. Ausnahme hiervon sind lediglich z.B.
                traditionelle Instrumente wie TamTams, welche lediglich veredelt werden.
            </p>
        </div>
        <div class="item">
            <img class="icon" src="./img/{$img_name}2.png" alt="">
            <h4 class="header">Kolberg Qualitäts- & Innovationsgarantie</h4>
            <p class="description">Die bedeutendsten Orchester und Häuser der Welt vertrauen Kolberg. Dies liegt auch an
                dem
                Qualitätsversprechen über die 2-jährige Garantie hinaus. Falls wir danach einen Mangel an Ihrem Produkt
                feststellen und dies einem Materialfehler zuzuschreiben ist, nehmen wir uns der Sache an.
            </p>
        </div>
        <div class="item">
            <img class="icon" src="./img/{$img_name}3.png" alt="">
            <h4 class="header">Umweltschutz & Nachhaltigkeit</h4>
            <p class="description">Unser Produkte halten was sie versprechen – meist weit über die übliche Gebrauchszeit
                hinaus. Kolberg legt zudem Wert auf den Einsatz von zertifiziertem Holz aus nachhaltig bewirtschafteten
                Wäldern, oft aus der Region.
            </p>
        </div>
    </div>
    <button class="arrow">
        <img class="right" src="./img/right.png" alt="">
    </button>

</section>

{/block}