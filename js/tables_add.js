$(document).ready(function () {
    var counter1 = 0;
    var counter2 = 0;
    var counter3 = 0;
    var counter4 = 0;
    var counter5 = 0;
    var counter6 = 0;
    var counter7 = 0;
    var counter8 = 0;
    var counter9 = 0;


    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="disciplina' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="natureza' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="cursos' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="chsmTotal' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="chsmTeorica' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="turmasTeorica' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="cdsmTeorica' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="chsmPratica' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="turmasPratica' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="cdsmPratica' + counter1 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="cdsmTotal' + counter1 + '" class="form-control sum-total1"/></td>';

        cols += '<td><input type="button" class="ibtnDel1 btn btn-md btn-danger "  value="Excluir"></td>';
        newRow.append(cols);
        $("#finalRow1").before(newRow);
        counter1++;
    });

    $("#addrow2").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="disciplina' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="natureza' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="cursos' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="chsmTotal' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="chsmTeorica' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="turmasTeorica' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="cdsmTeorica' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="chsmPratica' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="turmasPratica' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="cdsmPratica' + counter2 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="cdsmTotal' + counter2 + '" class="form-control sum-total2"/></td>';

        cols += '<td><input type="button" class="ibtnDel2 btn btn-md btn-danger "  value="Excluir"></td>';
        newRow.append(cols);
        $("#finalRow2").before(newRow);
        counter2++;
    });

    $("#addrowProjEnsino").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="projEnsTitulo' + counter3 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="projEnsNum' + counter3 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="projEnsPeriod' + counter3 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="projEnsCargaHor' + counter3 + '" class="form-control"/></td>';

        cols += '<td><input type="button" class="ibtnDel3 btn btn-md btn-danger"  value="Excluir"></td>';
        newRow.append(cols);
        $("#finalRowProjEnsino").before(newRow);
        counter3++;
    });

    $("#addrowProjPesquisa").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="projPesqTitulo' + counter4 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="projPesqNum' + counter4 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="projPesqPeriod' + counter4 + '" class="form-control"/></td>';

        cols += '<td><input type="button" class="ibtnDel4 btn btn-md btn-danger"  value="Excluir"></td>';
        newRow.append(cols);
        $("#finalRowProjPesquisa").before(newRow);
        counter4++;
    });

    $("#addrowatvExtensao").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="atvExtensaoTitulo' + counter5 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvExtensaoNum' + counter5 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvExtensaoPeriod' + counter5 + '" class="form-control"/></td>';

        cols += '<td><input type="button" class="ibtnDel5 btn btn-md btn-danger"  value="Excluir"></td>';
        newRow.append(cols);
        $("#finalRowatvExtensao").before(newRow);
        counter5++;
    });

    $("#addrowatvOrientacao").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="atvOrientacaoAluno' + counter6 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvOrientacaoVinculo' + counter6 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvOrientacaoProjVinc' + counter6 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvOrientacaoDur' + counter6 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvOrientacaoCarga' + counter6 + '" class="form-control"/></td>';

        cols += '<td><input type="button" class="ibtnDel6 btn btn-md btn-danger"  value="Excluir"></td>';
        newRow.append(cols);
        $("#finalRowatvOrientacao").before(newRow);
        counter6++;
    });

    $("#addrowatvAdmAcad").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="atvAdmAcadFunc' + counter7 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvAdmAcadLocal' + counter7 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvAdmAcadCarga' + counter7 + '" class="form-control"/></td>';

        cols += '<td><input type="button" class="ibtnDel7 btn btn-md btn-danger"  value="Excluir"></td>';
        newRow.append(cols);
        $("#finalRowatvAdmAcad").before(newRow);
        counter7++;
    });

    $("#addrowatvRepreInst").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="atvRepreInstFunc' + counter8 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvRepreInstOrgao' + counter8 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvRepreInstMandato' + counter8 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvRepreInstCarga' + counter8 + '" class="form-control"/></td>';

        cols += '<td><input type="button" class="ibtnDel8 btn btn-md btn-danger"  value="Excluir"></td>';
        newRow.append(cols);
        $("#finalRowatvRepreInst").before(newRow);
        counter8++;
    });

    $("#addrowatvCapacitacao").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" name="atvCapacitacaoCurso' + counter9 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvCapacitacaoInst' + counter9 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvCapacitacaoInc' + counter9 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvCapacitacaoFim' + counter9 + '" class="form-control"/></td>';
        cols += '<td><input type="text" name="atvCapacitacaoAtvAno' + counter9 + '" class="form-control"/></td>';

        cols += '<td><input type="button" class="ibtnDel8 btn btn-md btn-danger"  value="Excluir"></td>';
        newRow.append(cols);
        $("#finalRowatvCapacitacao").before(newRow);
        counter9++;
    });



    $("table.order-list").on("click", ".ibtnDel1", function (event) {
        $(this).closest("tr").remove();
        counter1 -= 1
    });

    $("table.order-list").on("click", ".ibtnDel2", function (event) {
        $(this).closest("tr").remove();
        counter2 -= 1
    });

    $("table.order-list").on("click", ".ibtnDel3", function (event) {
        $(this).closest("tr").remove();
        counter3 -= 1
    });

    $("table.order-list").on("click", ".ibtnDel4", function (event) {
        $(this).closest("tr").remove();
        counter4 -= 1
    });

    $("table.order-list").on("click", ".ibtnDel5", function (event) {
        $(this).closest("tr").remove();
        counter5 -= 1
    });

    $("table.order-list").on("click", ".ibtnDel6", function (event) {
        $(this).closest("tr").remove();
        counter6 -= 1
    });

    $("table.order-list").on("click", ".ibtnDel7", function (event) {
        $(this).closest("tr").remove();
        counter7 -= 1
    });

    $("table.order-list").on("click", ".ibtnDel8", function (event) {
        $(this).closest("tr").remove();
        counter8 -= 1
    });

    $("table.order-list").on("click", ".ibtnDel9", function (event) {
        $(this).closest("tr").remove();
        counter9 -= 1
    });

    $("input[name=totalcdsm1]").focus(function (event) {
        var sum1 = 0;
        $('.sum-total1').each(function () {
            sum1 += parseFloat(this.value);
        });
        $("input[name=totalcdsm1]").val(sum1);
    });

    $("input[name=totalcdsm2]").focus(function (event) {
        var sum2 = 0;
        $('.sum-total2').each(function () {
            sum2 += parseFloat(this.value);
        });
        $("input[name=totalcdsm2]").val(sum2);
    });

    $("input[name=totalcdsmAno]").focus(function (event) {
        var sem1 = $("input[name=totalcdsm1]").val();
        var sem2 = $("input[name=totalcdsm2]").val();
        $("input[name=totalcdsmAno]").val((parseInt(sem1) + parseInt(sem2)) / 2);
    });

});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}