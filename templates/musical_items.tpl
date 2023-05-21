{block name=items}


<div class="catalog">
    <button class="arrow">
        <img class="left" src="./img/left.png" alt="">
    </button>

    <div class="items">
        {section name=numbers start=1 loop=$img_index step=$step}
        <div class="catalog-item">
            <img class="item-img" src="./img/catalog_item{$smarty.section.numbers.index}.png" alt="">
            <div class="info">
                <h6 class="product-name">Orchester-/Harfenstühle</h6>
                <p class="description">„Komfort“ (3105) </p>
            </div>
        </div>
        {/section}
    </div>
    <button class="arrow">
        <img class="right" src="./img/right.png" alt="">
    </button>
</div>

{/block}