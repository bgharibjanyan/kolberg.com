

{extends file="musical_items.tpl"}
{block name="items"}

{assign var=img_index value=5}
{assign var=step value=1}

<section class="entdecke">
    <h2 class="header">ENTDECKE</h2>

    <div class=categories>
        <a class="link" href="">Beliebte Produkte</a>
        <a class="link" href="">Neuheiten</a>
    </div>
    <div class="entdecke-catalog">
        {$smarty.block.parent}
    </div>
</section>
{/block}
    

