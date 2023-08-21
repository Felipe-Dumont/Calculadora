<?php

$this->layout('template', ['title' => 'Calculadora']) ?>

<h1>Calculadora</h1>

</div>
<div class="body-calc">
    <div class="display">
        <?php if (isset($resultComput)) : ?>
            <h1><?= $resultComput ?> </h1>
        <?php else : ?>
            <h1> 0 </h1>
        <?php endif; ?>
    </div>
    <div class="body-calc-number">
    <form action="/" method="post">
        <input type="hidden" value='' name='screenData' id="screenData"/>
        <div>
            <button class="formButton" data-valor="7"> 7 </button>
            <button class="formButton" data-valor="8"> 8 </button>
            <button class="formButton" data-valor="9"> 9 </button>
            <button class="formButton" data-valor="/"> / </button>
        </div>
        <div>
            <button class="formButton" data-valor="4"> 4 </button>
            <button class="formButton" data-valor="5"> 5 </button>
            <button class="formButton" data-valor="6"> 6 </button>
            <button class="formButton" data-valor="*"> * </button>
        </div>
        <div>
            <button class="formButton" data-valor="1"> 1 </button>
            <button class="formButton" data-valor="2"> 2 </button>
            <button class="formButton" data-valor="3"> 3 </button>
            <button class="formButton" data-valor="-"> - </button>
        </div>
        <div>
            <button class="formButton" data-valor="."> . </button>
            <button class="formButton" data-valor="0"> 0 </button>
            <button class="formButton" data-valor="+"> + </button>
            <input  class="igual" type="submit" value='='/>
        </div>
    </form>
    </div>
        