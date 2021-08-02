<?php
include_once 'header.php';
?>
<script src="./js/tables_add.js"></script>
<!--inicio secao -->
<section id="home bg-light">

    <div class="container">

        <form class="row g-4">
            <!-- Inico Identificação -->
            <span class="display-6">1. Identificação</span>
            <div class="col-md-12">
                <label for="nomeDocente" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nomeDocente">
            </div>
            <div class="col-md-12">
                <label for="situacaoFuncional" class="form-label me-4">Situação funcional</label>
                <input type="radio" class="form-check-input" id="situacaoFuncional" name="situacaoFuncional">
                <label for="situacaoFuncional" class="form-check-label me-2">Efetivo</label>
                <input type="radio" class="form-check-input" id="situacaoFuncional2" name="situacaoFuncional">
                <label for="situacaoFuncional2" class="form-check-label">Designado</label>
            </div>
            <div class="col-12">
                <label for="unidade" class="form-label">Unidade</label>
                <select class="form-select" aria-label="Unidade">
                    <option selected>Selecione uma Unidade</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-12">
                <label for="departamento" class="form-label">Departamento</label>
                <select class="form-select" aria-label="Departamento">
                    <option selected>Selecione um Departamento</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="regimeTrabalho" class="form-label">Regime de Trabalho</label>
                <input type="number" class="form-control" id="regimeTrabalho" placeholder="horas" min=0>
            </div>
            <div class="col-md-6">
                <label for="titulacao" class="form-label">Titulação</label>
                <input type="text" class="form-control" id="titulacao">
            </div>
            <div class="col-md-12">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep">
            </div>
            <div class="col-md-8">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua">
            </div>
            <div class="col-md-4">
                <label for="numeroRua" class="form-label">Número</label>
                <input type="text" class="form-control" id="numeroRua">
            </div>
            <div class="col-md-12">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro">
            </div>
            <div class="col-md-12">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade">
            </div>
            <div class="col-md-12">
                <label for="uf" class="form-label">Estado</label>
                <input type="text" class="form-control" id="uf">
            </div>
            <div class="col-md-4">
                <label for="tel" class="form-label">Telefone Fixo</label>
                <input type="tel" class="form-control" id="tel">
            </div>
            <div class="col-md-4">
                <label for="cel" class="form-label">Celular</label>
                <input type="tel" class="form-control" id="cel">
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">E-mail</label>
                <input type="mail" class="form-control" id="email">
            </div>
            <div class="col-md-12">
                <label for="lates" class="form-label">Endereço Eletrônico do Currículo Lates</label>
                <input type="url" class="form-control" id="lates">
            </div>
            <!-- Fim Identificação -->

            <!-- Inico Síntese -->
            <span class="display-6">2. Síntese</span>
            <!-- Atividade de Ensino -->
            <div class="col-md-12 border">
                <span>2.1 Atividades de Ensino</span>
                <table id="atvEnsino" class=" table order-list">
                    <thead>
                        <tr>
                            <td>Disciplina a ser ministrada, por semestre</td>
                            <td>Natureza (OB, OP)</td>
                            <td>Curso(s) para os quais a será ofertada e
                                Nível (G, M, D)
                            </td>
                            <td>
                                CHSM* Total
                            </td>
                            <td>
                                CHSM
                                Teórica
                            </td>
                            <td>
                                Turmas (nº)
                            </td>
                            <td>
                                CDSM
                                Teórica
                            </td>
                            <td>
                                CHSM
                                Prática
                            </td>
                            <td>
                                Turmas (nº)
                            </td>
                            <td>
                                CDSM
                                Prática
                            </td>
                            <td>
                                CDSM Total
                                (P+T)
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-4">
                                <input type="text" name="disciplina" class="form-control" />
                            </td>
                            <td class="col-sm-4">
                                <input type="text" name="natureza" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="cursos" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="chsmTotal" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="chsmTeorica" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="turmasTeorica" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="cdsmTeorica" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="chsmPratica" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="turmasPratica" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="cdsmPratica" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="cdsmTotal" class="form-control sum-total1" />
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>
                            </td>
                        </tr>
                        <tr id="finalRow1">
                            <td colspan="9">CDSM Total 1º semestre</td>
                            <td colspan="2"><input type="number" name="totalcdsm1" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td colspan="11" style="text-align: center;">
                                <input type="button" class="btn btn-lg btn-block " id="addrow" value="Nova Linha" />
                            </td>
                        </tr>
                        <tr id="finalRow2">
                            <td colspan="9">CDSM Total 2º semestre</td>
                            <td colspan="2"><input type="number" name="totalcdsm2" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td colspan="11" style="text-align: center;">
                                <input type="button" class="btn btn-lg btn-block " id="addrow2" value="Nova Linha" />
                            </td>
                        </tr>
                        <tr id="finalRow3">
                            <td colspan="9">CDSM média no ano</td>
                            <td colspan="2"><input type="number" name="totalcdsmAno" class="form-control" /></td>
                        </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

                <div class="col-md-12">
                    <p class="text-center">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseObservacoes" role="button" aria-expanded="false" aria-controls="collapseObservacoes">
                            Informações
                        </a>
                    </p>
                    <div class="collapse" id="collapseObservacoes">
                        <div class="card card-body">
                            Observações:
                            1.CHSM= carga horária semanal média da disciplina (carga horária total da disciplina, conforme consta no Projeto Pedagógico /18 semanas) <br>
                            2.CHSM Teórica = carga horária semanal média de aulas teóricas que será oferecida para cada turma, conforme previsto no Projeto Pedagógico. CHSM Prática é a carga semanal média de aulas práticas oferecida para cada turma.<br>
                            3.CDSM teórica é o resultado da multiplicação da CHSM teórica de cada turma pelo nº de turmas nas quais o docente ministrará a disciplina. O cálculo da CDSM Prática é feito da mesma forma.<br>
                            4.CDSM = carga didática semanal média que será assumida pelo docente na disciplina, computada da forma prevista na Resolução COEPE 225/2017. Se mais de um docente participar da oferta da disciplina, para uma mesma turma, ou para turmas diferentes, a CDSM prevista para a mesma será dividida entre os docentes, na proporção de sua participação<br>
                            5.As atividades de orientação de Estágios, TCC, mestrado e doutorado, que, nos termos e limites previstos na Resolução COEPE 225/2017, forem computáveis como encargos didáticos devem ser lançadas nesse quadro, tendo sua CDSM calculada da forma prevista na referida norma. Caso o docente esteja orientando, nessas atividades, número de estudantes que exceda o limite previsto para atribuição de CDSM, na referida norma, deverá lançar os alunos adicionais como ‘Outras orientações’, no quadro que figura no item 2.4.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Atividade de Ensino -->

            <!-- Projeto de Pesquisa -->
            <div class="col-md-12 border">
                <table id="projEnsino" class="table order-list">
                    <thead>
                        <tr>
                            <td>Projeto de Ensino (Título)</td>
                            <td>Nº de identificação</td>
                            <td>Período de realização</td>
                            <td class="text-truncate">Carga horária média estimada de dedicação ao projeto</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-4">
                                <input type="text" name="projEnsTitulo" class="form-control" />
                            </td>
                            <td class="col-sm-4">
                                <input type="text" name="projEnsNum" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="projEnsPeriod" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="projEnsCargaHor" class="form-control" />
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>
                            </td>
                        </tr>
                        <tr id="finalRowProjEnsino">
                            <td colspan="4" style="text-align: center;">
                                <input type="button" class="btn btn-lg btn-block " id="addrowProjEnsino" value="Nova Linha" />
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

                <div class="col-md-12">
                    <p class="text-center">
                        Para cada projeto relacionado, preencher o formulário que consta ao final desse documento (Anexo I), substituindo o título por ‘Projeto de ensino’, o qual deve ser acompanhado da íntegra do Projeto.
                    </p>
                </div>
            </div>
            <!-- Projeto de Pesquisa -->

            <!-- Atividades de Pesquisa -->
            <div class="col-md-12 border">
                <span>2.2 Atividades de Pesquisa</span>
                <table id="projPesquisa" class="table order-list">
                    <thead>
                        <tr>
                            <td>Projeto (Título)</td>
                            <td>Nº de identificação no MAP</td>
                            <td>Período de realização</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-4">
                                <input type="text" name="projPesqTitulo" class="form-control" />
                            </td>
                            <td class="col-sm-4">
                                <input type="text" name="projPesqNum" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="projPesqPeriod" class="form-control" />
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>
                            </td>
                        </tr>
                        <tr id="finalRowProjPesquisa">
                            <td colspan="4" style="text-align: center;">
                                <input type="button" class="btn btn-lg btn-block " id="addrowProjPesquisa" value="Nova Linha" />
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

                <div class="col-md-12">
                    <p class="text-center">
                        Para cada projeto relacionado, preencher o formulário que consta ao final desse documento (Anexo I), que deve ser acompanhado da íntegra do Projeto.
                    </p>
                </div>
            </div>
            <!-- Atividades de Pesquisa -->

            <!-- Atividades de Extensão -->
            <div class="col-md-12 border">
                <span>2.3 Atividades de Extensão</span>
                <table id="atvExtensao" class="table order-list">
                    <thead>
                        <tr>
                            <td>Projeto/Programa/Atividade (Título)</td>
                            <td>Nº de identificação no SIGA EXTENSÃO</td>
                            <td>Período de realização</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-4">
                                <input type="text" name="atvExtensaoTitulo" class="form-control" />
                            </td>
                            <td class="col-sm-4">
                                <input type="text" name="atvExtensaoNum" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="atvExtensaoPeriod" class="form-control" />
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>
                            </td>
                        </tr>
                        <tr id="finalRowatvExtensao">
                            <td colspan="4" style="text-align: center;">
                                <input type="button" class="btn btn-lg btn-block " id="addrowatvExtensao" value="Nova Linha" />
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

                <div class="col-md-12">
                    <p class="text-center">
                        Anexar cadastro SIGA EXTENSÃO impresso relativo aos projetos citados conforme orientação que consta no Anexo II
                        Observação: Para constar de proposta de trabalho docente, todo projeto de ensino, pesquisa ou extensão tem que estar cadastrado na respectiva Pró-reitoria, nos sistemas indicados pela mesma

                    </p>
                </div>
            </div>
            <!-- Atividades de Extensão -->

            <!-- Atividades de Orientação de Estudantes -->
            <div class="col-md-12 border">
                <span>2.4 Atividades de Orientação de Estudantes</span>
                <table id="atvOrientacao" class="table order-list">
                    <thead>
                        <tr>
                            <td>Aluno</td>
                            <td>Tipo de vínculo: aluno de mestrado, doutorado, bolsista de IC, Bolsista de extensão, bolsista PIBID, estagiário voluntário,
                                Outro (especificar)
                            </td>
                            <td>Projeto ao qual a orientação está vinculada</td>
                            <td>Duração prevista no ano
                                ......a..../2022
                            </td>
                            <td>Carga horária média semanal dedicada à orientação</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-3">
                                <input type="text" name="atvOrientacaoAluno" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="atvOrientacaoVinculo" class="form-control" />
                            </td>
                            <td class="col-sm-2">
                                <input type="text" name="atvOrientacaoProjVinc" class="form-control" />
                            </td>
                            <td class="col-sm-2">
                                <input type="text" name="atvOrientacaoDur" class="form-control" />
                            </td>
                            <td class="col-sm-2">
                                <input type="text" name="atvOrientacaoCarga" class="form-control" />
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>
                            </td>
                        </tr>
                        <tr id="finalRowatvOrientacao">
                            <td colspan="6" style="text-align: center;">
                                <input type="button" class="btn btn-lg btn-block " id="addrowatvOrientacao" value="Nova Linha" />
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
            <!-- Atividades de Orientação de Estudantes -->

            <!-- Atividades de Administração Acadêmica -->
            <div class="col-md-12 border">
                <span>2.5 Atividades de Administração Acadêmica</span>
                <table id="atvAdmAcad" class="table order-list">
                    <thead>
                        <tr>
                            <td>Função de administração acadêmica exercida</td>
                            <td>Local de exercício(Unidade, Reitoria)</td>
                            <td>Carga horária semanal média estimada para o exercício da função</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-4">
                                <input type="text" name="atvAdmAcadFunc" class="form-control" />
                            </td>
                            <td class="col-sm-4">
                                <input type="text" name="atvAdmAcadLocal" class="form-control" />
                            </td>
                            <td class="col-sm-4">
                                <input type="text" name="atvAdmAcadCarga" class="form-control" />
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>
                            </td>
                        </tr>
                        <tr id="finalRowatvAdmAcad">
                            <td colspan="4" style="text-align: center;">
                                <input type="button" class="btn btn-lg btn-block " id="addrowatvAdmAcad" value="Nova Linha" />
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                <div class="col-md-12">
                    <p class="text-center">
                        Anexar cópia de documento de comprovação (portarias, atas, etc.)
                    </p>
                </div>
            </div>
            <!-- Atividades de Administração Acadêmica -->

            <!-- Atividades de Representação Institucional ou Acadêmica -->
            <div class="col-md-12 border">
                <span>2.6 Atividades de Representação Institucional ou Acadêmica</span>
                <table id="atvRepreInst" class="table order-list">
                    <thead>
                        <tr>
                            <td>Função de representação institucional ou acadêmica exercida</td>
                            <td>Órgão junto ao qual é exercida</td>
                            <td>Mandato
                                De ../../... a ../../..
                            </td>
                            <td>Carga horária semanal média prevista</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-3">
                                <input type="text" name="atvRepreInstFunc" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="atvRepreInstOrgao" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="atvRepreInstMandato" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="atvRepreInstCarga" class="form-control" />
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>
                            </td>
                        </tr>
                        <tr id="finalRowatvRepreInst">
                            <td colspan="4" style="text-align: center;">
                                <input type="button" class="btn btn-lg btn-block " id="addrowatvRepreInst" value="Nova Linha" />
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                <div class="col-md-12">
                    <p class="text-center">
                        (participação em comissão permanentes, órgãos colegiados superiores da Universidade, órgãos colegiados da unidade, etc.)
                    </p>
                </div>
            </div>
            <!-- Atividades de Representação Institucional ou Acadêmica  -->

            <!-- Atividades de Capacitação -->
            <div class="col-md-12 border">
                <span>2.7 Atividade de Capacitação</span>
                <table id="atvCapacitacao" class="table order-list">
                    <thead>
                        <tr>
                            <td>Curso no qual está matriculado</td>
                            <td>Instituição</td>
                            <td>Data de Início</td>
                            <td>Término previsto</td>
                            <td>Atividades previstas para o ano</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-sm-3">
                                <input type="text" name="atvCapacitacaoCurso" class="form-control" />
                            </td>
                            <td class="col-sm-2">
                                <input type="text" name="atvCapacitacaoInst" class="form-control" />
                            </td>
                            <td class="col-sm-2">
                                <input type="text" name="atvCapacitacaoInc" class="form-control" />
                            </td>
                            <td class="col-sm-2">
                                <input type="text" name="atvCapacitacaoFim" class="form-control" />
                            </td>
                            <td class="col-sm-3">
                                <input type="text" name="atvCapacitacaoAtvAno" class="form-control" />
                            </td>
                            <td class="col-sm-2"><a class="deleteRow"></a>
                            </td>
                        </tr>
                        <tr id="finalRowatvCapacitacao">
                            <td colspan="6" style="text-align: center;">
                                <input type="button" class="btn btn-lg btn-block " id="addrowatvCapacitacao" value="Nova Linha" />
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                <div class="col-md-12">
                    <p class="text-center">
                        (participação em cursos de capacitação, como aluno formalmente matriculado*, autorizadas pelo Departamento**) <br>
                        *Anexar comprovação de matrícula<br>
                        **Essa autorização só pode ser emitida, ou renovada, se observadas as normas e a tramitação pertinentes

                    </p>
                </div>
            </div>
            <!-- Atividades de Capacitação -->

            <!-- Outras Informações -->
            <div class="col-md-12 border">
                <span>2.8 Outras Informações</span>
                <p class="text-center">
                    (registre, nesse item, atividades relevantes para a instituição, que pretende realizar, como organização de eventos, mostras, participação em corpo editorial, membro de Comitês interinstitucionais e outras )
                </p>
                <div class="col-md-12">
                    <textarea class="form-control mb-2" name="outrasInfo" rows="3"></textarea>
                </div>
            </div>
            <!-- Outras Informações -->

            <!-- Fim Síntese -->
        </form>


    </div>

</section>
<!--fim secao -->
<?php
include_once 'footer.php';
?>