<?php
use MapasCulturais\i;
?>
<div ng-controller="TechnicalEvaluationMethodFormController" class="technical-evaluation-form">
    <div ng-if="!data.empty">
        <strong><?php i::_e('Pontuações'); ?>:</strong>
        <section ng-repeat="section in ::data.sections">
             {{section.name}}: <strong>{{subtotalSection(section)}}</strong>
        </section>
        <hr>
        <section class='total'>
            <?php i::_e('Total'); ?>: <strong>{{total(total)}}</strong><br>
            <?php i::_e('Máxima'); ?>: <strong>{{max(total)}}</strong>
        </section>
        <hr>
        <label>
            <strong><?php i::_e('Parecer Técnico') ?>:</strong>
            <p>{{evaluation['obs']}}</p>
        </label>
    </div>
</div>