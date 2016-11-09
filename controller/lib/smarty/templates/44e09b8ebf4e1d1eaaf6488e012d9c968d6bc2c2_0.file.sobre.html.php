<?php
/* Smarty version 3.1.29, created on 2016-10-12 22:29:47
  from "/home/ubuntu/workspace/view/sobre.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57feb95b8d87f3_39943590',
  'file_dependency' => 
  array (
    '44e09b8ebf4e1d1eaaf6488e012d9c968d6bc2c2' => 
    array (
      0 => '/home/ubuntu/workspace/view/sobre.html',
      1 => 1476310630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view/header.html' => 1,
    'file:view/footer.html' => 1,
  ),
),false)) {
function content_57feb95b8d87f3_39943590 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!--Titulo e descrição-->
  <title>Projeto MOOC</title>
  <meta charset="utf-8"/>
  <meta name="description" content="Projeto MOOC - TFG Kayque"/>
  <!--Configurações do bootstrap-->  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="view/css/bootstrap/bootstrap.min.css"/>
  <!--Folhas de estilo-->
  <link rel="stylesheet" href="view/css/cabecalho-rodape.css"/>
  <link rel="stylesheet" href="view/css/dashboard.css"/>
  <link rel="stylesheet" href="view/css/classroom-home.css"/>
  <!--Icones-->
  <link rel="stylesheet" href="view/fonts/font-awesome/css/font-awesome.min.css"/>
</head>
<body>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <!--Conteúdo-->
    <div id="page-content-wrapper">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row main">
                  <section class="col-lg-12 col-md-12">
                    <!--Painél-->
                    <hr>
                    <div class="panel panel-default">
                      <!--Conteúdo-->
                      <section class="panel-body row">
                        <!--Cabeçalho-->
                        <header>
                          <div class="col-md-10 center-block">
                            <h2 class="page-header">Sobre a plataforma</h2>
                          </div>
                          <div class="col-md-2">
                          </div>
                        </header>
                        <!--Cabeçalho-->
                        <session class="col-md-9 text-justify">
                             <article id="sec0">
        
          <p class="text-justify">No contexto da web 2.0 e da educação aberta, os Cursos Online Abertos Massivos, em inglês Massive Online Open Course (MOOC), surgem como uma modalidade de curso ofertado de forma gratuita, geralmente para qualquer pessoa com acesso à internet em qualquer lugar do mundo. Este modelo integra três elementos: a conectividade das redes sociais, o conhecimento de um especialista em determinada área e a coleção de recursos online abertos. Assim, permite um engajamento ativo de dezenas ou centenas de milhares de estudantes que auto organizam sua participação de acordo com suas metas, conhecimentos prévios, habilidades e interesse comum.
A justificativa para este trabalho está no fato de que MOOCs oferecem uma oportunidade estratégica para melhorar a qualidade da educação, facilitar o diálogo político, a partilha de conhecimento e a capacitação de pessoas. 
</p>
         
<p class="text-justify">Esta plataforma foi desenvolvida como componente curricular do Trabalho Final de Graduação do aluno Kayque Willy Reis de Oliveira, do curso de Sistemas de Informação da Universidade Federal de Itajubá - UNIFEI.</p></p>
      </article>
      <!--Visão geral-->  
                        </session>
                        <!--Texto-->
                      </section>
                      <!--Conteúdo-->
                    </div>
                    <!--Painél-->
                  </section>
                </div><!--row main-->
            </div><!--container-fluid-->
        </div><!--page-content-->
    </div><!--page-content-wrapper-->
    <!--Conteúdo-->
    <hr>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
</body>
</html><?php }
}
