
{assign var=img_index value="1"}


{block name=poster}
<section class="poster">

<div class="poster-content">

       
       




        <h6 class="quote">{$quote}</h6>
        <h4 class="header">
            {$poster_header}
        </h4>
        <p class="description">{$poster_description1}
        </p>
        <p class="description"> {$poster_description2}
        </p>

        <button class="poster-button">
           {$poster_button}
        </button>
</div>

</section>
{/block}