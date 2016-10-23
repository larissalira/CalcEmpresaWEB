<!DOCTYPE html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>meu projeto v1.0 - Teste</title>
<link rel="stylesheet" href="css/style3.css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'/>
<script src="js/jquery.1.6.4.js"></script>
<script src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script src="js/jquery.easing.js"></script>
<meta charset="UTF-8" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/chart.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
<script type="text/javascript" src="js/grafico.js"></script>        
<script>document.createElement('section');var duration=500,easing='swing';</script>
<script src="js/script.js"></script>

<style>
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.6s ease-in-out;
    opacity: 0;
}

div.panel.show {
    opacity: 1;
    max-height: 500px;
}
</style>


</head>

<body>
<div id="main-wrapper">
<div id="main" class="clearfix">
<aside id="sidebar" class="sidebar">
<div id="logo"><span>Projeto</span></div>
<ul id="doc-nav">
<li><a href="#getting_started">Cadastrar Empresa</a></li>
<li><a href="#dadosTecnicos">Dados Técnicos</a></li>
<li><a href="#structure" class="parent open current">Etapas do Projeto</a>
    <ul>
    <li><a href="#etapa1">Etapa 1</a></li>
    <li><a href="#etapa2">Etapa 2</a></li>
    <li><a href="#etapa3">Etapa 3</a></li>
    <li><a href="#etapa4">Etapa 4</a></li>

    
    </ul>
</li>
 
<li><a href="#horasPorTecnico">Horas por Técnico</a></li>
<li><a href="#despesasGerais">Despesas Gerais</a></li>
<li><a href="#custosTotais">Custos Totais</a></li>
<li>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="chart_div"></div>
</li>
</ul>


</aside>
<div id="content">
<section id="getting_started">
    <form method="post" action="backend/banco/inserir.php">
    <h3>Informações gerais</h3>
    <button class="accordion">Identificação da empresa</button>
    <div class="panel">
        <br>    
        Nome Fictício <input type="text" name="nomeEmpresa" size="35" />
        Porte da Empresa
        <select name="porte">
            <option>Pequeno</option>
            <option>Médio</option>
             <option>Grande</option>
        </select>
        
        Telefone <input type="tel" name="telefoneEmpresa" size="15" /><br><br>
        Razão Social: <input type="text" name="razaosocial" size="35" />
        Segmento <input type="text" name="segmento" size="20" />
        CNPJ <input type="text" name="cnpj" size="35" /><br>
        Inscrição Estadual <input type="text" name="inscricaoestadual" size="35" /><br>
    </div>  

        <button class="accordion">Endereço</button>
        <div class="panel">
            <br>
           Rua <input type="text" name="rua" size="50" />
           No. <input type="text" name="numero" size="4" /> 
           Bairro <input type="text" name="bairro" size="20" /> 
           CEP <input type="text" name="CEP" size="20" /> <br> <br>
           Estado <input type="text" name="estado" size="35" />
           Cidade <input type="text" name="cidade" size="35" /><br>
           <br/>
           
           Cidade origem <input type="text" name="cidadeOrigem" size="25" /><br>
           Cidade Destino <input type="text" name="cidadeDestino" size="25" /><br>
           
        <select name="frutasdaepoca">
      <optgroup label="Paraíba">
         <option>Água Branca</option>
         <option>Aguiar</option>
         <option>Alagoa Grande</option>
         <option>Alagoa Nova</option>
         <option>Alagoa Nova</option>
      
      </optgroup>

        </select>
         <br>
         Distância (KM) <input type="text" name="distancia" size="5" /><br>
         <br>
           
        </div>
  
     <button class="accordion">Contato na empresa</button>
        <div class="panel">
           Nome <input type="text" name="contato" size="35" /><br>
           Função <input type="text" name="funcao" size="35" /><br>
           Telefone <input type="tel" name="telefone" size="35" /><br>
           Email <input type="email" name="emailDoContato" size="35" /><br> 
           <br>
           
           Nome do projeto <input type="text" name="nomeDoProjeto" size="70"/>
        </div>
     <button name="salvar" type="submit">Enviar</button>
    </form>
</section>

<section id="dadosTecnicos">
<h3>Dados Técnicos</h3>
<p>
    Setor Responsável
        <select name="setor">
            <option>Setor do catimbó Catimbozal</option>
            <option>Setor da macumba Macumbal</option>
            <option>Setor dos judeus </option>
            <option>Setor dos certinhos</option>
            <option>Setor das maracutáia</option>
        </select>
     <br>
</p>

Profissional envolvido <input type="text" name="nome" size="71" /><br>
Nível de conhecimento
<select name="nivel">
    <option>Técnico</option>
    <option>Superior</option>
</select>
Hora Técnica <input name="hora" size="7"/>
Cota <input  name="cota" size="7" />
Diária <input  name="diaria" size="7" />
<br>
<br>

Profissional envolvido <input type="text" name="nome" size="71" /><br>
Nível de conhecimento
<select name="nivel">
    <option>Técnico</option>
    <option>Superior</option>
</select>
Hora Técnica <input name="hora" size="7"/>
Cota <input  name="cota" size="7" />
Diária <input  name="diaria" size="7" />
<br>
<br>

Profissional envolvido <input type="text" name="nome" size="71" /><br>
Nível de conhecimento
<select name="nivel">
    <option>Técnico</option>
    <option>Superior</option>
</select>
Hora Técnica <input name="hora" size="7"/>
Cota <input  name="cota" size="7" />
Diária <input  name="diaria" size="7" />
<br>
<br>

Profissional envolvido <input type="text" name="nome" size="71" /><br>
Nível de conhecimento
<select name="nivel">
    <option>Técnico</option>
    <option>Superior</option>
</select>
Hora Técnica <input name="hora" size="7"/>
Cota <input  name="cota" size="7" />
Diária <input  name="diaria" size="7" />
<br>
<br>

Profissional envolvido <input type="text" name="nome" size="71" /><br>
Nível de conhecimento
<select name="nivel">
    <option>Técnico</option>
    <option>Superior</option>
</select>
Hora Técnica <input name="hora" size="7"/>
Cota <input  name="cota" size="7" />
Diária <input  name="diaria" size="7" />
<br>
<br>

Profissional envolvido <input type="text" name="nome"  /><br>
Nível de conhecimento
<select name="nivel">
    <option>Técnico</option>
    <option>Superior</option>
</select>
Hora Técnica <input name="hora" size="7"/>
Cota <input  name="cota" size="7" />
Diária <input  name="diaria" size="7" />
<br>
<br>

<b>Projeto em Rede/Parceria com:</b> <input type="text" name="parceiro" size="70" />

<br>
<button type="submit" name="salva1">Enviar</button>
</section>
    
<section id="structure">
<h3>Etapas do Projeto</h3>
<section id="etapa1">
    <h4>Etapa 1</h4>
    <p>
        Nome da etapa 1: <input type="text" name="etapa1" size="70" />
    </p>
 
    <table border="1">
    <thead>
        <th>Profissional Envolvido</th>
        <th>Horas</th>
        <th>Cotas (R$)</th>
        <th>Diárias (R$)</th>
        <th>Despesa logistica 1</th>
        <th>Despesa logistica 2</th>
        <th>Despesa equipamento</th>
    </thead>
    <tbody>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Despesa equipamento(R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
    </tbody>   
    </table>
    <br>
     Viagens na etapa <input name="" type="" size="4" />
     <br>
     <br>
     <br>

    <table border="1">
    <caption>Custo Rede/Parceria</caption>
    <tr>
            <th>Horas totais</th>
            <th>Valor Total R$</th>
    </tr>
    <tr>
            <td>0h</td>
            <td>0,00</td>
    </tr>
    </table>
     
</section>
</section>
<section id="etapa2">
<h4>Etapa 2</h4>

 <p>
    Nome da etapa 2: <input type="text" name="etapa1" size="70" />
</p>
 <table border="1">
    <thead>
        <th>Profissional Envolvido</th>
        <th>Horas</th>
        <th>Cotas (R$)</th>
        <th>Diárias (R$)</th>
        <th>Despesa logistica 1</th>
        <th>Despesa logistica 2</th>
        <th>Despesa equipamento</th>
    </thead>
    <tbody>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Despesa equipamento(R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
    </tbody>   
    </table>
    <br>
     Viagens na etapa <input name="" type="" size="4" />
     <br>
     <br>
     <br>

    <table border="1">
    <caption>Custo Rede/Parceria</caption>
    <tr>
            <th>Horas totais</th>
            <th>Valor Total R$</th>
    </tr>
    <tr>
            <td>0h</td>
            <td>0,00</td>
    </tr>
    </table>
</section>
<section id="etapa3">
<h4>Etapa 3</h4>
 <p>
    Nome da etapa 3: <input type="text" name="etapa1" size="70" />
</p>

 <table border="1">
    <thead>
        <th>Profissional Envolvido</th>
        <th>Horas</th>
        <th>Cotas (R$)</th>
        <th>Diárias (R$)</th>
        <th>Despesa logistica 1</th>
        <th>Despesa logistica 2</th>
        <th>Despesa equipamento</th>
    </thead>
    <tbody>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Despesa equipamento(R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
    </tbody>   
    </table>
    <br>
     Viagens na etapa <input name="" type="" size="4" />
     <br>
     <br>
     <br>

    <table border="1">
    <caption>Custo Rede/Parceria</caption>
    <tr>
            <th>Horas totais</th>
            <th>Valor Total R$</th>
    </tr>
    <tr>
            <td>0h</td>
            <td>0,00</td>
    </tr>
    </table>

</section>
<section id="etapa4">
<h4>Etapa 4</h4>
 <p>
    Nome da etapa 4: <input type="text" name="etapa1" size="70" />
</p>

 <table border="1">
    <thead>
        <th>Profissional Envolvido</th>
        <th>Horas</th>
        <th>Cotas (R$)</th>
        <th>Diárias (R$)</th>
        <th>Despesa logistica 1</th>
        <th>Despesa logistica 2</th>
        <th>Despesa equipamento</th>
    </thead>
    <tbody>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Despesa equipamento(R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas</td>
            <td>Cotas (R$)</td>
            <td>Diárias (R$)</td>
            <td>Desp. logistica 1(R$)</td>
            <td>Desp. logistica 2(R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
    </tbody>   
    </table>
    <br>
     Viagens na etapa <input name="" type="" size="4" />
     <br>
     <br>
     <br>

    <table border="1">
    <caption>Custo Rede/Parceria</caption>
    <tr>
            <th>Horas totais</th>
            <th>Valor Total R$</th>
    </tr>
    <tr>
            <td>0h</td>
            <td>0,00</td>
    </tr>
    </table>
     
</section>
 
<section id="horasPorTecnico">
<h3>Horas por Técnico</h3>

<!-- aqui deve ser carregada a quantidade de horas totais de todas as etapas -->

<table border="1">
    <thead>
        <th>Profissional</th>
        <th colspan="4">Horas de cada etapa</th>
        <th>Horas totais</th>
        <th>Valor em horas</th>
    </thead>
    <tbody>
        <tr>
            <td>Nome do profissional</td>
            <td>Etapa 1:</td>
            <td>Etapa 2:</td>
            <td>Etapa 3:</td>
            <td>Etapa 4:</td>
            <td>Horas totais (h)</td>
            <td>Valor em horas (R$)</td>
        </tr>
        <tr>
            <td>Nome do profissional</td>
            <td>Etapa 1:</td>
            <td>Etapa 2:</td>
            <td>Etapa 3:</td>
            <td>Etapa 4:</td>
            <td>Horas totais (h)</td>
            <td>Valor em horas (R$)</td>
        </tr>
        <tr>
            <td>Nome do profissional</td>
            <td>Etapa 1:</td>
            <td>Etapa 2:</td>
            <td>Etapa 3:</td>
            <td>Etapa 4:</td>
            <td>Horas totais (h)</td>
            <td>Valor em horas (R$)</td>
        </tr>
        <tr>
            <td>Nome do profissional</td>
            <td>Etapa 1:</td>
            <td>Etapa 2:</td>
            <td>Etapa 3:</td>
            <td>Etapa 4:</td>
            <td>Horas totais (h)</td>
            <td>Valor em horas (R$)</td>
        </tr>
        <tr>
            <td>Nome do profissional</td>
            <td>Etapa 1:</td>
            <td>Etapa 2:</td>
            <td>Etapa 3:</td>
            <td>Etapa 4:</td>
            <td>Horas totais (h)</td>
            <td>Valor em horas (R$)</td>
        </tr>
        <tr>
            <td>Nome do profissional</td>
            <td>Etapa 1:</td>
            <td>Etapa 2:</td>
            <td>Etapa 3:</td>
            <td>Etapa 4:</td>
            <td>Horas totais (h)</td>
            <td>Valor em horas (R$)</td>
        </tr>
    

    </tbody>
</table>
<br>
<br>
<br>

<p>
    Horas totais (h)
</p>
<p>
    Valor total (R$)
</p>
</section>
<section id="despesasGerais">
<h3>Despesas Gerais</h3>

<table border="1">
    <thead>
        <th>Profissional</th>
        <th>Horas totais</th>
        <th>Valor em horas (R$)</th>
        <th>Cotas e diárias (R$)</th>
        <th>Despesas logistica (R$)</th>
        <th>Desp. eqpto.(R$)</th>
    </thead>
    <tbody>
        <tr>
            <td>Profissional</td>
            <td>Horas totais</td>
            <td>Valor em horas (R$)</td>
            <td>Cotas e diárias (R$)</td>
            <td>Despesas logistica (R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas totais</td>
            <td>Valor em horas (R$)</td>
            <td>Cotas e diárias (R$)</td>
            <td>Despesas logistica (R$)</td>
            <td>Desp. eqpto.(R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas totais</td>
            <td>Valor em horas (R$)</td>
            <td>Cotas e diárias (R$)</td>
            <td>Despesas logistica (R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas totais</td>
            <td>Valor em horas (R$)</td>
            <td>Cotas e diárias (R$)</td>
            <td>Despesas logistica (R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas totais</td>
            <td>Valor em horas (R$)</td>
            <td>Cotas e diárias (R$)</td>
            <td>Despesas logistica (R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Horas totais</td>
            <td>Valor em horas (R$)</td>
            <td>Cotas e diárias (R$)</td>
            <td>Despesas logistica (R$)</td>
            <td>Desp. eqpto. (R$)</td>
        </tr>
    </tbody>
</table>

<br>
<br>

<!-- valor total do custo do parceiro em cada etapa -->

<table border="1">
    <caption>Custo Rede/Parceria</caption>
    <tr>
        <th>Horas totais</th>
        <th>Valor Total R$</th>
    </tr>
    <tr>
        <td>0h</td>
        <td>0,00</td>
    </tr>
    
</table>

<br>
<br>
<!-- valor total do custo do aluguel do carro. A soma de etapa -->

<table border="1">
    <caption>Valor Carro</caption>
    <tr>
        <th>Aluguel</th>
        <th>Combustível R$</th>
    </tr>
    <tr>
        <td>qtde. de dias</td>
        <td>valor do combustível</td>
    </tr>
    <tr>
        <td>R$ aluguel</td>
    </tr>
    
</table>


<!--<p><small class="error"><span>PLEASE NOTE!</span></small>
All the images used in this theme are the property of their respective owners and should be purchased separately.
</p> -->
</section>
<section id="custosTotais">
<h3>Custos Totais</h3>
<div class="user-html">

    <table border="1">
    <thead>
        <th>Profissional</th>
        <th>Valor em horas</th>
        <th>Despesas totais</th>
        <th>Custo por profissional</th>

    </thead>
    <tbody>
        <tr>
            <td>Profissional</td>
            <td>Valor em horas</td>
            <td>Despesas totais</td>
            <td>Custo por profissional</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Valor em horas</td>
            <td>Despesas totais</td>
            <td>Custo por profissional</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Valor em horas</td>
            <td>Despesas totais</td>
            <td>Custo por profissional</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Valor em horas</td>
            <td>Despesas totais</td>
            <td>Custo por profissional</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Valor em horas</td>
            <td>Despesas totais</td>
            <td>Custo por profissional</td>
        </tr>
        <tr>
            <td>Profissional</td>
            <td>Valor em horas</td>
            <td>Despesas totais</td>
            <td>Custo por profissional</td>
        </tr>
    </table>
    <br>
    <br>
    
    <table border="1">
        <thead>
            <tr>
                <th>Horas do projeto</th>
                <th>Custo do projeto (horas)</th>
                <th>Total de Despesas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0h</td>
                <td>R$74.000,00</td>
                <td>R$3.300,00</td>
            </tr>
        </tbody>
    </table>

    <section>
        <table border="1">
            <thead>
            <th>Custo do projeto (R$ horas+ R$ despesas)</th>
            <th>Margem de segurança %</th>
            <th>Valor do parceiro</th>
            </thead>
            <tbody>
            <td>R$23.000,00</td>
            <td>27,5%</td>
            <td>Valor do parceiro</td>
            </tbody>
        </table>
        <br>
        <p>
        <small class="error">
        <span>Custo Total do projeto</span>
        </small>
        </p>
        <table border="1">
            <thead>
                <tr>
                    <th>Valor do projeto+Parceiro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Valor do projeto+Parceiro</td>
                </tr>
            </tbody>
        </table>
        
    </section>
</section>
 
<section>
    <i>I see it! But I don't belive</i> (George Cantor)
</section>
<h4 style="margin-left:50px">Chaves, Lira, Lisboa @2016</h4>
</div>
</div>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>

</body>
</html>
