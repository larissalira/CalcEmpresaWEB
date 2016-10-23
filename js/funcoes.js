$(function(){
	function Adicionar(){
		$("#tblCadastro tbody").append(
                        "<tr>"+
			"<td><input type='text' name='profissionalEnvolvido' size='35'/></td>"+
			"<td><input type='text' name='horasTotais' size='10'/></td>"+
			"<td><input type='text' name='cotas' size='10'/></td>"+
                        "<td><input type='text' name='diarias' size='10'/></td>"+
                        "<td><input type='text' name='despesas1' size='10'/></td>"+
                        "<td><input type='text' name='despesas2' size='10'/></td>"+
                        "<td><input type='text' name='despesaEquipamento' size='10'/></td>"+
                        "<td><img src='img/disk.png' class='btnSalvar'><img src='img/delete.png' class='btnExcluir'/></td>"+
			"</tr>");

		$(".btnSalvar").bind("click", Salvar);
		$(".btnExcluir").bind("click", Excluir); 
	};

	function Salvar(){
		var par = $(this).parent().parent(); //tr
		var tdNome = par.children("td:nth-child(1)");
		var tdHorasTotais= par.children("td:nth-child(2)");
		var tdCotas = par.children("td:nth-child(3)");
                var tdDiarias = par.children("td:nth-child(4)");
                var tdDesperas1 = par.children("td:nth-child(5)");
                var tdDespesas2 = par.children("td:nth-child(6)");
                var tdDespesaEquipamento = par.children("td:nth-child(7)");
		var tdBotoes = par.children("td:nth-child(8)");

		tdNome.html(tdNome.children("input[type=text]").val());
		tdHorasTotais.html(tdHorasTotais.children("input[type=text]").val());
		tdCotas.html(tdCotas.children("input[type=text]").val());
                tdDiarias.html(tdDiarias.children("input[type=text]").val());
                tdDesperas1.html(tdDesperas1.children("input[type=text]").val());
                tdDespesas2.html(tdDespesas2.children("input[type=text]").val());
                tdDespesaEquipamento.html(tdDespesaEquipamento.children("input[type=text]").val());
		tdBotoes.html("<img src='img/delete.png'class='btnExcluir'/><img src='img/pencil.png' class='btnEditar'/>");

               
		$(".btnEditar").bind("click", Editar);
		$(".btnExcluir").bind("click", Excluir);
	};

        function Editar(){
		var par = $(this).parent().parent(); //tr              
                var tdNome = par.children("td:nth-child(1)");
		var tdHorasTotais= par.children("td:nth-child(2)");
		var tdCotas = par.children("td:nth-child(3)");
                var tdDiarias = par.children("td:nth-child(4)");
                var tdDesperas1 = par.children("td:nth-child(5)");
                var tdDespesas2 = par.children("td:nth-child(6)");
                var tdDespesaEquipamento = par.children("td:nth-child(7)");
		var tdBotoes = par.children("td:nth-child(8)");

		tdNome.html("<input type='text' id='txtNome' value='"+tdNome.html()+"'/>");
		tdHorasTotais.html("<input type='text'id='txtHorasTotais' value='"+tdHorasTotais.html()+"'/>");
		tdCotas.html("<input type='text' id='txtcotas' value='"+tdCotas.html()+"'/>");
                tdDiarias.html("<input type='text' id='txtDiarias' value='"+tdDiarias.html()+"'/>");
                tdDesperas1.html("<input type='text' id='txtDespesas1' value='"+tdDesperas1.html()+"'/>");
                tdDespesas2.html("<input type='text' id='txtDespesas2' value='"+tdDespesas2.html()+"'/>");
                tdDespesaEquipamento.html("<input type='text' id='txtEquipamento' value='"+tdDespesaEquipamento.html()+"'/>");
		tdBotoes.html("<img src='img/disk.png' class='btnSalvar'/>");

		$(".btnSalvar").bind("click", Salvar);
		$(".btnEditar").bind("click", Editar);
		$(".btnExcluir").bind("click", Excluir);
	};
        
	function Excluir(){
	    var par = $(this).parent().parent(); //tr
	    par.remove();
	};

        $(".btnSalvar").bind("click", Salvar);
	$(".btnEditar").bind("click", Editar);
	$(".btnExcluir").bind("click", Excluir);
	$("#btnAdicionar").bind("click", Adicionar); 
});



