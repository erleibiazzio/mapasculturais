<?php

use MapasCulturais\i;
?>

<!-- <canvas id="dinamic-grafic"></canvas> -->

<div ng-class="{hidden:!data.reportModal}" class="bg-reports-modal" id="reportsModal">
    <div class="reports-modal">

        <div class="grafic-type" ng-class="{hidden:!data.graficType}">
            <header>
                <h2 class="report-modal-title"><?php i::_e("Criar novo gráfico"); ?></h2>
                <a ng-click="data.reportModal=false" class="close-modal""><i class=" fas fa-times close-modal"></i></a>
            </header>

            <p><?php i::_e("Antes de definir os parâmetros, defina o tipo de gráfico que você deseja:"); ?></p>
            <p><b><?php i::_e("Tipo de visualização"); ?></b></p>

            <div class="line">
                <label><input ng-model="data.reportData.type" value="pie" type="radio"> <i class="fas fa-chart-pie"></i> <span><b><?php i::_e("Gráfico de pizza"); ?></b></span> </label>
            </div>

            <div class="line">
                <label><input ng-model="data.reportData.type" value="line" type="radio"> <i class="fas fa-chart-area"></i> <span><b><?php i::_e("Gráfico de linha"); ?></b></span> </label>
            </div>

            <div class="line">
                <label><input ng-model="data.reportData.type" value="bar" type="radio"> <i class="far fa-chart-bar"></i> <span><b><?php i::_e("Gráfico de barra"); ?></b></span> </label>
            </div>

            <div class="line">
                <label><input ng-model="data.reportData.type" value="table" type="radio"> <i class="fas fa-th-list"></i> <span><b><?php i::_e("Gráfico de tabela"); ?></b></span> </label>
            </div>

        </div>

        <div class="grafic-data">
            <!-- <div class="grafic-data" ng-class="{hidden:!data.graficData}"> -->
            <header>
                <h2 class="report-modal-title"><?php i::_e("Criar novo gráfico de pizza"); ?></h2>
                <a ng-click="data.reportModal=false" class="close-modal""><i class=" fas fa-times close-modal"></i></a>
            </header>

            <p><?php i::_e("Agora defina o título e dados exibido no gráfico"); ?></p>

            <div>
                <div class="line flex">
                    <div class="column">
                        <label><?php i::_e("Título do gráfico"); ?></label>
                        <input type="text" ng-model="data.reportsData.title" placeholder="<?php i::_e("Digite um título que represente os dados do novo gráfico"); ?>">
                    </div>
                    <div class="column">
                        <label><?php i::_e("Breve descrição"); ?></label>
                        <input type="text" ng-model="data.reportsData.description" placeholder="<?php i::_e("Digite uma descrição resumida"); ?>">
                    </div>
                </div>
                <div class="line flex">
                    <div class="column">
                        <label><?php i::_e("Dados a serem exibidos"); ?></label>
                        <select>
                            <option><?php i::_e("Seleciona um dado"); ?></option>
                        </select>
                    </div>
                </div>
            </div>

            <hr>

            <div>
                <div ng-if="data.reportsData.categories.length > 0">
                    <label><?php i::_e("Categoria da oportunidade"); ?></label>
                    <select>
                        <option value=""><?php i::_e("Todas"); ?></option>
                        <option ng-repeat="dataSelect in  data.dataDisplay" label="{{dataSelect.label}}">{{dataSelect.value}}</option>
                    </select>
                </div>
            </div>
        </div>

        <footer>
            <button class="btn btn-default close-modal cancel" ng-click="data.graficData=false; data.graficType=true; data.reportModal=false"><?php i::_e("Cancelar"); ?></button>
            <button class="btn btn-default draft" class="js-close"><?php i::_e("Salvar rascunho"); ?></button>
            <button class="btn btn-primary next" ng-if="data.graficType == true" ng-click="data.graficData=true; data.graficType=false;nextStep()" class="js-close"><?php i::_e("Proxima etapa"); ?></button>
            <button class="btn btn-primary" ng-click="createGrafic()" ng-if="data.graficData == true"><?php i::_e("Gerar gráfico"); ?></button>
        </footer>

    </div><!-- /.reports-modal -->
</div><!-- /.bg-reports-modal -->