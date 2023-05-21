
{extends file="poster1.tpl"}
    {block name="poster"}

        {assign var=poster_header value="KONZERT-PAUKEN "} 
        {assign var=poster_button value="Jetzt entdecken "} 
        {assign var=poster_description1 value="Klangliche Vollendung, technische Perfektion" } 
        {assign var=poster_description2 value="& billante Optik – Pauken-Bau seit 1985"} 


        <section class="poster2">
        {assign var=img_index value="1"} 
        {$smarty.block.parent} 
        </section>

{/block}

